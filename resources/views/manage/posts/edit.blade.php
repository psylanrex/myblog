@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Edit Post</h1>
                <h2 class="subtitle is-3">{{ $post->title }}</h2>
            </div>
        </div>
        <hr>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            {{method_field('PUT')}}
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
                                            <input type="text" class="input" name="title" id="title" value="{{ $post->title }}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="body" class="label">Body</label>
                                        <p class="control">
                                            <textarea class="textarea" name="body" id="body" rows=20>{{ $post->body }}</textarea>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label for="published_at" class="label">Publish On</label>
                                        <p class="control">
                                            <input type="datetime" class="input" name="published_at" id="published_at" value="{{ $post->published_at }}">
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
                                        <input type="hidden" name="tags" :value="dbTags">
                                        <div>
                                            <multiselect v-model="selectedTags" :options="tags" label="name" track-by="id" :searchable="true" :multiple="true" :taggable="true" :hide-selected="true"></multiselect>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <button class="button is-primary">Save Changes</button>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            menubar: false,
            toolbar: 'undo redo | styleselect | alignleft aligncenter alignright | bold italic | link image | fontselect',
            font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n'
        });
        var app = new Vue({
            el: '#app',
            data: {
                selectedTags: {!! $post->tags !!},
                tags: {!! $tags !!}
            },
            computed: {
                dbTags: function() {
                    return JSON.stringify(this.selectedTags);
                }
            }
        })
    </script>
@stop