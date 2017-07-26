@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Profile for {{ $user->name }}</h1>
            </div>
            <div class="column">
                <a href="{{ route('users.edit', $user->id) }}" class="button is-primary">Edit User Profile</a>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="name">Name</label>
                    <pre>{{ $user->name }}</pre>
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <pre>{{ $user->email }}</pre>
                </div>
            </div>
        </div>
    </div>
@stop