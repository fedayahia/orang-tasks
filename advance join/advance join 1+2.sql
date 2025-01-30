advance join
Task 1: Online Bookstore Sales Contest


CREATE database Online_Bookstore

CREATE TABLE Books (
    book_id INT PRIMARY KEY,   
    title VARCHAR(255)
);

CREATE TABLE Sales (
    sale_id INT PRIMARY KEY,
    book_id INT,
    quantity INT,
    sale_date DATE,
    FOREIGN KEY (book_id) REFERENCES Books(book_id)
);

INSERT INTO Books (book_id, title) VALUES(101,'book1'),(102,'book2'),(103,'book3'),(104,'book4'),(105,'book5');

INSERT INTO Sales (sale_id, book_id, quantity, sale_date) VALUES
(1, 101, 10, '2024-4-01'),
(2, 102, 5, '2024-4-02'),
(3, 103, 8, '2024-4-03'),
(4, 101, 7, '2024-4-04'),
(5, 104, 6, '2024-4-05'),
(6, 101, 1, '2024-4-10'),
(7, 102, 3, '2024-4-12'),
(8, 103, 7, '2024-4-03'),
(9, 101, 5, '2024-4-14'),
(10, 104, 6, '2024-4-15');




1.	List all sales by date, including `sale_date`, `sale_id`, `book_id`, and `quantity`.

SELECT sale_date , sale_id, book_id, quantity
FROM sales;

2.	Count the number of unique books sold each day.
SELECT 
    sale_date,
    COUNT(DISTINCT book_id) 
FROM Sales
GROUP BY sale_date;



3.	Find the `book_id` and `title` of the book with the maximum number of sales each day.

SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
HAVING COUNT(*) = (
    SELECT MAX(daily_sales)
    FROM (
        SELECT sale_date, book_id, COUNT(*) AS daily_sales
        FROM Sales
        GROUP BY sale_date, book_id
    ) AS daily_sales_count
    WHERE daily_sales_count.sale_date = S.sale_date
)
ORDER BY S.sale_date;



4.	If multiple books have the same number of maximum sales, select the one with the lowest `book_id`.

SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
HAVING COUNT(*) = (
    SELECT MAX(sales_count)
    FROM (
        SELECT 
            sale_date,
            book_id,
            COUNT(*) AS sales_count
        FROM Sales
        GROUP BY sale_date, book_id
    ) AS daily_sales
    WHERE daily_sales.sale_date = S.sale_date
)
ORDER BY S.sale_date, S.book_id ASC;

SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
HAVING COUNT(*) = (
    SELECT MAX(daily_sales)
    FROM (
        SELECT sale_date, COUNT(*) AS daily_sales
        FROM Sales
        GROUP BY sale_date
    ) AS daily_sales_count
    WHERE daily_sales_count.sale_date = S.sale_date
)
ORDER BY S.sale_date, S.book_id ASC;


5.	Create a summary of the total sales across all days, including the count of total sales and the number of unique books sold.
SELECT 
    COUNT(*) AS total_sales,
    COUNT(DISTINCT S.book_id) AS unique_books_sold
FROM Sales S;

6.	Calculate the daily sales rate as the ratio of books sold to the total number of books available.
SELECT 
    S.sale_date,
    COUNT(DISTINCT S.book_id) AS books_sold,
    B.total_books,
    (COUNT(DISTINCT S.book_id) / B.total_books) AS daily_sales_rate
FROM Sales S
JOIN (
    SELECT COUNT(*) AS total_books FROM Books
) B
GROUP BY S.sale_date
ORDER BY S.sale_date;

7.	Analyze the trend of sales over the contest period to identify peaks and dips.

SELECT 
    S.sale_date,
    COUNT(*) AS daily_sales
FROM Sales S
GROUP BY S.sale_date
ORDER BY S.sale_date;

8.	Identify books that made sales on all days of the contest.

SELECT 
    S.book_id,
    B.title
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.book_id, B.title
HAVING COUNT(DISTINCT S.sale_date) = (
    SELECT COUNT(DISTINCT sale_date)
    FROM Sales
) 
ORDER BY B.title;

9.	Determine the number of days each book was sold (made at least one sale).

SELECT 
    S.book_id,
    B.title,
    COUNT(DISTINCT S.sale_date) AS days_sold
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.book_id, B.title
ORDER BY days_sold DESC;

10.	Count the number of sales made for each book each day.
SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
ORDER BY S.sale_date, S.book_id;

11.	Identify the highest quantity sold for any book each day.
SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
HAVING COUNT(*) = (
    SELECT MAX(daily_sales)
    FROM (
        SELECT sale_date, book_id, COUNT(*) AS daily_sales
        FROM Sales
        GROUP BY sale_date, book_id
    ) AS daily_sales_count
    WHERE daily_sales_count.sale_date = S.sale_date
)
ORDER BY S.sale_date;

12.	List books that had multiple sales on any given day.
SELECT 
    S.sale_date,
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.sale_date, S.book_id, B.title
HAVING COUNT(*) > 1;

13.	Find books with sales quantities below a certain threshold (e.g., 5 copies).
SELECT 
    S.book_id,
    B.title,
    COUNT(*) AS sales_count
FROM Sales S
JOIN Books B ON S.book_id = B.book_id
GROUP BY S.book_id, B.title
HAVING COUNT(*) < 5
ORDER BY sales_count ASC;

14.	Provide a final summary of the contest, including total sales, unique books sold, and highest selling book.

SELECT 
    (SELECT COUNT(*) FROM Sales) AS total_sales,
    (SELECT COUNT(DISTINCT book_id) FROM Sales) AS unique_books_sold,
    (SELECT B.title 
     FROM Sales S
     JOIN Books B ON S.book_id = B.book_id
     GROUP BY S.book_id, B.title
     ORDER BY COUNT(*) DESC 
     LIMIT 1) AS highest_selling_book;


CREATE DATABASE SmartBuy;



Task 1: Retrieve a list of all customers along with their corresponding orders.
Concepts to use: INNER JOIN, SELECT

SELECT c.customer_name, o.order_id, o.order_date
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id;

--  Task 2: Get a list of all products and their associated order details, including products that haven't been ordered.
-- Concepts to use: LEFT JOIN, IS NULL

SELECT p.product_name, od.order_id, od.quantity
FROM products p
LEFT JOIN order_details od ON p.product_id = od.product_id
WHERE od.order_id IS NULL OR od.quantity > 0;

 Task 3: Find all employees and their associated department names. Include departments with no employees.
Concepts to use: RIGHT JOIN, SELECT

SELECT e.employee_name, d.department_name
FROM employees e
RIGHT JOIN departments d ON e.department_id = d.department_id;


 Task 4: Calculate the total sales amount for each product.
Concepts to use: SUM, GROUP BY, INNER JOIN


SELECT p.product_name, SUM(od.quantity * od.price) AS total_sales
FROM products p
INNER JOIN order_details od ON p.product_id = od.product_id
GROUP BY p.product_name;


Task 5: Retrieve a list of all orders with customer names, product names, and order quantities.
Concepts to use: Multiple JOINs, SELECT

SELECT c.customer_name, p.product_name, od.quantity
FROM orders o
INNER JOIN customers c ON o.customer_id = c.customer_id
INNER JOIN order_details od ON o.order_id = od.order_id
INNER JOIN products p ON od.product_id = p.product_id;


 Task 6: Find customers who have placed more than five orders.
Concepts to use: INNER JOIN, COUNT


SELECT c.customer_name, COUNT(o.order_id) AS order_count
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
GROUP BY c.customer_name
HAVING COUNT(o.order_id) > 5;


Task 7: Get a list of all employees and the projects they are working on, including employees not assigned to any project and projects with no assigned employees.
Concepts to use: FULL OUTER JOIN, COALESCE

SELECT e.employee_name, p.project_name
FROM employees e
LEFT JOIN employee_projects ep ON e.employee_id = ep.employee_id
LEFT JOIN projects p ON ep.project_id = p.project_id

UNION

SELECT e.employee_name, p.project_name
FROM projects p
LEFT JOIN employee_projects ep ON p.project_id = ep.project_id
LEFT JOIN employees e ON ep.employee_id = e.employee_id

ORDER BY employee_name, project_name;



 Task 8: Create a list of all active and inactive customers along with their orders, separating them using a status column.
Concepts to use: UNION, INNER JOIN, SELECT

SELECT c.customer_name, c.status, o.order_id, o.order_date
FROM customers c
INNER JOIN orders o ON c.customer_id = o.customer_id
UNION
SELECT c.customer_name, c.status, NULL AS order_id, NULL AS order_date
FROM customers c
WHERE NOT EXISTS (
    SELECT 1
    FROM orders o
    WHERE o.customer_id = c.customer_id
);

 Task 9: Retrieve a list of all orders with their status ('Shipped', 'Pending', 'Canceled') based on the order date and shipping date.
Concepts to use: CASE, INNER JOIN, SELECT

SELECT o.order_id, 
       CASE 
           WHEN o.shipping_date IS NOT NULL THEN 'Shipped'
           WHEN o.order_date <= CURDATE() THEN 'Pending'
           ELSE 'Canceled'
       END AS order_status
FROM orders o;
