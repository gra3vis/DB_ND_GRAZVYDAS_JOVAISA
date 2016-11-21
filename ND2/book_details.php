<?php
$db = mysqli_connect('localhost','root','root','duomenys')
or die('Error connecting to MySQL server.');
?>
<html>
<head>
</head>
<body>
 <h1>Book details:</h1>
 <?php
  $id = $_GET['id'];
  $query = "SELECT * FROM Books WHERE bookId = $id";
  $result = mysqli_query($db, $query) or die('Error querying database.');
  $book_details = mysqli_fetch_array($result);
  echo $book_details['title'] . '<br/>';
  echo $book_details['year'] . '<br/>';

  $query = "Select Books.title, Books.year, Authors.name from Books left join Authors ON Books.authorId=Authors.authorId WHERE Books.bookId = $id";
  $result = mysqli_query($db, $query) or die('Error querying database.');
  $authors = mysqli_fetch_array($result);
  do {
      echo $authors['name'] . '<br/>'; 
  } while ($authors = mysqli_fetch_array($result));

  mysqli_close($db);
 ?>
</body>
</html>

