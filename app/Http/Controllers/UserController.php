<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->paginate(10);
        return view('manage.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('manage.users.create', compact('roles'));
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
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:users'
        ]);
        $user = new User();
        $password = $request->get('password');
        if ( ! $password) {
            $password = Hash::make($this->generateRandomPassword());
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $password;

        if ( ! $user->save()) {
            Session::flash('danger', 'Failed to create new user.');
            return redirect()->route('users.create');
        }
        if ($request->has('roles')) {
            $user->syncRoles(explode(',', $request->get('roles')));
        }
        return redirect()->route('users.show', $user->id);
    }

    private function generateRandomPassword()
    {
        $length = 10;
        $keyspace = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; $i++) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        return view('manage.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('manage.users.edit', compact('user', 'roles'));
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
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($option = $request->get('password_options') == 'auto') {
            $user->password = Hash::make($this->generateRandomPassword());
        } elseif ($option == 'manual') {
            $user->password = Hash::make($request->get('password'));
        }

        if ( ! $user->save()) {
            Session::flash('danger', 'Failed to update user info.');
            return redirect()->route('users.edit', $id);
        }
        $user->syncRoles(explode(',', $request->get('roles')));

        return redirect()->route('users.show', $id);
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
