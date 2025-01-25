<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    <p>Hello, this is my tasks view</p>

    @foreach ($tasks as $task)
        <h3>{{ $task->title }} Task {{ $task->id }}</h3>
        <p>{{ $task->description }}</p>
        <a href="/tasks/{{ $task->id }}">see all the detail of this task</a>
    @endforeach
        
    <br><br><br>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="description" placeholder="Description"><br>
        <button type="submit">Create Task</button>
    </form>

    @if ($errors->any())
    <div class="alert">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    </div>
    @endif
</body>
</html>