@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{ route('users.create') }}" class="button is-primary"><i class="fa fa-user-add"></i>Create New User</a>
            </div>
        </div>
        <hr>
        <div class="box"> <!-- .box -->
            <table class="table is-narrow">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="button is-primary">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- End .box -->
        {{ $users->links() }}
    </div>
@stop