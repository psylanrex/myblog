@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Permission</h1>
            </div>
            <div class="column">
                <a href="{{ route('permissions.create') }}" class="button is-primary"><i class="fa fa-user-add"></i>Create New Permission</a>
            </div>
        </div>
        <hr>
        <div class="box"> <!-- .box -->
            <table class="table is-narrow">
                <thead>
                <tr>
                    <th>Permission</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->display_name }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>
                            <a role="button" class="button is-primary is-outlined" href="{{ route('permissions.show', $permission->id) }}">
                                View
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- End .box -->
    </div>
@stop