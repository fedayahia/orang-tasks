<!-- q1 -->
<?php
$year = 2024;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year this year is a leap year";
} else {
    echo "$year this year is not a leap year";
 
}
echo '<br>';
?>

<!-- 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’ -->

<?php
$weather = 20;
if ($weather >= 20) {
    echo "It is summertime!";
} else {
    echo "It is winter!";
}
echo '<br>';
?>

<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12 -->


<?php
$num1 = 2;
$num2 = 2;
if ($num1 == $num2) {
    echo ($num1+$num2)*3;
} else {
    echo $num1+$num2;
}
echo '<br>';
?>
<!-- 
4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’ -->

<?php
$firstInteger = 15;
$secondInteger   = 15;
$sum = $secondInteger + $firstInteger ;
if ($sum == 30) {
    echo "true";
} else {
    echo "false";
}
echo '<br>';
?>

<!-- 5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’ -->

<?php
$num1 = 15;
if ($num1% 3== 0 && $num1 >= 0) {
    echo "true";
} else {
    echo "false";
}
echo '<br>';
?>
<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’ -->


<?php
$num = 45;
if($num >=20 && $num<=50){
    echo "true";}
    else{
        echo "false";
    }
echo '<br>';
?>


<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->

<?php
$first = 1;
$second = 5;
$third = 9;
$largest = max($first, $second, $third); 
echo $largest;
echo '<br>';
?>

<!-- 
8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit -->
<!-- <?php
$Electricity_meter = 270; 
$bill = 0;

if ($Electricity_meter <= 50) {
    $bill = $Electricity_meter * 2.50;
} 
elseif ($Electricity_meter <= 150) {
    $bill = (50 * 2.50) + (($Electricity_meter - 50) * 5.00);
} 
elseif ($Electricity_meter <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($Electricity_meter - 150) * 6.20);
} 
else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($Electricity_meter - 250) * 7.50);
}

echo  $bill;
?> -->


<?php
$Electricity_meter = 2;

if ($Electricity_meter <= 50) {
    echo ($Electricity_meter * 2.50) . " JOD";
} 

elseif ($Electricity_meter <= 150) {
    echo ($Electricity_meter * 5.00) . " JOD";
} 
elseif ($Electricity_meter <= 250) {
    echo ($Electricity_meter * 6.20) . " JOD";
} 
elseif ($Electricity_meter >= 250) {
    echo ($Electricity_meter * 7.50) . " JOD";
} 
echo '<br>';
?>

<!-- 
9.	 Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division -->

<?php
$num1 = 2;
$num2 = 2;
echo $num1 + $num2 ;
echo '<br>';
echo $num1 - $num2 ;
echo '<br>';
echo $num1 * $num2 ;
echo '<br>';
echo $num1 / $num2 ;
echo '<br>';
?>



<!-- 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->

<?php
$age = 22; 

if($age < 18){
    echo "is not eligible to vote";
} else {
    echo "is eligible to vote";
}
echo '<br>';
?>


<!-- 11.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’ -->

<?php
$weathe = -22; 

if($weathe <= 0){
    echo "Negative";
} else {
    echo " positive";
}
echo '<br>';
?>

<!-- 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’ -->

<?php
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$average = array_sum($scores) / count($scores);
 
if ($average >= 100) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
echo "Grade: " . $grade;
?>

