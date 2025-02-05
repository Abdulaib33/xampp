<?php

class ProductModel {
    // Simulating a database with an array of products
    private $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1000, 'category' => 'Electronics'],
        ['id' => 2, 'name' => 'Book', 'price' => 20, 'category' => 'Education'],
    ];

    // Method to get all products
    public function getProducts() {
        return $this->products;
    }

    // Method to create a new product
    public function createProduct($product) {
        $product['id'] = count($this->products) + 1; // Assign a new unique ID
        $this->products[] = $product; // Add the new product to the array
    }

    // Method to update a product by ID
    public function updateProduct($id, $updatedProduct) {
        foreach ($this->products as &$product) {
            if ($product['id'] == $id) {
                $product = array_merge($product, $updatedProduct); // Update product details
                break;
            }
        }
    }

    // Method to delete a product by ID
    public function deleteProduct($id) {
        foreach ($this->products as $index => $product) {
            if ($product['id'] == $id) {
                unset($this->products[$index]); // Remove the product
                break;
            }
        }
    }
}
?>
