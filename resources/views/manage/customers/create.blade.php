@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <hr>
        <form action="{{ route('users.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <p class="control">
                            <input type="email" class="input" name="email" id="email">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <p class="control">
                            <input type="password" class="input" name="password" id="password" :disabled="auto_password" placeholder="Manually give a password to user">
                            <b-checkbox class="m-t-15" name="auto-generate" v-model="auto_password">Auto Generate Password</b-checkbox>
                        </p>
                    </div>
                </div>
                <div class="column">
                    <label for="roles">Roles</label>
                    <input type="hidden" name="roles" :value="roleSelected">
                    @foreach($roles as $role)
                        <div class="field">
                            <b-checkbox v-model="roleSelected" :custom-value="{{ $role->id }}">{{ $role->display_name }}</b-checkbox>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="button is-primary">Create User</button>
        </form>

    </div>
@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true,
                roleSelected: {!! old('roles') ?: '[]' !!}
            }
        })
    </script>
@stop