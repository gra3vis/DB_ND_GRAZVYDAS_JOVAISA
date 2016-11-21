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

}