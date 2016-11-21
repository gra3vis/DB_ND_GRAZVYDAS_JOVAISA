<?php




include "Book_repository.php";

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
 $BookRep = new Book_repository();
 $Book = $BookRep->getbyId($id);
 echo 'Title: '.$Book->getTitle().'<br/>';
 echo 'Year: '.$Book->getYear().'<br/>';
 echo 'Genre: '.$Book->getGenre().'<br/>';
 $authors = $BookRep->getAuthor($id);

 echo 'Auhtors: '.'<br/>';
 foreach ($authors as $rez)
 {echo $rez.'<br/>';}



 //$BookRep->getAll();



  mysqli_close($db);
 ?>
</body>
</html>

