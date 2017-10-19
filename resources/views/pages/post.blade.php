@extends('layouts.main')

@section('content')
    <section class="post-title">
        <div class="title-container">
            <h2 class="title">{{ $post->title }}</h2>
        </div>
    </section>
    <section class="post-hero"> <!-- .hero -->
        <div class="image">
            <img src="https://s3-us-west-1.amazonaws.com/capital-direct-blog/blog/main1.jpg">
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
@stop