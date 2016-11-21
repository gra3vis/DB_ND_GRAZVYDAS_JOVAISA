<?php
include "Book_repository.php";
?>
<html>
<head>
</head>
<body>
<h1>Book details:</h1>
<ul>
 <?php
 $bookrepository = new Book_repository();
 $book = $bookrepository->getAll();
 foreach($book as $b)
 {
  $id = $b->getBookId();
  echo '<li>' . '<a href = "book_details.php?id=' . $id .'">' . $b->getTitle() . '</a>' . '</li>';
 }
 ?>
</ul>
</body>
</html>
