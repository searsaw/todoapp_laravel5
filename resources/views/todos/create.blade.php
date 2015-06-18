@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">New Todo</span>
                <form method="post" action="{{ route('todos.store') }}">

                    <div class="input-field">
                        Description
                        <input type="text" name="description">
                    </div>

                    <div>
                        <input type="checkbox" name="completed" id="completed">
                        <label for="completed">Completed?</label>
                    </div>

                    <div class="input-field">
                        <button type="submit" class="btn waves-effect waves-light">Add</button>
                        <a href="{{ route('todos.index') }}" class="btn waves-effect waves-light">Cancel</a>
                    </div>
                    {!! csrf_field() !!}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection