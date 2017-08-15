@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Roles</h1>
            </div>
            <div class="column">
                <a href="{{ route('roles.create') }}" class="button is-primary"><i class="fa fa-user-add"></i>Create New Role</a>
            </div>
        </div>
        <hr>
        <div class="columns is-multiline"> <!-- .box -->
            @foreach($roles as $role)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h3 class="title">{{ $role->display_name }}</h3>
                                    <h4 class="subtitle"><em>{{ $role->name }}</em></h4>
                                    <p>
                                        {{ $role->description }}
                                    </p>
                                </div>
                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{ route('roles.show', $role->id) }}" class="button is-primary is-fullwidth">Details</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{ route('roles.edit', $role->id) }}" class="button is-light is-fullwidth">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div> <!-- End .box -->
    </div>
@stop