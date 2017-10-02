@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New Tag</h1>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <form action="{{ route('tags.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <div class="field">
                                            <p class="control">
                                                <label for="tag_name" class="label">Name</label>
                                                <input type="text" class="input" name="tag_name" id="tag_name" value="{{ old('tag_name') }}">
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <button class="button is-primary">Create New Tag</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
