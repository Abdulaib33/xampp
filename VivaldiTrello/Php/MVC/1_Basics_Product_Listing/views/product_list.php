<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="container">

<style>
    body {
        background-color: darkslategray;
        color: wheat;
        
    }

    * {
        text-decoration: none;
        color: wheat;
    }

    input {
        color: black;
    }
</style>
    <h1>Product List</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo $product['name']; ?> (<?php echo $product['category']; ?>) - $<?php echo $product['price']; ?>
                <a href="?action=edit&id=<?php echo $product['id']; ?>">Edit</a>
                <a href="?action=delete&id=<?php echo $product['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Add New Product</h2>
    <form action="index.php?action=add" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
        
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required>
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
