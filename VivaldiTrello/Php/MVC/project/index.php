<!-- project/
├── index.php          (Entry point)
├── controllers/
│   └── BookController.php
├── models/
│   └── BookModel.php
└── views/
    └── book_list.php -->


<?php
// STEP 1: Load the Controller
require_once 'controllers/BookController.php';

// STEP 2: Create a Controller object
$controller = new BookController();

// STEP 3: Call the Controller's action (method) to run the logic
$controller->listBooks();
?>


<!-- User opens index.php
  → index.php creates BookController
    → BookController calls BookModel to get data
      → BookModel returns data (books)
        → BookController loads book_list.php (View)
          → View displays the data! -->