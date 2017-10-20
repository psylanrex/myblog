@extends('layouts.main')

@section('content')
    <div class="post-wrapper">
        <section class="post-title">
            <div class="title-container">
                <h2 class="title">{{ $post->title }}</h2>
                <h3 class="subtitle">{{ date('m-d-Y', strtotime($post->published_at ?: $post->created_at)) }}</h3>
            </div>
        </section>
        <section class="post-hero"> <!-- .hero -->
            <div class="image">
                <img src="{{ $post->image_url }}">
            </div>
        </section> <!-- End .hero -->
        <section class="post-container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-three-quarters content-container">
                    <div class="columns">
                        <div class="column is-three-quarters post-body">
                            <div class="post-body-content">
                                {!! $post->body !!}
                            </div>
                            <div class="post-footer">
                                @foreach ($post->tags as $tag)
                                    <a href="#">#{{ $tag->name }} </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="column sidebar-container">
                            @include('includes.blog.sidebar')
                        </div>
                    </div>
                    
                </div>
                <div class="column"></div>
            </div>
        </section>
    </div>
    
@stop