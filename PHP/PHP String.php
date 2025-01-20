<!-- 1.	Write a PHP script to:  -->
<!-- a.	Convert the entered string to uppercase. -->
<?php
$input = "hello, world!";
$uppercase = strtoupper($input);
echo $uppercase;
echo '<br>'; 
?>

<!-- b.	Convert the entered string to lowercase. -->
<?php
$input = "hello, world!";
$lowercase = strtolower($input);
echo $lowercase; 
echo '<br>';
?>
<!-- c.	Make the first letter of the string uppercase. -->
<?php
$input = "hello, world!";
$first = ucfirst($input);
echo $first; 
echo '<br>';
?>
<!-- d.	Make the first letter of each word capitalized. -->
<?php
$input = "hello, world!";
$uppercase = ucwords($input);
echo $uppercase; 
echo '<br>';
?>

<!-- 2.	Write a PHP script splitting the following numeric string to be a date format. 

Sample Output: '085119'
Expected Output: 08:51:19 -->

<?php
$numericString = "085119";

$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

$formattedTime = "$hours:$minutes:$seconds";

echo $formattedTime;
echo '<br>';
?>

<!-- 
3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’ -->

<?php
$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";
echo stripos($sentence, $word) !== false ? "Word Found!" : "Word Not Found!";
echo '<br>';
?>

<?php
$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";

echo stripos($sentence, $word) ? "Word Found!" : "Word Not Found!";
?>


<!-- 4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php' -->

<?php
$url = "www.orange.com/index.php";
$filename = basename($url);
echo $filename; 
?>



<?php
$x = "www.orange.com/index.php";
echo substr($x,15,24);
echo '<br>';
?> 


 
<!-- 5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info' -->
<?php
$email = "info@orange.com";
$username = strstr($email, '@', true);
echo $username; 
?>


?>
<?php
$x = "info@orange.com";
echo substr($x,0,4);
echo '<br>';
?> 

<!-- 6.	Write a PHP script to get the last three characters from the string. 

Sample Output: 'info@orange.com'
Expected Output: 'com'
  -->
  <?php
$string = "info@orange.com";
$lastThree = substr($string, -3);
echo $lastThree; 
?>
<!-- 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' -->
<?php
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$shuffled = str_shuffle($characters);
$password = substr($shuffled, 0, 10);
echo $password;
echo '<br>';
?>
<!-- 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius. -->

<?php
$sentence = "That new trainee is so genius.";
$newWord = "The"; 
$words = explode(" ", $sentence);
$words[0] = $newWord;
$updatedSentence = implode(" ", $words);
echo $updatedSentence;
echo '<br>';
?>


<!-- 9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: "a" vs "o" -->

<?php
$string1 = "dragonball";
$string2 = "dragonboll";
$position = strspn($string1 ^ $string2, "\0");
echo "First difference between two strings at position $position: \"{$string1[$position]}\" vs \"{$string2[$position]}\"";
echo '<br>';
?>

<!-- 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”} -->

<?php
$d = array("Twinkle", " twinkle", "little star");
echo var_dump($d) . "<br>";
?>

<!-- 11.Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a' -->

<?php
$letters = 'a'; 
$letters++; 
echo $letters; 
echo '<br>';
?>

<!-- 12.Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The' -->

<?php
$originalString = 'The brown fox';
$insertString = 'quick';
$position = strpos($originalString, 'brown');
$modifiedString = substr_replace($originalString, $insertString . ' ', $position, 0);
echo $modifiedString;
echo '<br>';
?>

<?php
$originalString = 'The brown fox';
$insertString = 'quick';
$modifiedString = str_replace('brown', $insertString . ' brown', $originalString);
echo $modifiedString;
echo '<br>';
?>


 
<!-- 13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24' -->

<?php
$originalString = '0000657022.24';
$modifiedString = ltrim($originalString, '0');
echo $modifiedString; 
echo '<br>';
?>

<?php
$num= '0000657022.24';
$trimmed = str_replace("0", "", $num);
echo $trimmed;

 
<!-- 14.	Write a PHP script to remove part of a string. 
Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog' -->

<?php
$originalString = "The quick brown fox jumps over the lazy dog";
$modifiedString = str_replace('fox', '', $originalString);
echo $modifiedString; 
echo '<br>';
?>
 
 <!-- 15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog' -->

<?php
$originalString = "The quick brown fox jumps over the lazy dog---";
$modifiedString = (substr($originalString, -1) === '-') ? substr($originalString, 0, -1) : $originalString;
echo $modifiedString; 
echo '<br>';
?>


<!--  
16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3' -->


<?php
$originalString = '"\1+2/3*2:2-3/4*3';

$modifiedString = preg_replace('/[^0-9\s]/', ' ', $originalString);

$modifiedString = preg_replace('/\s+/', ' ', trim($modifiedString));

echo $modifiedString; 
echo '<br>';
?>


<!-- 17.Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps' -->

<?php
$originalString = "The quick brown fox jumps over the lazy dog";

$wordsArray = explode(" ", $originalString);
$firstFiveWords = array_slice($wordsArray, 0, 5);
echo $modifiedString; 
echo '<br>';
?>

<!-- 18.	Write a PHP script to remove comma(s) from the following numeric string.
 
Sample Output: '2,543.12'
Expected Output: 2543.12 -->

<?php
$originalString = '2,543.12';
$modifiedString = str_replace(',', '', $originalString);
echo $modifiedString; 
echo '<br>';
?>

<!-- 19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z  -->

<?php
$letters = range('a', 'z');
$letterString = implode(' ', $letters);
echo $letterString;

?>
