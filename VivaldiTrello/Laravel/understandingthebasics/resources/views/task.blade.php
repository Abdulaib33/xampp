<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task </title>
</head>
<body>

  

        <h1>Task {{ $task->id }}</h1>
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
        <p>{{ $task->created_at }}</p>
        <p>{{ $task->updated_at }}</p>

        
        @if ($errors->any())
        <div class="alert">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        </div>
        @endif


</body>
</html>