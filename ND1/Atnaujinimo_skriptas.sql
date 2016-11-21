--
-- Database: `Books`
--


--
-- Table structure for table `Authors` - authors of the books
--

CREATE TABLE IF NOT EXISTS `Authors` (
  `authorId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`authorId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;

--
-- Dumping data for table `Authors`
--

INSERT INTO `BookAuthors` (`id`, `books`, `authors`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 3, 5),
(6, 4, 6),
(7, 4, 7);

--
-- Table structure for table `Books` - books with only main info
--

CREATE TABLE IF NOT EXISTS `Books` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT,
  `authorId` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`bookId`, `authorId`, `title`, `year`) VALUES
(1, 1, 'Programming F# 3.0, 2nd Edition', 2012),
(2, 2, 'Regular Expressions Cookbook, 2nd Edition', 2012),
(3, 4, 'Head First Networking', 2009),
(4, 6, 'The Art of Concurrency', 2009),
(5, 7, '97 Things Every Programmer Should Know', 2010),
(6, NULL, 'McCullough and Berglund on Mastering Advanced Git', NULL),
(7, NULL, 'Version Control with Git, 2nd Edition', 2012),
(8, NULL, 'Learning Python, 4th Edition', 2009);




Select Books.title, Books.year, Authors.name from Books 
left join Authors ON Books.authorId==Authors.authorId



UPDATE Books
SET authorId='3'
WHERE bookId='3'; 


SELECT COUNT(authorId) AS pasirinkto autoriaus knygos FROM Books
WHERE authorID=1;



SELECT COUNT(DISTINCT authorId) AS AutoriuKiekis FROM Books; 

dro

SELECT count(*) FROM Books WHERE AuthorId IS NULL 
UNION ALL
SELECT count(*) FROM Books WHERE AuthorId IS NOT NULL


DELETE FROM Books Where BookId = '9', BookId = '10';


CREATE TABLE Genre
(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);


CREATE TABLE IF NOT EXISTS `Genre` (
  `genreId` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`genreId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;


ALTER TABLE Books
ADD genreId int(11);

INSERT INTO 'Genre' ('genreId', 'genre') VALUES 
(1, 'Mokslai'), 
(2, 'Istorija');



CREATE TABLE IF NOT EXISTS `BookAuthors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `books` int(11) NOT NULL,
  `authors` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;




ALTER TABLE Books
DROP COLUMN authorId;


Select Books.title, Authors.name from Books 
left join Authors ON Books.authorId==Authors.authorId





SELECT  Books.title, 
	Books.bookId,
        GROUP_CONCAT(Authors.name ORDER BY Authors.name) Authors
FROM    Books
        INNER JOIN BookAuthors
            ON Books.bookId = BookAuthors.books 
        INNER JOIN Authors
            ON BookAuthors.authors = Authors.authorId
GROUP   BY Books.bookId, Books.title;





















SELECT  book.BOOK_ID, book.BOOK_TITLE, 
listagg (CONCAT(CONCAT(author.AUTHOR_FIRSTNAME, ' '),author.AUTHOR_LASTNAME), ',') 
WITHIN GROUP 
(ORDER BY author.AUTHOR_FIRSTNAME) FirstName
FROM    Books book
        INNER JOIN authorbooks ab
            ON ab.BOOKS_ID = book.BOOK_ID
        INNER JOIN Authors author
            ON ab.Author_id = author.Author_ID




SELECT  a.Book_ID, 
        a.Title,
        GROUP_CONCAT(c.Name ORDER BY c.Name) Authors
FROM    Book a
        INNER JOIN book_author b
            ON a.Book_ID = b.Book_ID 
        INNER JOIn Author c
            ON b.Author_ID = c.Author_ID
GROUP   BY a.Book_ID, a.Title

ALTER TABLE Books CONVERT TO CHARACTER SET utf8;







