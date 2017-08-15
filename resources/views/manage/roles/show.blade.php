@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Details for {{ $role->display_name }} Role</h1>
            </div>
            <div class="column">
                <a href="{{ route('roles.edit', $role->id) }}" class="button is-primary">Edit Role</a>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions Available</h2>
                                <ul>
                                    @foreach($role->permissions as $permission)
                                        <li>
                                            {{ $permission->display_name }} <em>( {{ $permission->description }} )</em>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@stop