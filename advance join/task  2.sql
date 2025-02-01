You have to create a school management system using SQL in phpMyAdmin. The system 
will manage students, teachers, courses, and enrollments. 

CREATE DATABASE school_management_system;

Needed tables: 
1. Students: - `student_id` (INT, Primary Key) - `first_name` (VARCHAR) - `last_name` (VARCHAR) - `date_of_birth` (DATE) - `gender` (CHAR) - `enrollment_date` (DATE)

 CREATE TABLE Students (
    student_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    date_of_birth DATE,
    gender CHAR(1), 
    enrollment_date DATE 
);

2. Teachers: - `teacher_id` (INT, Primary Key) - `first_name` (VARCHAR) - `last_name` (VARCHAR) - `hire_date` (DATE) - `subject` (VARCHAR) 
CREATE TABLE Teachers (
    teacher_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    hire_date DATE,
    subject VARCHAR(100) 
);


3. Courses: - `course_id` (INT, Primary Key) - `course_name` (VARCHAR) - `teacher_id` (INT, Foreign Key referencing Teachers) 
CREATE TABLE Courses (
    course_id INT PRIMARY KEY,
   course_name VARCHAR(50),
  teacher_id INT,
 FOREIGN KEY (teacher_id) REFERENCES Teachers(teacher_id)
);


4. Enrollments: 
- `enrollment_id` (INT, Primary Key) - `student_id` (INT, Foreign Key referencing Students) - `course_id` (INT, Foreign Key referencing Courses) - `enrollment_date` (DATE)
 CREATE TABLE Enrollments (
   enrollment_id INT PRIMARY KEY,
enrollment_date DATE,
  student_id INT,
 FOREIGN KEY (student_id) REFERENCES students(student_id),
     course_id INT,
     FOREIGN KEY (course_id) REFERENCES        courses(course_id)
);

INSERT INTO Students (student_id, first_name, last_name, date_of_birth, gender, enrollment_date) VALUES
(1, 'Ali', 'Ahmad', '2002-05-14', 'M', '2023-09-01'),
(2, 'Sara', 'Khalid', '2003-07-20', 'F', '2023-09-01'),
(3, 'Mona', 'Hussein', '2002-11-30', 'F', '2023-09-01'),
(4, 'Omar', 'Yousef', '2001-01-25', 'M', '2022-09-01'),
(5, 'Laila', 'Abbas', '2004-03-12', 'F', '2023-09-01');

INSERT INTO Teachers (teacher_id, first_name, last_name, hire_date, subject) VALUES
(1, 'Ahmed', 'Hassan', '2015-08-15', 'Mathematics'),
(2, 'Fatima', 'Ali', '2018-06-22', 'Physics'),
(3, 'Khaled', 'Mohamed', '2020-02-10', 'Chemistry'),
(4, 'Rania', 'Salem', '2017-09-01', 'Biology'),
(5, 'Sami', 'Othman', '2016-03-18', 'English');




INSERT INTO Courses (course_id, course_name, teacher_id) VALUES
(1, 'Algebra', 1),
(2, 'Mechanics', 2),
(3, 'Organic Chemistry', 3),
(4, 'Genetics', 4),
(5, 'English Literature', 5);


INSERT INTO Enrollments (enrollment_id, student_id, course_id, enrollment_date) VALUES
(1, 1, 1, '2023-09-02'),
(2, 2, 2, '2023-09-03'),
(3, 3, 3, '2023-09-04'),
(4, 4, 4, '2023-09-05'),
(5, 5, 5, '2023-09-06'),
(6, 1, 3, '2023-09-07'),
(7, 2, 5, '2023-09-08');

Fill the data to meet the requirements of the tasks so you can test your solutions. 
Tasks: 
1. Insert new records into the `Students` table.
INSERT INTO Students (student_id, first_name, last_name, date_of_birth, gender, enrollment_date) VALUES
(6, 'Hassan', 'Ibrahim', '2001-09-10', 'M', '2023-09-15');
2. Select all students who enrolled after January 1, 2020.
SELECT * FROM Students WHERE enrollment_date > '2020-01-01';

3. Update the last name of a student with `student_id` 1. 
UPDATE students SET last_name = 'yahi' WHERE student_id = 1;
4. Delete a student record with `student_id` 1. 
DELETE FROM students WHERE  student_id = 1;
SELECT * FROM students

5. Select students who are female. 

SELECT * FROM students WHERE gender = 'f';

6. Select students who are either male or enrolled after 2020.
 SELECT * FROM students WHERE gender = 'm' or enrollment_date > '2020-01-01';
7. Select all students ordered by last name. 
 SELECT * FROM  
 order by last_name;
8. Find the earliest and latest enrollment dates. 
SELECT 
    MIN(enrollment_date) AS earliest_enrollment,
    MAX(enrollment_date) AS latest_enrollment
FROM Students;

9. Count the number of students enrolled. 
SELECT COUNT(*) AS total_students
FROM Students;

10. Find students with the first name starting with 'J'. 
SELECT * FROM students
WHERE first_name LIKE 'j%';
11. Group students by gender and count them.

SELECT gender, COUNT(*) 
FROM Students GROUP BY gender;

12. Select students along with the courses they are enrolled in.
SELECT 
    Students.student_id,
    Students.first_name,
    Students.last_name,
    Courses.course_name
FROM Students
JOIN Enrollments ON Students.student_id = Enrollments.student_id
JOIN Courses ON Enrollments.course_id = Courses.course_id;
