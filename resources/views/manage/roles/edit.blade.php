@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Edit Role</h1>
            </div>
        </div>
        <hr>
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h2 class="title">Role Details</h2>
                                    <div class="field">
                                        <label for="display_name" class="label">Name (Human Readable)</label>
                                        <p class="control">
                                            <input type="text" class="input" name="display_name" id="display_name" value="{{ $role->display_name }}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="name" class="label">Slug</label>
                                        <p class="control">
                                            <input type="text" class="input" name="name" id="name" value="{{ $role->name }}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="description" class="label">Description</label>
                                        <p class="control">
                                            <input type="text" class="input" name="description" id="description" value="{{ $role->description }}">
                                        </p>
                                    </div>
                                    <input type="hidden" :value="permissionsSelected" name="permissions">
                                </div>
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
                                    <b-checkbox-group v-model="permissionsSelected">
                                        @foreach($permissions as $permission)
                                            <div class="field">
                                                <b-checkbox :custom-value="{{ $permission->id }}">{{ $permission->display_name }} <em>{{ $permission->description }}</em></b-checkbox>
                                            </div>
                                        @endforeach
                                    </b-checkbox-group>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <button class="button is-primary">Save Changes</button>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',

            data: {
                permissionsSelected: {!! $role->permissions->pluck('id') !!}
            }
        })
    </script>
@stop