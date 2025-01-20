<!-- Array 
1.	Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from the $colors array. -->


<?php
$colors = array('red', 'green', 'white');
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $paragraph;
?>


<!-- 2.	$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
●	green
●	red
●	white -->
<?php
$colors = array('white', 'green', 'red'); 
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>"; 
}

echo "</ul>";
?>

<!-- 3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin  -->

<?php

$cities = array(
  "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital";
    echo '<br>';
}
?>

<!-- 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white -->

<?php

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
reset($color); 
$first_element = current($color); 

echo $first_element;
echo '<br>'; 
?>

<!-- // 5.	Write a PHP script that inserts a specific new item in an array in any position.
 
// Sample Input:

// Array 1 2 3 4 5   
// Location: 4
// New Item: $

// Expected Output: 1 2 3 $ 4 5 -->
<?php
$array = [1, 2, 3, 4, 5];

array_splice($array, 3, 0, array("#"));

$result = implode(" ", $array);

echo $result; 
echo '<br>';
?>
<!-- 
6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->

<?php

$fruits = array(
  "d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $x => $y) {
    echo " $x=$y";
    echo '<br>';
}
?>

<!-- 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85, -->
<?php
$a = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$averageTemperature = array_sum($a) / count($a);
sort($a);
$lowestTemperatures = array_slice($a, 0, 5);
$highestTemperatures = array_slice($a, -5);
echo "Average Temperature is: " . number_format($averageTemperature, 1) . "<br>"; 
echo "List of five lowest temperatures: " . implode(", ", $lowestTemperatures) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highestTemperatures) . "<br>";
?>

<!-- 8.	Write a PHP program to merge the following two arrays.  -->
 
<!-- $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4 -->
<?php
 $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedArray = array_merge($array1, $array2);
echo "<pre>";
print_r($mergedArray);
echo "</pre>";
?> 
<!-- 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow");

Expected Output :

Array
(
    RED
    BLUE
    WHITE
    YELLOW

) -->
<?php
$colors = array("red", "blue", "white", "yellow");


foreach ($colors as &$color) {
    $color = strtoupper($color);
}

echo "Array\n(\n";
echo '<br>';
foreach ($colors as $color) {
    echo "    $color\n";
    echo '<br>';

}
echo ")";
?>

<!-- 
10.	Write a PHP function to change the following array's and convert all the strings to lower case.  -->

<?php
$colors = array("red", "blue", "white", "yellow");
foreach ($colors as &$color) {
    $color = strtolower($color);
}
echo "<pre>";
print_r($colors);
echo "</pre>";
?>
<!-- 11.Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248 -->
<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ",";
    }
}
echo '<br>';
?>
<!-- 12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4. -->
 
<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$lengths = array_map('strlen', $words);
$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is " . $shortest . ". ";
echo "The longest array length is " . $longest . ".";
echo '<br>';
?>
<!-- 
13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12 -->
<?php
$numbers = range(11, 20);
$randomNumbers = array_slice($numbers, 0, 10);
echo implode(", ", $randomNumbers);
echo '<br>';
?>


<!-- 
14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2 -->

<?php
$array1 = array(2, 0, 10, 12, 6);
$filteredArray = array_filter($array1, function($value) {
    return $value !== 0;
});
$lowest = min($filteredArray);
echo $lowest;
echo '<br>';
?>

<!-- 15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 ) -->

<?php
$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
//Bubble Sort
$length = count($array);
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
print_r($array);
echo '<br>';
?>

<!-- 16.	Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator
Sample Data : 
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
Expected Output :
1.15
100.2578
-2.964 -->


<?php
function floorWithPrecision($number, $precision, $separator) {
    $factor = pow(10, $precision); 
    $flooredNumber = floor($number * $factor) / $factor; 
    return number_format($flooredNumber, $precision, $separator, ""); 
}

// اختبار الدالة
echo floorWithPrecision(1.155, 2, ".") . "<br>"; 
echo floorWithPrecision(100.25781, 4, ".") . "<br>"; 
echo floorWithPrecision(-2.9636, 3, ".") . "<br>"; 
?>
<!-- 17.  Write a PHP script to merge two commas separated lists with unique values only.
Sample input: list1 = "4, 5, 6, 7";
  		list2 = "4, 5, 7, 8";
Sample output: 4, 5, 6, 7, 8 -->

<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);
$mergedArray = array_unique(array_merge($array1, $array2));
$result = implode(", ", $mergedArray);
echo $result;
echo '<br>';
?>



<!-- 
18. Write a PHP function to remove the duplicate entry from an array.
sample input = 4, 5, 6, 7, 4, 7, 8
sample Output = 4, 5, 6, 7, 8 -->
<?php
function removeDuplicates($input) {
    $array = explode(", ", $input);
    $uniqueArray = array_unique($array);
    return implode(", ", $uniqueArray);
}
$input = "4, 5, 6, 7, 4, 7, 8";
$output = removeDuplicates($input);
echo $output;
?>


<!-- 19. Write a PHP Program to find if an array is a subset of another.
sample input:
array1 = 'a','1','2','3','4'
array2 = 'a','3'
	sample output:
array2 is a subset array from array1 -->

<?php
function isSubset($array1, $array2) {
    foreach ($array2 as $element) {
        if (!in_array($element, $array1)) {
            return "array2 is NOT a subset of array1";
        }
    }
    return "array2 is a subset of array1";
}

$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];
echo isSubset($array1, $array2);
?>
