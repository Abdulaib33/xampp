<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "todo_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle GET: Fetch all tasks
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }
    echo json_encode($tasks);
}

// Handle POST: Add a new task
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $taskName = $data["task_name"];

    // Insert into database
    $sql = "INSERT INTO tasks (task_name) VALUES ('$taskName')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Task added!"]);
    } else {
        echo json_encode(["error" => "Error adding task"]);
    }
}

// Handle PUT: Toggle task completion
if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    $data = json_decode(file_get_contents("php://input"), true);
    $taskId = $data["id"];
    $isCompleted = $data["is_completed"];

    // Update the task
    $sql = "UPDATE tasks SET is_completed = $isCompleted WHERE id = $taskId";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Task updated!"]);
    } else {
        echo json_encode(["error" => "Error updating task"]);
    }
}

// Handle DELETE: Remove a task
if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);
    $taskId = $data["id"];

    // Delete from database
    $sql = "DELETE FROM tasks WHERE id = $taskId";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Task deleted!"]);
    } else {
        echo json_encode(["error" => "Error deleting task"]);
    }
}

// Close the connection
$conn->close();
?>