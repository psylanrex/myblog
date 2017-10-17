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
                <form action="{{ route('roles.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <h2 class="title">Role Details</h2>
                                        <div class="field">
                                            <p class="control">
                                                <label for="display_name" class="label">Name (Human Readable)</label>
                                                <input type="text" class="input" name="display_name" id="display_name" value="{{ old('display_name') }}">
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control">
                                                <label for="name" class="label">Slug (Cannot Be Changed)</label>
                                                <input type="text" class="input" name="name" id="name" value="{{ old('name') }}">
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control">
                                                <label for="description" class="label">Description</label>
                                                <input type="text" class="input" name="description" id="description" value="{{ old('description') }}">
                                            </p>
                                        </div>
                                        <input type="hidden" :value="permissionsSelected" name="permissions">
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <div class="content">
                                            <h2 class="title">Permissions</h2>
                                            @foreach($permissions as $permission)
                                                <div class="field">
                                                    <b-checkbox v-model="permissionsSelected" :native-value="{{ $permission->id }}">
                                                        {{ $permission->display_name }} <em>{{ $permission->description }}</em>
                                                    </b-checkbox>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <button class="button is-primary">Create New Role</button>
                        </div>
                    </div>
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
                permissionsSelected: []
            }
        })
    </script>
@stop