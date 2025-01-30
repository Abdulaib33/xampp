@extends('layouts.app')

@section('title', 'Todo Details')

@section('content')
    <div class="todo-item">
        <h2>{{ $todo->title }}</h2>
        <p>{{ $todo->description }}</p>
        <p>Status: {{ $todo->completed ? 'Completed' : 'Not Completed' }}</p>
        <p>Created: {{ $todo->created_at->diffForHumans() }}</p>
        <p>Last Updated: {{ $todo->updated_at->diffForHumans() }}</p>
        <a href="/todos/{{ $todo->id }}/edit" style="display: inline-block; margin-right: 10px; padding: 5px 10px; background-color: darkblue; color: white; text-decoration: none;">Edit</a>
        <form action="/todos/{{ $todo->id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="/todos" style="display: inline-block; margin-left: 10px; padding: 5px 10px; background-color: darkgreen; color: white; text-decoration: none;">Back to List</a>
    </div>
@endsection