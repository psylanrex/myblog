<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('manage.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('permission_type') == 'crud') {
            $this->validate($request, [
                'resource' => 'required|min:3|max:100|alpha'
            ]);
            $crud = $request->has('crud_selected') ? explode(',', $request->get('crud_selected')) : [];
            $resource = $request->get('resource');
            foreach ($crud as $x) {
                $permission = new Permission();
                $slug = strtolower($x) . '-' . $resource;
                $display_name = ucwords($x . ' ' . $resource);
                $description = "Allows user to " . strtoupper($x) . ' ' . ucwords($resource);
                $permission->name = $slug;
                $permission->display_name = $display_name;
                $permission->description = $description;
                if ( ! $permission->save()) {
                    Session::flash('danger', 'Failed to create new permission.');
                    return redirect()->route('permissions.create')->withInput();
                }
            }

        }

        if ($request->get('permission_type') == 'basic') {
            $permission = new Permission();

            $this->validate($request, [
                'display_name'  => 'required|max:255',
                'name'          => 'required|max:255|alphadash|unique:permissions,name',
                'description'   => 'required|max:255'
            ]);
            $permission->name = $request->get('name');
            $permission->display_name = $request->get('display_name');
            $permission->description = $request->get('description');
            if ( ! $permission->save()) {
                Session::flash('danger', 'Failed to create new permission.');
                return redirect()->route('permissions.create')->withInput();
            }
        }

        Session::flash('success', 'Permission(s) has been successfully added');
        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('manage.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('manage.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'display_name'  => 'required|max:255',
            'description'   => 'required|max:255'
        ]);
        $permission = Permission::findOrFail($id);
        $permission->display_name = $request->get('display_name');
        $permission->description = $request->get('description');
        if ( ! $permission->save()) {
            Session::flash('danger', 'Failed to update permission.');
            return redirect()->route('permissions.edit', $id);
        }
        Session::flash('success', 'Permission has been successfully updated');
        return redirect()->route('permissions.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
