<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('manage.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('manage.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'display_name'  => 'required|max:255',
            'name'          => 'required|max:100|alpha_dash|unique:roles,name',
            'description'   => 'sometimes|max:255'
        ]);
        $role = new Role();
        $role->display_name = $request->get('display_name');
        $role->name = $request->get('name');
        $role->description = $request->get('description');
        $role->save();
        if ($request->has('permissions')) {
            $role->syncPermissions(explode(',', $request->get('permissions')));
        }
        if ( ! $role->save()) {
            Session::flash('danger', 'Failed to create new role.');
            return redirect()->route('roles.create')->withInput();
        }
        Session::flash('success', 'Successfully created new role.');
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::with('permissions')->where('id', $id)->first();
        return view('manage.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::with('permissions')->where('id', $id)->first();
        $permissions = Permission::all();
        return view('manage.roles.edit', compact('role', 'permissions'));
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
        $role = Role::findOrFail($id);
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('description');
        $role->save();
        if ($request->has('permissions')) {
            $role->syncPermissions(explode(',', $request->get('permissions')));
        }
        if ( ! $role->save()) {
            Session::flash('danger', 'Failed to create new role.');
            return redirect()->route('roles.edit', $role->id)->withInput();
        }
        Session::flash('success', 'Successfully created new role.');
        return redirect()->route('roles.show', $role->id);
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
