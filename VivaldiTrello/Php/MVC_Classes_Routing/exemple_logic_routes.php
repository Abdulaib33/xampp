<?php
require_once 'controllers/PostController.php'; // Change to relevant controller

// Define action based on query parameters
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Create the controller object
$controller = new PostController(); // Change to relevant controller

// Route the action to the right method in the controller
switch ($action) {
    case 'list':
        $controller->listPosts(); // Call list method
        break;
    case 'view':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            $controller->viewPost($id); // Call view method with ID
        } else {
            echo "Invalid ID";
        }
        break;
    default:
        echo "Invalid action";
}
?>
