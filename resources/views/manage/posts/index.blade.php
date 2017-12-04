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
        <div class="columns is-multiline"> <!-- .box -->
            @foreach ($posts as $post)
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                              <img src={{ $post->image_url }} alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">{{ $post->title }}</p>
                                </div>
                            </div>
                            <div class="content">
                                <p>
                                    {{ $post->truncate(250) }}
                                </p>
                                <p>
                                    @foreach ($post->tags as $tag)
                                        <a>#{{ $tag->name }} </a>
                                    @endforeach
                                </p>
                                <hr>
                                <p>Created at: {{ $post->created_at }}</p>
                                <p>Published at: {{ $post->published_at }}</p>
                                <hr>
                                <a class="button is-info" href="{{ route('posts.show', $post->id) }}">View</a>
                                <a class="button is-primary" href="/blog/{{ $post->slug }}" target="_blank">View in Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop