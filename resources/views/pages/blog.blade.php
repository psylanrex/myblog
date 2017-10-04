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
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="column is-one-quarter sidebar-container">
                        <div class="card-container" id="about-author">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header-container">
                                        <p class="card-header-title">About Author</p>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <div class="card-image">
                                        <figure class="image is-1by1">
                                            <img src="https://s3-us-west-1.amazonaws.com/capital-direct-blog/blog/avatar2.png"></img>
                                        </figure>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-container" id="suggestions">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header-container">
                                        <p class="card-header-title">Suggestions</p>
                                    </div>    
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <a class="panel-block is-active">
                                            <span class="panel-icon">
                                              <i class="fa fa-book"></i>
                                            </span>
                                            bulma
                                          </a>
                                          <a class="panel-block">
                                            <span class="panel-icon">
                                              <i class="fa fa-book"></i>
                                            </span>
                                            marksheet
                                          </a>
                                          <a class="panel-block">
                                            <span class="panel-icon">
                                              <i class="fa fa-book"></i>
                                            </span>
                                            minireset.css
                                          </a>
                                          <a class="panel-block">
                                            <span class="panel-icon">
                                              <i class="fa fa-book"></i>
                                            </span>
                                            jgthms.github.io
                                          </a>
                                          <a class="panel-block">
                                            <span class="panel-icon">
                                              <i class="fa fa-code-fork"></i>
                                            </span>
                                            daniellowtw/infboard
                                          </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column"></div>
        </div>
    </section>
@stop