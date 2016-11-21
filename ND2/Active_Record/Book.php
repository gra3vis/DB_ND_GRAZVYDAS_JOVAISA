<?php



/**
 * Created by PhpStorm.
 * User: grazvydas
 * Date: 2016-11-15
 * Time: 16:47
 */
class Book
{
    private $bookId;
    private $authorId;
    private $title;
    private $year;
    private $Genre;
    private $author;
    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * @param mixed $bookId
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }
    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->Genre;
    }
    /**
     * @param mixed $Genre
     */
    public function setGenre($Genre)
    {
        $this->Genre = $Genre;
    }
    /**
     * @return mixed
     */
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
    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {

        $this->author = $author;
    }

    public function loadBook($id)
    {
        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');

        $query = "SELECT name, year, title, Genre FROM Books LEFT JOIN BookAuthors ON Books.bookId = BookAuthors.books   LEFT JOIN Authors ON BookAuthors.authors = Authors.authorId WHERE Books.bookId = $id";
        $result = mysqli_query($db, $query) or die('Error querying database.');
        $book_details = mysqli_fetch_array($result);
        $this->setTitle($book_details['title']);
        $this->setYear($book_details['year']);
        $this->setGenre($book_details['Genre']);
    }

    public function setAll()
    {
        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');

        $query = "SELECT name, year, title, Genre FROM Books LEFT JOIN BookAuthors ON Books.bookId = BookAuthors.books   LEFT JOIN Authors ON BookAuthors.authors = Authors.authorId ";
        $result = mysqli_query($db, $query) or die('Error querying database.');
        while($book_details = mysqli_fetch_array($result))
        $this->setTitle($book_details['title']);
        $this->setYear($book_details['year']);
        $this->setGenre($book_details['Genre']);
    }

    public function getAllId()
    {
        $db = mysqli_connect('localhost','root','root','test')
        or die('Error connecting to MySQL server.');

        $query = "SELECT bookId FROM Books";
        $result = mysqli_query($db, $query) or die('Error querying database.');
        while($row = mysqli_fetch_array($result))
            $ids[] = $row['bookId'];
        mysqli_close($db);
        return $ids;
    }

}