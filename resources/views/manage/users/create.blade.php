@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <form action="{{ route('users.store') }}" method="POST">
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
                    <button class="button is-primary">Create User</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }
        })
    </script>
@stop