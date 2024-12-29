/*
1
Write a function named tellFortune that:
takes 4 arguments: number of children,
partner's name, geographic location, job title.
outputs your fortune to the screen like so:
"You will be a X in Y, and married to Z with N kids."

// Ex: tellFortune('software engineer', 'Jordan', 'Alice', 3);
// => "You will be a software engineer in Jordan, and married to Alice with 3 kids."
// */

// function tellFortune ( number_of_children, partner_name,geographic_location,job_title){
//     console.log (`"You will be a ${job_title} in ${geographic_location}, and married to ${partner_name} with ${ number_of_children} kids."`)
// }

// tellFortune(3, 'Alice', 'Jordan','software engineer');

/*
2
Write a function named calculateDogAge that:
takes 1 argument: your puppy's age.
calculates your dog's age based on the conversion
rate of 1 human year to 7 dog years.
outputs the result to the screen like so:
"Your doggie is NN years old in dog years!"

Ex: calculateDogAge(1);
=> "Your doggie is 7 years old in dog years!"
*/
// function calculateDogAge (your_puppy_age){
//     let res= your_puppy_age * 7;
//     console.log (`"Your doggie is ${res} years old in dog years!"`)
  
// } 
// calculateDogAge(3);

/*
3
Write a function named calculateSupply that:
takes 2 arguments: age, amount per day.
calculates the amount consumed for rest of the life (based on a constant max age 100).
outputs the result to the screen like so:
"You will need NN to last you until the ripe old age of X"

Ex: calculateSupply(30, 3);
=> 'You will need 76650 cups of tea to last you until the ripe old age of 100;
*/

// function  calculateSupply  ( age, amount_per_day) {
// let resl = 100-age ;
// let reslu = amount_per_day *365 
// let reslut = reslu *resl 
// console.log(`'You will need ${reslut} to last you until the ripe old age of 100;`)
// }

// calculateSupply  ( 30, 3)


/*
4
Write a function called greet that:
takes 1 argument: name.
and it will return hello + name

Ex: greet("Adam")
=> "Hello Adam"
*/
// function  greet (name){
//     return"Hello"+ name;
// }
// greet (" adam");


/*
5
what is the error:
function double(cat) {
  return 2 * x;
}


// function double(cat) {
//     return 2 * cat;
  

//   }
//   console.log (double(7))
  

function double(7) {
  return 2 * 7;
}

// function double() {
//     return 2 * 7;
//   }
//   console.log(double())


function double('7') {
  return 2 * 'x';
}
*/
// let x = 10;
// function double() {
//     return 2 * x;
//   }
//   console.log (double())


 
/*
6
fix these functions:
func double1(x {
  return 2 * x ;
}

*/
// function double1(x){
//     return 2 * x;
// }
// console.log (double1(20));



// functiondouble2 x)
// return 2 * x;
// }

// function double2 (x){
//     return 2* x;

// }
// console.log(double2(2));


// function (x) double3 {
//     return 2 * x;
  

// function double3 (x) {
//     return 2 * x;
// }
// console.log(double3(3));


/*
7
Write a function called cube that:
accept 1 parameter and calculate the cube of this number

Ex: cube(4)
=> 64
*/
// function cube (number){
//     return number* number * number;
// }
// console.log(cube(3))

/*
8
Write a function called multiply that:
accept 2 parameters and calculate the multiply of these 2 numbers

Ex: multiply(3,4)
=> 12
Ex: multiply(5,4)
=> 20
*/
// function multiply(number1, number2){
//     return number1*number2;
// }
// console.log(multiply(2,4))


/*
9
Write a function called canIGetADrivingLicense that:
accept 1 parameter represent the age
and if the age greater than or equal to 20 return "yes you can"
otherwise return "please come back after X years to get one"

Ex: canIGetADrivingLicense(21)
=> "yes you can"

Ex: canIGetADrivingLicense(17)
=> "please come back after 3 years to get one"

Ex: canIGetADrivingLicense(20)
=> "yes you can"

*/
// function canIGetADrivingLicense(age){
//     if(age >= 20) {
//       return"yes you can";
//     }
//     else{
//         return"please come back after X years to get one";
//     }
// }
// canIGetADrivingLicense (30);

/*

10
Write a function called sameLength
that accepts two strings as arguments,
and returns true if those strings have the same length, and false otherwise.

**hint: how we can know string length   Ex: : "tree".length   => 4

Ex: sameLength("tree","clue")
=> true

Ex: sameLength("tree","car")
=> false
*/
// function sameLength (string1,string2){
//     let length1 = string1.length
//     let length2 = string2.length
//     if (length1 == length2 ) {
//        return true;
//     }
//     else {
//        return false;
//     }
 
// }
// console.log(sameLength("feda","yahia"))

/*
11
Write a function called largerNubmer
that accept two numbers as arguments,
and return the first larger numbers

Ex: largerNubmer(5,6)
=> 6

Ex: largerNubmer(5,3)
=> 5
*/

// function largerNubmer (number1, number2){

//     if (number1>number2){
//        return number1;
//     }
//     else {
//         return number2;
//     }
// }
// console.log(largerNubmer(15,22));


/*
12
Write a function called smallerNubmer
that accept three numbers as arguments,
and return the first smaller number

Ex: smallerNubmer(8,6,7)
=> 6

Ex: smallerNubmer(5,99,34)
=> 5

Ex: smallerNubmer(5,99,3)
=> 3

Ex: smallerNubmer(5,3,3)
=> 3

*/
// function smallerNubmer (number1, number2,number3){

//     if (number1<number2 && number1<number3){
//        return number1;
//     }
//     else if (number2<number1 && number2<number3) {
//         return number2;
//     }
//     else{
//         return number3;
//     }


// }
// console.log(smallerNubmer(15,5,10));


/*
13
Write a function called shorterString
that accept five string as an arguments,
and return the first shorter string

Ex: shorterString("air","school","car","by","github")
=> by

Ex: shorterString("air","tr","car","by","github")
=> tr

Ex: shorterString("by","tr","car","air","github")
=> by

Ex: shorterString("air","by","car","school","github")
=> by

Ex: shorterString("air","tr","by","car","github")
=> by

Ex: shorterString("air","tr","car","github","by")
=> by

*/

// function shorterString (string1,string2,string3,string4,string5) {

//     let strings = [string1, string2, string3, string4, string5];
//     let shortest = strings[0];

//     for (let i = 1; i < strings.length; i++) {
//         if (strings[i].length < shortest.length) {
//             shortest = strings[i];
//         }
//     }
    
//     return shortest;
// }
// console.log(shorterString("air","true","car","github","by"))

/*
14
Write a function called longerString
that accept four string as an arguments,
and return the first longer string

Ex: longerString("air","school","car","github")
=> school

Ex: longerString("air","schoo","car","github")
=> github

try all the cases (change the order of the longestString)
*/
// function longerString (string1,string2,string3,string4){

// let strings = [string1, string2, string3, string4];
// let longer = strings[0];

// for (let i = 1; i < strings.length; i++) {
//     if (strings[i].length > longer.length) {
//         longer = strings[i];
//     }
// }
    
//     return longer;
// }
// console.log(longerString("air","true","car","github"))

/*
15
Write a function called isEven
that accept 1 argument as a number,
and return true if this number is even
and false if this number is odd

Ex: isEven(1)
=> false
Ex: isEven(2)
=> true

*/
// function isEven (number){
//     if (number % 2 == 0 ){
//         return true;
//     }
//   else{
//     return false;
//   }
// }
// console.log(isEven(55))

/*
16
Write a function called isodd
that accept 1 argument as a number,
and return true if this number is Odd
and false if this number is Even

Ex: isOdd(4)
=> false
Ex: isOdd(5)
=> true

*/

// function isodd (number){
//     if (number % 2 !== 0 ){
//         return true;
//     }
//   else{
//     return false;
//   }
// }
// console.log(isodd(55))

/*
17
Write a function called positive
that accept 1 argument as a number,
and return the positive version of the number passed

Ex: positive(4)
=> 4
Ex: positive(-5)
=> 5

*/
// function positive (number){
//  return Math.abs(number);
// }
// console.log(positive(-455))

/*
18
Write a function called fullName
that accept two parameters, firstName and lastName,
and returns the firstName and lastName concatenated
together with a space in between.

Ex: fullName("Adam","McCallen")
=> "Adam McCallen"
Ex: fullName("Alex", "Mercer")
=> "Alex Mercer"
*/

// function fullName (firstName , lastName){
//     return `${firstName} ${lastName}`;
// }
// console.log(fullName("Adam","McCallen"))


/*
19
Write a function called average
that takes five numbers as inputs
and returns the average of those numbers.

Ex: average(1,2,3,4,5)
=> 3

Ex: average(5,7,9,3,5)
=> 5.8

*/

// function average (number1,number2,number3,number4,number5){
// let  sum = number1 + number2 + number3 + number4 + number5;
// let  avg = sum/5;
//   return avg;
// }
// console.log (average(1,2,3,4,5))




/*
20
Write a function called randomNumber
that didnt takes any parameter
and returns a random number between 0-1
** hint: you can seacrh using MDN

Ex: randomNumber()
=> 0.2278

Ex: randomNumber()
=> 0.475

*/

// function randomNumber (){
//     return Math.random()
// }
// console.log(randomNumber())


/*
21
Write a function called randomBetweenNumbers
that takes 2 parameters
and returns a random number between them
** hint: you can seacrh using MDN

Ex: randomBetweenNumbers(1,8)
=> 7.5412

Ex: randomBetweenNumbers(3,100)
=> 23

*/


// function randomBetweenNumbers(min, max) {
//   if (min > max) {
//       return "Invalid input: min should be less than or equal to max.";
//   }
//   return Math.random() * (max - min) + min;
// }

// console.log(randomBetweenNumbers(3,100))


/*
22
Write a function called scoreInUniversty
that takes 1 parameters
and returns the alpabet in the unevirsty
A => 95-100
B => 85-94
C => 70-84
D=> 50-69
F=> 0-49

Ex: scoreInUniversty(96)
=> "A"

Ex: scoreInUniversty(3)
=> "F"

Ex: scoreInUniversty(71)
=> "C"
*/
// function scoreInUniversty (numberes) {
//     if (numberes<100 && numberes>95){
//         return "A"
//     }
//     else if (numberes<94 && numberes>85)
//         return "B"

//     else if (numberes<84 && numberes>70)
//         return "C"

//     else if (numberes<69 && numberes>50)
//         return "D"
//     else  (numberes<49 && numberes>0)
//         return "F"
     
// }
// console.log (scoreInUniversty(55));


/*
23
Write a function called counter
that will returns a number bigger
than the one that returnd before
and start from 0

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: counter()
=> 3

*/

 
// function counter() {
//   console.count("");
// }

// counter();
// counter();
// counter();

// let count = 0;
// function counter() {
//   count += 1;
//   return count;
//   console
// }
//  console.log (Counter())
// console.log (Counter())




/*
24
Write a function called resetCounter
that will reset the previuos function
and return the number before reset and
a string say that the counter reset

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: counter()
=> 3

Ex: resetCounter()
=> 3 and the counter reset now

Ex: counter()
=> 1

Ex: counter()
=> 2

Ex: resetCounter()
=> 2 and the counter reset now

Ex: counter()
=> 1
*/

// let count = 0;

// function counter() {
//   console.count("Counter");  
// }

// counter(); 
// counter();
// counter();

// console.countReset("Counter");

// counter(); 
// counter(); 