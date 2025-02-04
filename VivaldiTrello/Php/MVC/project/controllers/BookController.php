<?php
require_once __DIR__ . '/../models/BookModel.php'; // Correct path to include the model

class BookController {
  public function listBooks() {
    // STEP 4: Create a Model to get data
    $model = new BookModel();

    // STEP 5: Ask the Model for data (books)
    $books = $model->getBooks();

    // STEP 6: Load the View and pass the data to it
    include __DIR__ . '/../views/book_list.php'; 
  }
}
?>
