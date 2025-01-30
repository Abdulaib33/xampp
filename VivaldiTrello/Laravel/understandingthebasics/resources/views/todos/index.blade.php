<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <style>
        body {
            background-color: darkslategray;
            color: wheat;
            font-family: Arial, sans-serif;
        }
        div {
            background-color: darkcyan;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: wheat;
        }
        a {
            color: wheat;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background-color: darkred;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: red;
        }
        input[type="checkbox"] {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <a href="/todos/create" style="display: inline-block; margin-bottom: 20px; padding: 10px; background-color: darkgreen; color: white; text-decoration: none;">Create New Todo</a>

    @foreach ($todos as $todo)
    <div>
        <h3>{{ $todo->title }}</h3>
        <p>{{ $todo->description }}</p>
        <p>Completed: {{ $todo->completed ? 'Yes' : 'No' }}</p>
        <form action="/todos/{{ $todo->id }}/toggle" method="POST" style="display: inline;">
            @csrf
            @method('PATCH')
            <input 
                type="checkbox" 
                name="completed" 
                id="completed" 
                {{ $todo->completed ? 'checked' : '' }}
                onchange="this.form.submit()"
            >
            <label for="completed">Mark as {{ $todo->completed ? 'Incomplete' : 'Complete' }}</label>
        </form>
        <form action="/todos/{{ $todo->id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</body>
</html>