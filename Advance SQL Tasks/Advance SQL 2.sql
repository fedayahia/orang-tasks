TASK1:
CREATE DATABASE  school_database;

CREATE TABLE Students (
    StudentID INT PRIMARY KEY,
    FirstName VARCHAR(50) ,
    LastName VARCHAR(50) ,
    BirthDate DATE ,
    Email VARCHAR(100) 
);

CREATE TABLE Teachers (
    TeacherID INT PRIMARY KEY,
    FirstName VARCHAR(50) ,
    LastName VARCHAR(50) ,
    Email VARCHAR(100) 
);

CREATE TABLE Classes (
    ClassID INT PRIMARY KEY,
    ClassName VARCHAR(100),
    TeacherID INT
);

CREATE TABLE Enrollments (
    EnrollmentID INT PRIMARY KEY,
    StudentID INT,
    ClassID INT,
    EnrollmentDate DATE 

);

INSERT INTO Classes (ClassID, ClassName, TeacherID)
VALUES
(1, 'Mathematics', 1),
(2, 'Science', 2),
(4, 'English', 4),
(5, 'Art', 5);

INSERT INTO Enrollments (EnrollmentID, StudentID, ClassID, EnrollmentDate)
VALUES
(1, 1, 1, '2025-01-01'),
(2, 2, 2, '2025-01-02'),
(3, 3, 3, '2025-01-03'),
(4, 4, 4, '2025-01-04'),
(5, 5, 5, '2025-01-05'),
(6, 6, 6, '2025-01-06'),
(7, 7, 7, '2025-01-07'),
(8, 8, 8, '2025-01-08'),
(9, 9, 9, '2025-01-09'),
(10, 10, 10, '2025-01-10');

1. SQL INSERT INTO Statement 
• Task: Add a new student to the Students table. 

INSERT INTO Students (StudentID, FirstName, LastName, BirthDate, Email)
VALUES
(1, 'Alice', 'Johnson', '2001-02-15', 'alice.johnson@example.com'),
(2, 'Bob', 'Smith', '2000-07-10', 'bob.smith@example.com'),
(3, 'Charlie', 'Brown', '1999-11-20', 'charlie.brown@example.com'),
(4, 'Diana', 'Prince', '2002-05-25', 'diana.prince@example.com'),
(5, 'Ethan', 'Hunt', '2001-09-12', 'ethan.hunt@example.com'),
(6, 'Fiona', 'Clark', '1998-01-30', 'fiona.clark@example.com'),
(7, 'George', 'Miller', '2003-03-18', 'george.miller@example.com'),
(8, 'Hannah', 'Davis', '2000-06-09', 'hannah.davis@example.com'),
(9, 'Ian', 'Taylor', '1999-12-01', 'ian.taylor@example.com'),
(10, 'Jessica', 'Moore', '2002-08-23', 'jessica.moore@example.com'),
(11, 'Kevin', 'Lee', '1998-10-15', 'kevin.lee@example.com'),
(12, 'Laura', 'Walker', '2001-04-17', 'laura.walker@example.com'),
(13, 'Michael', 'Scott', '1999-03-25', 'michael.scott@example.com'),
(14, 'Nina', 'Perez', '2003-11-05', 'nina.perez@example.com'),
(15, 'Oscar', 'Garcia', '2002-02-19', 'oscar.garcia@example.com');


INSERT INTO Teachers (TeacherID, FirstName, LastName, Email)
VALUES
(1, 'Alice', 'Brown', 'alice.brown@example.com'),
(2, 'Bob', 'Smith', 'eggt@gmail.com'),
(3, 'Charlie', 'Taylor', 'charlie.taylor@example.com'),
(4, 'Diana', 'Prince', 'diana.prince@example.com'),
(5, 'Ethan', 'Clark', 'ethan.clark@example.com');


2. SQL SELECT Statement 
• Task: Retrieve the list of all classes along with the names of their teachers. 
SELECT 
    Classes.ClassID, 
    Classes.ClassName, 
    Teachers.FirstName AS TeacherFirstName, 
    Teachers.LastName AS TeacherLastName
FROM 
    Classes
JOIN 
    Teachers
ON 
    Classes.TeacherID = Teachers.TeacherID;

3. SQL UPDATE Statement 
• Task: Update the email address of the teacher with TeacherID = 2. 
UPDATE teacher 
SET Email = 'fedayahia@gmail.com' 
WHERE TeacherID = 2; 

4. SQL DELETE Statement 
• Task: Remove the enrollment record for a student with StudentID = 3 from the 
Enrollments table. 

DELETE FROM Enrollments
WHERE StudentID = 3;


Task 2:  
You are managing a library database that contains information about books, authors, and 
members.  

The database includes the following tables: 
1. `Books` (BookID, Title, AuthorID, Genre, Price, PublicationDate)

CREATE TABLE Books(
 BookID INT(11),
 Title  VARCHAR(100),
 AuthorID INT(11),
 Genre VARCHAR(100),
Price DECIMAL(10, 2),
PublicationDate DATE
);

2. `Authors` (AuthorID, Name, Country) 

CREATE TABLE Authors(
 AuthorID INT(11),
Name VARCHAR(100),
 Country VARCHAR(100)
);
3. `Members` (MemberID, FirstName, LastName, Email, JoinDate) 

CREATE TABLE Members(
 MemberID INT(11),
FirstName VARCHAR(100),
LastName VARCHAR(100),
 Email VARCHAR(100),
 JoinDate DATE
);
4. `BorrowedBooks` (BorrowID, BookID, MemberID, BorrowDate, ReturnDate)
CREATE TABLE BorrowedBooks(
 MemberID INT(11),
 BorrowID INT(11),
 BookID INT(11),
 BorrowDate DATE,
ReturnDate DATE
);


Please give me the output for the following SQL statements: 
Note: Fore some tasks fill the data to ensure that the tasks run as SQL query / phpMyAdmin

INSERT INTO Authors (AuthorID, Name)
VALUES
(101, 'John Doe'),
(102, 'Jane Smith'),
(103, 'Michael Johnson'),
(104, 'Emily Davis'),
(105, 'Sophia Brown');

INSERT INTO Books (BookID, Title, AuthorID, Genre, Price, PublicationDate)
VALUES
(1, 'The Great Adventure', 101, 'Adventure', 15.99, '2023-05-01'),
(2, 'Science for Everyone', 102, 'Science', 25.50, '2022-08-15'),
(3, 'Mystery of the Night', 103, 'Mystery', 18.75, '2021-11-23'),
(4, 'Cooking Made Easy', 104, 'Cooking', 12.99, '2020-04-10'),
(5, 'The History of Art', 105, 'History', 30.00, '2019-07-22');

INSERT INTO BorrowedBooks (BorrowID, BookID, MemberID, BorrowDate, ReturnDate)
VALUES
(1, 1, 1, '2023-01-20', '2023-02-15'),
(2, 2, 2, '2023-03-25', '2023-04-10'),
(3, 3, 3, '2022-12-05', '2022-12-20'),
(4, 4, 4, '2023-06-01', '2023-06-15'),
(5, 5, 5, '2023-07-10', NULL);


INSERT INTO Members (MemberID, FirstName, LastName, Email, JoinDate)
VALUES
(1, 'John', 'Doe', 'johndoe@example.com', '2023-01-15'),
(2, 'Jane', 'Smith', 'janesmith@example.com', '2023-03-22'),
(3, 'Michael', 'Johnson', 'mjohnson@example.com', '2022-11-10'),
(4, 'Emily', 'Davis', 'edavis@example.com', '2023-05-05'),
(5, 'Sophia', 'Brown', 'sbrown@example.com', '2022-09-18');




1. SQL INSERT INTO Statement 
- Task: Add a new book to the `Books` table, With values ('The Great Gatsby', 1, 'Fiction', 15.99, 
'1925-04-10') 
INSERT INTO Books (BookID, Title, AuthorID, Genre, Price, PublicationDate) VALUES( 1, 'The Great Gatsby', 101, 'Fiction', 15.99, '1925-04-10');

2. SQL SELECT Statement - Task: Retrieve all the books written by the author with AuthorID = 1. 
SELECT Books.BookID, Books.Title, Authors.Name AS AuthorName
FROM Books
INNER JOIN Authors ON Books.AuthorID = Authors.AuthorID
WHERE Books.AuthorID = 101;

3. SQL UPDATE Statement - Task: Update the price of the book with BookID = 2 to 20.99. 
UPDATE Books
SET Price = 20.99
WHERE BookID = 2;

4. SQL DELETE Statement - Task: Remove the book with BookID = 3 from the database. 
DELETE FROM books WHERE  BookID = 3 ;
SELECT * FROM books 

5. SQL WHERE Clause - Task: Find all books in the 'Science Fiction' genre. 
SELECT * FROM Books
WHERE Genre = 'Science';

6. SQL AND, OR and NOT Operators - Task: Retrieve books that are either in the 'Fiction' genre and priced below 20, or not written 
by the author with AuthorID = 2.

SELECT * FROM books WHERE genre = 'Fiction' AND price < 20 OR NOT AuthorID = 102;

7. SQL ORDER BY Keyword - Task: Get all books ordered by their publication date in descending order. 
SELECT * FROM books ORDER BY PublicationDate DESC;

8. SQL MIN() and MAX() Functions - Task: Find the minimum and maximum price of books in the library.

SELECT 
    MIN(Price) AS MinimumPrice, 
    MAX(Price) AS MaximumPrice
FROM Books;


9. SQL COUNT(), AVG() and SUM() Functions - Task: Get the total number of books, the average price, and the total price of all books in the 
library.

SELECT COUNT(*)
FROM books;
SELECT SUM(Price)
FROM books;
SELECT AVG(Price)
FROM books;


10. SQL LIKE Operator - Task: Find all books with a title that starts with 'The'.
SELECT * FROM books 
WHERE Title LIKE 'The%'; 
11. SQL GROUP BY Statement - Task: Get the count of books for each genre. 
SELECT Genre, COUNT(*) 
FROM Books
GROUP BY Genre;

12. SQL INNER JOIN Keyword - Task: Retrieve a list of books along with the names of their authors.

SELECT Books.BookID, Books.Title, Authors.Name 
 FROM Books INNER JOIN Authors ON Books.AuthorID = Authors.AuthorID;

-- ALTER TABLE `books` ADD CONSTRAINT `FK_authoriid` FOREIGN KEY (`AuthorID`) REFERENCES `authors`(`AuthorID`) ON DELETE CASCADE ON UPDATE CASCADE;