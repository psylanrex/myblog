@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">{{ $post->title }}</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column is-two-third">
                <div class="columns">
                    <div class="column">
                        <figure class="image is-2by1">
                            <img src="{{ $post->image_url }}"></img>
                        </figure>
                    </div>
                </div>
                <hr>
                <div class="columns">
                    <div class="column">
                        {!! $post->body !!}
                        <br>
                        <p>
                            @foreach ($post->tags as $tag)
                                <a>#{{ $tag->name }} </a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Details
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p>URL: <a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
                            <p>Created Time: {{ $post->created_at }}</p>
                            <p>Updated Time: {{ $post->updated_at }}</p>
                            <p>Published Time: {{ $post->published_at }}</p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="{{ route('posts.edit', $post->id) }}" class="card-footer-item">Edit</a>
                        <a role="button" type="submit" onclick="event.preventDefault(); document.getElementById('post-delete-form').submit()" class="card-footer-item">Delete</a>
                    </footer>
                    @include('includes.forms.post-delete')
                </div>
            </div>
        </div>
        
    </div>
@stop
