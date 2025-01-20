 
<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.  
Expected Output: 1-2-3-4-5-6-7-8-9-10  -->

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
echo '<br>';
?>
<!-- 
Create a script using a for loop to add all the integers between 0 and 30 and display the total.  
 
 Expected Output:  total as a number  -->
 
 <?php  
 $sum = 0;
for ($x = 0; $x <= 30; $x++) {
  $sum += $x;
}
echo $sum;
echo '<br>';
?> 


<!-- 3. Create a script to generate the following pattern, using the nested for loop.   -->
<?php
for ($i = 0; $i < 5; $i++) {  
    $char = chr(65 + $i); 
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "A ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo "$char ";
    }
    echo "<br>"; 
}
?>
<!-- 4. Create a script to generate the following pattern, using the nested for loop.   -->


<?php
for ($i = 0; $i < 5; $i++) {  
  $num = $i + 1; 
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "1";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $num;
    }
    echo "<br>"; 
}
?>
<?php
for ($i = 0; $i < 5; $i++) {  
    for ($j = 0; $j < 5; $j++) {  
        if ($j < 4 - $i) {
            echo "1"; 
        } else {
            echo ($i + 1);  
        }
    }
    echo "<br>";  
}
?>


 
<!-- 5. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
1 0 0 0 0  
0 2 0 0 0  
0 0 3 0 0  
0 0 0 4 0  
0 0 0 0 5  -->
<?php
for ($i = 0; $i < 5; $i++) {  
    for ($j = 0; $j < 5; $j++) {  
        if ($i == $j) {
            echo ($i + 1) . " "; 
        } else {
            echo "0 "; 
        }
    }
    echo "<br>"; 
}
?>
<!-- 6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
a number is the product of all integers up to and including that number. 
 
Sample Input: 5 
Expected Output: 120  -->
<?php
$number = 5;
$factorial = 1; 
for ($i = 1; $i <= $number; $i++) {  
    $factorial *= $i; 
}
echo  $factorial ; 
echo "<br>"; 
?>

<!-- 

7. Write a program to calculate and print the Fibonacci sequence using a for loop. 
Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting 
with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.  
 
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … -->
<!-- <?php
$usernumb1 = 10; 
$fib = [0, 1];

for ($i = 2; $i < $usernumb1; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
}

echo implode(", ", $fib); 
?> -->
<?php
$usernumb1 = 10; 
$fib = [0, 1]; 

for ($i = 2; $i < $usernumb1; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
}

echo implode(", ", $fib); 
echo "<br>"; 
?>
 
 <!-- 8. Write a program which will count the "c" characters in the text "Orange Coding Academy".  
 
 Sample Input: Orange Coding Academy 
 Expected Output: 2  -->
<?php
$text = "Orange Coding Academy"; 
$char_to_count = "c"; 
$count = substr_count(strtolower($text), $char_to_count);
echo  $count;
?>

<!--   
9. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and 
cell spacing="0px" to the table tag.   -->
<?php
echo "<table border='1' cellpadding='3px' cellspacing='0px'>";

for ($i = 1; $i <= 6; $i++) {  
    echo "<tr>"; 
    for ($j = 1; $j <= 5; $j++) {  
        echo "<td>$i * $j = " . ($i * $j) . "</td>"; 
    }
    echo "</tr>"; 
}
echo "</table>"; 
?>
<!-- 10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" 
instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of 
both three and five, print "FizzBuzz". 
 
Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz ……. -->
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "<br>";
?>

 
<!-- 11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
 
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer 
science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive 
numbers, starting with a 1 in the top left corner: 
 
Sample output: 
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15  -->
<?php
$n = 5; 
$counter = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $counter . " "; 
        $counter++; 
    }
    echo "<br>"; 
}
?>



<!-- 12. Write a PHP program to print the following pattern.  
    
Expected Output: 
 
     A  
    A B  
   A B C  
  A B C D  
 A B C D E  
  A B C D  
   A B C  
    A B  
     A  -->
     <?php
$size = 7;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(" ", $size - $i); 
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";  
    }
    echo "<br>";  
  }
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat(" ", $size - $i);  
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";  
    }
    echo "<br>";  
}
?>

