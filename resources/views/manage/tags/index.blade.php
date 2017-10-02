@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Tags</h1>
            </div>
            <div class="column">
                <a href="{{ route('tags.create') }}" class="button is-primary"><i class="fa fa-user-add"></i>Create New Tag</a>
            </div>
        </div>
        <hr>
        <div class="box"> <!-- .box -->
            <table class="table is-striped is-bordered">
                <thead>
                <tr>
                    <th>Tag Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <a href="{{ route('tags.show', $tag->id) }}" class="button is-primary">View</a>
                            <a href="{{ route('tags.edit', $tag->id) }}" class="button is-info">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- End .box -->
    </div>
@stop