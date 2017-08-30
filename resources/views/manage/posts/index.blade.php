@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Posts</h1>
            </div>
            <div class="column">
                <a href="{{ route('posts.create') }}" class="button is-primary"><i class="fa fa-user-add"></i>Create New Post</a>
            </div>
        </div>
        <hr>
        <div class="box"> <!-- .box -->
            <table class="table is-narrow">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="button is-primary">Edit</a>
                            <a href="" class="button is-primary">View On Blog</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop