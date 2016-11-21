<?php


include "Book.php";
/**
 * Created by PhpStorm.
 * User: grazvydas
 * Date: 2016-11-15
 * Time: 17:34
 */
class Book_repository
{
    public function getbyId($id)
    {


        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');

        $query = "SELECT name, year, title, Genre FROM Books LEFT JOIN BookAuthors ON Books.bookId = BookAuthors.books   LEFT JOIN Authors ON BookAuthors.authors = Authors.authorId WHERE Books.bookId = $id";
        $result = mysqli_query($db, $query) or die('Error querying database.');
        $book_details = mysqli_fetch_array($result);

        $Book = new Book();
        $Book->setTitle($book_details['title']);
        $Book->setYear($book_details['year']);
        $Book->setGenre($book_details['Genre']);
        return $Book;
    }

    public function getAll()
    {

        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');

        $query = "SELECT * FROM Books";
        $result = mysqli_query($db, $query) or die('Error querying database.');

        while($row = mysqli_fetch_array($result))
        {
            $book = new Book();
            $book->setBookId($row['bookId']);
            $book->setYear($row['year']);
            $book->setTitle($row['title']);
            $book->setGenre($row['Genre']);
            $allbooks[] = $book;
        }
        mysqli_close($db);
        return $allbooks;
    }


    public function getAuthor($id)
    {
        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');
        $query = "SELECT name FROM Books LEFT JOIN BookAuthors ON Books.bookId = BookAuthors.books   LEFT JOIN Authors ON BookAuthors.authors = Authors.authorId WHERE Books.bookId = $id";
        $result = mysqli_query($db, $query) or die('Error querying database.');
        $rez = array();
        while($row = mysqli_fetch_array($result))
            $authors[] = $row['name'];
        mysqli_close($db);
        return $authors;
    }

}