@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New Post</h1>
            </div>
        </div>
        <hr>
        
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <div class="field">
                                        <label for="title" class="label">Title</label>
                                        <p class="control">
                                            <input type="text" class="input" name="title" id="title" value="{{ old('title') }}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="body" class="label">Body</label>
                                        <p class="control">
                                            <textarea class="textarea" name="body" id="body" rows=20>{{ old('body') }}</textarea>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="published_at" class="label">Publish On</label>
                                        <p class="control">
                                            <input type="datetime" class="input" name="published_at" id="published_at" value="{{ old('published_at') }}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="upload_image" class="label">Upload Image</label>
                                        <p class="control">
                                            <input type="file" class="input" name="image" id="upload_image">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="label">Select Tags</p>
                                        <input type="hidden" name="tags" :value="selectedTags">
                                        <div class="columns is-multiline">
                                            @foreach ($tags as $tag)
                                                <div class="column is-one-quarter">
                                                    <div class="field">
                                                        <b-checkbox v-model="selectedTags" :native-value="{{ $tag->id }}">{{ $tag->name }}</b-checkbox>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <button class="button is-primary" type="submit">Create Post</button>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                selectedTags: []
            }
        })
    </script>
@stop