@extends('layouts.app')

@section('content')
    <div class="container m-b-25">
        @if (session('status'))
            <div class="notification is-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-50">
                <div class="card"> <!-- .card -->
                    <div class="card-content"> <!-- .card-content -->
                        <h1 class="title">Forgot Password?</h1>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('password.email') }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="email" class="label">Email Address</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                </p>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <button class="button is-primary is-outlined is-fullwidth m-t-20">Get Reset Link</button>
                        </form>
                    </div> <!-- End .card-content -->
                </div> <!-- End .card -->
                <h5 class="has-text-centered m-t-30">
                    <a href="{{ route('login') }}" class="is-muted"><i class="fa fa-caret-left m-t-5 m-r-5" aria-hidden="true"></i> Back to Log In</a>
                </h5>
            </div>
        </div>
    </div>
@endsection
