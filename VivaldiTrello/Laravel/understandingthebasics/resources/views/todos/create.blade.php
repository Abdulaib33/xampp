@extends('layouts.app')

@section('title', 'Create Todo')

@section('content')
    <h1>Create a New Todo</h1>
    <form action="/todos" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required style="width: 100%; padding: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="description">Description:</label>
            <textarea name="description" id="description" style="width: 100%; padding: 5px;"></textarea>
        </div>
        <button type="submit">Create Todo</button>
    </form>
@endsection