<?php
require_once 'controllers/ProductController.php';

// Instantiate the controller
$controller = new ProductController();

// Check the action from the URL or set a default action
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Handle different actions
switch ($action) {
    case 'list':
        $controller->listProducts();
        break;
    case 'add':
        // Handle form submission for adding a new product
        $product = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'category' => $_POST['category']
        ];
        $controller->addProduct($product);
        break;
    case 'edit':
        // Assume we have a form to edit the product (not shown in this example)
        $id = $_GET['id'];
        $updatedProduct = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'category' => $_POST['category']
        ];
        $controller->editProduct($id, $updatedProduct);
        break;
    case 'delete':
        // Delete the product based on its ID
        $id = $_GET['id'];
        $controller->deleteProduct($id);
        break;
    default:
        echo "Invalid action.";
}
?>
