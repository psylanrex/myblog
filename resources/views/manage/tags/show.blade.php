@extends('layouts.manage')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 class="title">Manage Tags</h1>
        </div>
    </div>
    <div class="columns">
        <div class="column is-one-third">
            <div class="card">
                <div class="card-content">
                    <div class="content">
                        <p class="title">{{ $tag->name }}</p>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="{{ route('tags.edit', $tag->id) }}" class="card-footer-item">Edit</a>
                    <a role="button" type="submit" onclick="event.preventDefault(); document.getElementById('tag-delete-form').submit()" class="card-footer-item">Delete</a>
                </footer>
                @include('includes.forms.tag-delete')
            </div>
        </div>
        
    </div>
@stop