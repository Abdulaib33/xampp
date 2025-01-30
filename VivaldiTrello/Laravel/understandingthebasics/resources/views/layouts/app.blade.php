<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App - @yield('title')</title>
    <style>
        body {
            background-color: darkslategray;
            color: wheat;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
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
        .todo-item {
            background-color: darkcyan;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/todos">Todo List</a>
            <a href="/todos/create">Create Todo</a>
        </nav>
        <h1>Todo App</h1>
        @yield('content')
    </div>
</body>
</html>