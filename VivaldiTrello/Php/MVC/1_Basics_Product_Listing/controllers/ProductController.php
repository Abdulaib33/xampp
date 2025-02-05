<?php
require_once 'models/ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel(); // Create an instance of the ProductModel
    }

    // Method to display the list of products
    public function listProducts() {
        $products = $this->model->getProducts();
        include 'views/product_list.php'; // Load the view to display products
    }

    // Method to add a new product
    public function addProduct($product) {
        $this->model->createProduct($product); // Add product to the array
        $this->listProducts(); // Redirect to the list of products
    }

    // Method to update a product by ID
    public function editProduct($id, $updatedProduct) {
        $this->model->updateProduct($id, $updatedProduct); // Update product
        $this->listProducts(); // Redirect to the list of products
    }

    // Method to delete a product by ID
    public function deleteProduct($id) {
        $this->model->deleteProduct($id); // Delete product from the array
        $this->listProducts(); // Redirect to the list of products
    }
}
?>
