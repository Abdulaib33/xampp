@extends('layouts.app')

@section('title', 'Edit Todo')

@section('content')
    <h1>Edit Todo</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $todo->title }}" required style="width: 100%; padding: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="description">Description:</label>
            <textarea name="description" id="description" style="width: 100%; padding: 5px;">{{ $todo->description }}</textarea>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="completed">Completed:</label>
            <input type="checkbox" name="completed" id="completed" {{ $todo->completed ? 'checked' : '' }}>
        </div>
        <button type="submit">Update Todo</button>
    </form>
    <a href="/todos/{{ $todo->id }}" style="display: inline-block; margin-top: 10px; padding: 5px 10px; background-color: darkgreen; color: white; text-decoration: none;">Cancel</a>
@endsection