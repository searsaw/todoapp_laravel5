@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Edit Todo</span>
                <form method="post" action="{{ route('todos.update', $todo) }}">

                    <div class="input-field">
                        Description
                        <input type="text" name="description" value="{{ $todo->description }}">
                    </div>

                    <div>
                        <input type="checkbox" name="completed" id="completed" {{ $todo->isCompleted() ? 'checked' : '' }}>
                        <label for="completed">Completed?</label>
                    </div>

                    <div class="input-field">
                        <button type="submit" class="btn waves-effect waves-light">Update</button>
                        <a href="{{ route('todos.show', $todo) }}" class="btn waves-effect waves-light">Cancel</a>
                    </div>

                    <input type="hidden" name="_method" value="PUT">
                    {!! csrf_field() !!}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection