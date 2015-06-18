@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s6 offset-s3">
        <h1>Todos</h1>
        <ul class="collection">
            @foreach ($todos as $todo)
            <li class="collection-item">
                <a href="{{ route('todos.show', $todo) }}">{{ $todo->description }}</a>
            </li>
            @endforeach
        </ul>
        <a href="{{ route('todos.create') }}" class="btn waves-effect waves-light">Add a todo</a>
    </div>
</div>
@endsection