@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">{{ $todo->description }}</span>

                <p>
                  <input type="checkbox" id="completed" disabled {{ $todo->isCompleted() ? 'checked' : '' }}>
                  <label for="completed">Completed</label>
                </p>

                <a href="{{ route('todos.edit', $todo) }}" class="btn waves-effect waves-light">Edit</a>
                <form method="post" action="{{ route('todos.destroy', $todo) }}" style="display: inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn waves-effect waves-light">Delete</button>
                </form>
                <a href="{{ route('todos.index') }}" class="btn waves-effect waves-light">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection