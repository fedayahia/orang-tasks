<!-- PHP Basic Tasks                                                
1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number  -->

<?php
function checkPrime($num) {
    if ($num <= 1) {
        return 0;  
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return 0;  
        }
    }
    return 1; 
}
$num = 2;
$flag = checkPrime($num);
if ($flag == 1) {
    echo "Prime";
} else {
    echo "Not Prime";
}
echo "<br>";
?>

<!-- 2.	Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer -->
<?php
function reverse($string) {
    $array = str_split($string);  
    shuffle($array); 
    echo implode("", $array);  
}
reverse("feda"); 
echo "<br>";
?>

<!-- 3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->

<?php
function checkLowerCase($string) {
    if (ctype_lower($string)) {
        echo "Your String is Ok";
    } else {
        echo "Your String is not in lowercase";
    }
}

$input = "remove";
checkLowerCase($input);
echo "<br>";
?>


<!-- 4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->

<?php
function swap($x, $y) {
    echo "x=$x y=$y\n";
    echo "<br>";
   $temp = $x;
    $x = $y;
    $y = $temp;
    echo " x=$x y=$y";
}
$x = 12;
$y = 10;
swap($x, $y);
echo "<br>";
?> 

 <!-- 
// 5.	Write a PHP function to swap to variables?
// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10  -->

<?php
function swa($x, $y) {
    echo "x=$x y=$y\n";
    echo "<br>";
   $temp = $x;
    $x = $y;
    $y = $temp;
    echo " x=$x y=$y";
}
$x = 42;
$y = 30;
swa($x, $y);
echo "<br>";
?> 


<!-- 
6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number  -->

<?php  
function isArmstrong($num) {
    $total = 0;
    $numDigits = strlen((string)$num);  
    $x = $num;
    
    for ($i = 0; $x != 0; $x = (int)($x / 10), $i++) {
        $rem = $x % 10;  
        $total += pow($rem, 3);  
    }

    if ($num == $total) {
        echo "Yes it is an Armstrong number";
    } else {
        echo "No it is not an Armstrong number";
    }
}

$num = 207;
isArmstrong($num);
echo "<br>";
?>
<!-- 7.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome  -->

<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
    $reversedStr = strrev($str);
    if ($str == $reversedStr) {
        echo "Yes it is a palindrome";
    } else {
        echo "No it is not a palindrome";
    }
}
$str = "Eva, can I see bees in a cave?";
isPalindrome($str);
echo "<br>";
?>

<!-- 8.	Write a PHP function to remove duplicates from an array ?
Sample Input:  
$array1 = array(2, 4, 7, 4, 8, 4); -->

<?php
function removeDuplicates($array) {  
    $uniqueArray = array_unique($array);
    return implode(" ", $uniqueArray);
}
$array1 = array(2, 4,7,5,43, 4, 8, 4);
$result = removeDuplicates($array1);
echo $result;
?>
