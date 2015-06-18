@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s8 offset-s2">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Register</span>
                <form method="POST" action="/register">
                    {!! csrf_field() !!}

                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="input-field">
                        <input type="text" name="name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field">
                        <input type="email" name="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password_confirmation">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <div class="input-field">
                        <button type="submit" class="btn waves-effect waves-light">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection