@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Edit Permission</h1>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="display_name" class="label">Name (Display Name)</label>
                        <p class="control">
                            <input type="text" class="input" name="display_name" id="display_name" value="{{ $permission->display_name }}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="name" class="label">Slug</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name" value="{{ $permission->name }}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="description" class="label">Description</label>
                        <p class="control">
                            <input type="text" class="input" name="description" id="description" value="{{ $permission->description }}">
                        </p>
                    </div>
                    <button class="button is-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
@stop