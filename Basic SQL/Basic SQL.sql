Tasks 
1. Create the Database 
Create a database named CompanyDB. 
CREATE DATABASE CompanyDB;
2. Create Tables 
Create the following tables with the specified columns: 
• Employees 
o ID (Primary Key) 
o EmployeeName 
o Salary 
o PhoneNumber 
o DepartmentID (Foreign Key referencing Departments.ID) 
o City 
• Departments 
o ID (Primary Key) 
o DepartmentName 
-- Create the Departments table
CREATE TABLE Departments (
    ID INT PRIMARY KEY,
    DepartmentName VARCHAR(255) NOT NULL
);

-- Create the Employees table
CREATE TABLE Employees (
    ID INT PRIMARY KEY,
    EmployeeName VARCHAR(255) NOT NULL,
    Salary DECIMAL(10, 2),
    PhoneNumber VARCHAR(20),
    DepartmentID INT,
    City VARCHAR(255),
    FOREIGN KEY (DepartmentID) REFERENCES Departments(ID)
);

3. Insert Data 
Insert at least 5 records into each table. 

To insert the records into the Departments and Employees tables, you can use the following SQL queries:

Insert Data into the Departments Table:

Insert Data into the Employees Table:
INSERT INTO Employees (ID, EmployeeName, Salary, PhoneNumber, DepartmentID, City)
VALUES
(1, 'Alicea Johnson', 500, '1234567890', 1, 'New York'),
(2, 'Bob Smith', 330, '987654321', 2, 'Aqaba'),
(3, 'Charlie Brown', 4501, '1112223333', 3, 'Chicago'),
(4, 'Diana Princea', 7000, '2147483647', 4, 'Houston'),
(5, 'Ethan Hunt', 5500, '2147483647', 5, 'San Francisco'),
(6, 'Alice Johnson', 5000, '1234567890', 6, 'New York'),
(7, 'Bob Smitha', 500, '987654321', 7, 'Salt'),
(8, 'Charlie Brown', 400, '1112223333', 8, 'Amman'),
(9, 'Diana Prince', 7000, '2147483647', 9, 'Houston'),
(10, 'Ethan Hunt', 5500, '2147483647', 10, 'San Francisco');

INSERT INTO Departments (ID, DepartmentName)
VALUES
(1, 'HR'),
(2, 'Finance'),
(3, 'IT'),
(4, 'Marketing'),
(5, 'Sales'),
(6, 'Sales'),
(7, 'Marketing'),
(8, 'Finance'),
(9, 'IT'),
(10, 'HR');


4. SQL Queries 
Write SQL queries to perform the following tasks: 
1. Select all employee data: 
o Write a query to select all columns from the Employees table. 

SELECT * FROM Employees;

2. Order employees based on their salary (descending): 
o Write a query to select all employee data and order the results by salary in 
descending order. 

SELECT * FROM Employees
ORDER BY Salary DESC;

3. Get the employee with the highest salary: 
o Write a query to find the employee with the highest salary. 

SELECT * FROM Employees
WHERE Salary = (SELECT MAX(Salary) FROM Employees);

4. Get the employee with the lowest salary: 
o Write a query to find the employee with the lowest salary. 

SELECT * FROM Employees
WHERE Salary = (SELECT MIN(Salary) FROM Employees);

5. Get the total number of employees: 
o Write a query to count the total number of employees. 

SELECT COUNT(*) 
 FROM Employees;

6. Get the employee with a salary of 500: 
o Write a query to find employees who have a salary of 500. 

SELECT * FROM Employees
WHERE Salary = 500;


7. Get all employees with a salary greater than 500: 
o Write a query to find all employees who have a salary greater than 500.

SELECT * FROM Employees
WHERE Salary > 500;

8. Get all employees with a salary greater than 500 and their city is 'Salt': 
o Write a query to find all employees who have a salary greater than 500 and are 
located in the city 'Salt'. 

SELECT * FROM Employees
WHERE Salary > 500
AND City = 'Salt';


9. Sum of all employee salaries: 
o Write a query to calculate the sum of all employee salaries. 

SELECT SUM(Salary) AS TotalSalary FROM Employees;

10. Get all employees whose names start with 'A': 
o Write a query to find all employees whose names start with the letter 'A'. 

SELECT * FROM Employees
WHERE EmployeeName LIKE 'A%';

11. Get all employees whose names end with 'A': 
o Write a query to find all employees whose names end with the letter 'A'. 

SELECT * FROM Employees
WHERE EmployeeName LIKE '%A';

12. Get all employees whose city is either 'Salt', 'Amman', or 'Aqaba': 
o Write a query to find all employees who are located in the cities 'Salt', 'Amman', 
or 'Aqaba'. 

SELECT * FROM Employees
WHERE City = 'Salt' OR City = 'Amman' OR City = 'Aqaba';


13. Get all employees with a salary between 300 and 500: 
o Write a query to find all employees who have a salary between 300 and 500.

SELECT * FROM Employees
WHERE Salary BETWEEN 300 AND 500;

-- 14. Update any employee's salary: 
-- o Write a query to update the salary of an employee (choose any employee for this 
-- task).

UPDATE Employees
SET Salary = 500
WHERE Salary = 6001;

15. Get all unique cities (without duplicate): 
o Write a query to find all unique cities where employees are located. 

SELECT DISTINCT City FROM Employees;

16. Get all unique cities with number of each one: 
o Write a query to get all cities and count the number of each city where employees 
are located. 

SELECT City, COUNT(*) AS NumberOfEmployees
FROM Employees
GROUP BY City;



17. Make a relation between employee and department 

ALTER TABLE Employees
ADD CONSTRAINT fk_department
FOREIGN KEY (DepartmentID) 
REFERENCES Departments(ID);
ON UPDATE CASCADE
ON DELETE CASCADE;

