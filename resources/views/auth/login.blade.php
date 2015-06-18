@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s8 offset-s2">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Login</span>

                <form method="POST" action="/login">
                    {!! csrf_field() !!}

                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="input-field">
                        <input type="email" name="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password">
                        <label for="password">Password</label>
                    </div>

                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>

                    <div class="input-field">
                        <button type="submit" class="btn waves-effect waves-light">Login</button>
                    </div>
                </form>

                <div class="card-action">
                    <a href="/register">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection