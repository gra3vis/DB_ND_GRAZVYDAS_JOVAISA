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
 <?php


 $id = $_GET['id'];
 $Book = new Book();
 $Book->loadBook($id);
 echo 'Title: '.$Book->getTitle().'<br/>';
 echo 'Year: '.$Book->getYear().'<br/>';
 echo 'Genre: '.$Book->getGenre().'<br/>';
$authors = $Book->getAuthor($id);

 echo 'Auhtors: '.'<br/>';
foreach ($authors as $rez)
{echo $rez.'<br/>';}




//iteracija
 $Book2 = new Book();
 $Book2->setAll();
 foreach($Book2 as $key -> $value) {
  echo $key.$value;
 }








  mysqli_close($db);
 ?>
</body>
</html>
