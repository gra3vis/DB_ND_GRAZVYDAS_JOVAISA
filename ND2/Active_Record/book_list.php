<?php
include "Book.php";
$db = mysqli_connect('localhost','root','root','test')
or die('Error connecting to MySQL server.');
?>
<html>
<head>
</head>
<body>
 <h1>Book details:</h1>
 <ul>
 <?php
 $book = new Book("localhost","root", "root", "Nd2");
 $bookId = $book->getAllId();
 foreach($bookId as $bookIdrez) {
  $id = $bookIdrez;
  $book->loadBook($id);
  echo '<li>' . '<a href = "book_details.php?id=' . $id . '">' . $book->getTitle() . '</a>' . '</li>';
 }
 ?>
 </ul>
</body>
</html>
