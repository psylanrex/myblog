@extends('layouts.main')

@section('content')
    <section class="blog-title">
        <div class="title-container">
            <h2 class="title">Tips & Advice on Finance from Insiders</h2>
        </div>
    </section>
    <section class="blog-hero"> <!-- .hero -->
        <div class="image">
            <img src="https://s3-us-west-1.amazonaws.com/capital-direct-blog/blog/main1.jpg">
        </div>
    </section> <!-- End .hero -->
    <section class="blog-container">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-three-quarters blog-body">
                <div class="columns">
                    <div class="column is-three-quarters main-content-container">
                        @if ($posts->isNotEmpty())
                            @foreach ($posts as $post)
                                <div class="columns">
                                    <div class="column">
                                        <div class="post-container">
                                            <div class="card">
                                                <header class="card-header">
                                                    <div class="card-header-container">
                                                        <p class="title">
                                                            {{ $post->title }}
                                                        </p>
                                                        <p class="subtitle">
                                                            <time datetime="{{ date('Y-m-d', strtotime($post->published_at)) }}">{{ date('Y-m-d', strtotime($post->published_at)) }}</time>
                                                        </p>
                                                    </div>    
                                                </header>
                                                <div class="card-content">
                                                    <div class="card-image">
                                                        <figure class="image is-3by2">
                                                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                                                        </figure>
                                                    </div>
                                                    <div class="content">
                                                        <p>{{ $post->truncate(100) }}</p>
                                                        <p>
                                                            @foreach ($post->tags as $tag)
                                                                <a href="#">#{{ $tag->name }}</a> 
                                                            @endforeach
                                                        </p>
                                                        <br>  
                                                        <a href="/blog/{{ $post->slug }}" id="read-more">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        @else
                            <div class="no-post-message">
                                <p>No posts available</p>
                            </div>
                        @endif
                        {{ $posts->links() }}
                    </div>
                    <div class="column is-one-quarter sidebar-container">
                        @include('includes.blog.sidebar')
                    </div>
                </div>
            </div>
            <div class="column"></div>
        </div>
    </section>
@stop