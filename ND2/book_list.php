<?php
$db = mysqli_connect('localhost','root','root','duomenys')
or die('Error connecting to MySQL server.');
?>
<html>
<head>
</head>
<body>
 <h1>Book details:</h1>
 <ul>
 <?php
  $query = "SELECT * FROM Books";
  $result = mysqli_query($db, $query) or die('Error querying database.');
  while ($row = mysqli_fetch_array($result)) {
   $book_title = $row['title'];
   $id = $row['bookId'];
   echo '<li>' . '<a href = "book_details.php?id=' . $id .'">' . $book_title . '</a>' . '</li>';
  }
  mysqli_close($db);
 ?>
 </ul>
</body>
</html>
