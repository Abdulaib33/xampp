<!DOCTYPE html>
<html>
<body>
<style>
    body {
        background-color: darkslategray;
        color: wheat;
    }
</style>
  <h1>Book List</h1>
  <ul>
    <!-- STEP 6a: Loop through the data passed from the Controller -->
    <?php foreach ($books as $book): ?>
      <li><?php echo $book['title']; ?> by <?php echo $book['author']; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>