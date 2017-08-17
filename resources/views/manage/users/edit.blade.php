@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Profile for {{ $user->name }}</h1>
            </div>
        </div>
        <hr>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name" value="{{ $user->name }}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <p class="control">
                            <input type="email" class="input" name="email" id="email" value="{{ $user->email }}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <b-radio-group v-model="password_options">
                            <div class="field">
                                <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
                                <p class="control">
                                    <input type="text" class="input m-t-10" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                                </p>
                            </div>
                        </b-radio-group>
                    </div>
                </div>
                <div class="column">
                    <label for="roles">Roles</label>
                    <input type="hidden" name="roles" :value="roleSelected">
                    <b-checkbox-group v-model="roleSelected">
                        @foreach($roles as $role)
                            <div class="field">
                                <b-checkbox :custom-value="{{ $role->id }}">{{ $role->display_name }}</b-checkbox>
                            </div>
                        @endforeach
                    </b-checkbox-group>
                </div>
            </div>

            <button class="button is-primary">Save Changes</button>
        </form>

    </div>
@stop
@section('scripts')
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                password_options: 'keep',
                roleSelected: {!! $user->roles->pluck('id') !!}
            }
        })
    </script>
@stop