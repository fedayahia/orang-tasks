Task3: 
You are managing the member database of the library. You need to retrieve specific information 
about the members who have borrowed books from the library.
1
CREATE DATABASE memberDB;

2
CREATE TABLE Members(
    MemberID INT(11),
    FirstName VARCHAR(50),
     LastName VARCHAR(50),
     Email VARCHAR(100),
    JoinDate DATE
    );
3
    CREATE TABLE BorrowedBooks(
    MemberID INT(11),
      BorrowID INT(11),
     BookID INT(11),
   BorrowDate DATE,
    ReturnDate DATE
    );

    SELECT *
FROM Members
JOIN BorrowedBooks ON Members.MemberID = BorrowedBooks.MemberID
WHERE JoinDate > '2023-01-01'
AND Email NOT LIKE '%@example.com'
GROUP BY Members.MemberID
HAVING COUNT(BorrowedBooks.BorrowID) > 3
ORDER BY LastName ASC;

TASK4 :
1
SELECT 
    MIN(Books.Price) AS MinPrice, 
    MAX(Books.Price) AS MaxPrice 
FROM 
    Books 
JOIN 
    BorrowedBooks ON Books.BookID = BorrowedBooks.BookID 
JOIN 
    Members ON BorrowedBooks.MemberID = Members.MemberID 
WHERE 
    Members.JoinDate > '2023-01-01';

 2
 SELECT COUNT(*)
FROM BOOKS;
SELECT AVG(price)
FROM books;
SELECT SUM(price)
FROM books
WHERE JoinDate>2023-01-01;
3
SELECT * FROM Members WHERE LASTName LIKE 'J%';
4
SELECT MemberID, COUNT(BookID) FROM BorrowedBooks GROUP BY MemberID;
5
SELECT Members.MemberID, Members.FirstName, Members.LastName, Books.Title
 FROM Members JOIN BorrowedBooks ON Members.MemberID = BorrowedBooks.MemberID 
 JOIN Books ON BorrowedBooks.BookID = Books.BookID;