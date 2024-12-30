/*
1
Correct the syntax error
 [ 1,7  9  45, ]

 ["Str" "alex","moh"

 'the','fox' 'over' lazy, 'dog',  ]

*/
// let arr1 = [1,7,9,45];
// let arr2 = ["Str", "alex","moh"];

// let arr3 = ['the','fox' ,'over', 'lazy', 'dog' ]
// console.log(arr1,arr2,arr3)

/*
2
What the index of "Banana","Tomato"
var fruits=["Tomato","Banana","Watermelon"]

*/
// var fruits=["Tomato","Banana","Watermelon"];
// console.log( fruits.indexOf("Banana"));
// console.log( fruits.indexOf("Tomato"));

/*
3
Create an array represents your:
1- Favorite Food (5)
2- Favorite Sport (3)
3- Favorite Movie (4)
*/
// let Favorite_food = ["mansaf","pizza","pasta","kabsa","musakhan"]
// let Favorite_sport = ["footaball","swimming","basketball"]
// let Favorite_movie = ["forzen","ratatouille","zootopia","tangled"]
// console.log (Favorite_food,Favorite_movie,Favorite_sport);

/*
4
Create a function called firstOfArray
that take an array as a parameter
and return the first element in an array

Ex: firstOfArray([1,4,5]) => 1
Ex: firstOfArray(["t","u","g","x"]) => "t"
*/

// function firstOfArray ([...elements]){
//     return elements[0]
// }
// console.log(firstOfArray ([1,4,5]));
// console.log (firstOfArray(["t","u","g","x"]));

/*
5
Create a function called lastOfArray
that take an array as a parameter
and return the first element in an array

Ex: lastOfArray([1,4,5]) => 5
Ex: lastOfArray(["t","u","g","x"]) => "x"
*/


// function lastOfArray ([...elements]){
//     return elements[elements.length-1]
// }
// console.log(lastOfArray([1,4,5]));
// console.log (lastOfArray(["t","u","g","x"]));


/*
6
Using console make this array to be like this one (push, unshift, shift, pop)

var array = [0,5,7,9]
=> [1,3,4,6,8,9,10]
*/
// let array =[0,5,7,9];
// array.shift();
// array.shift();
// array.shift();
// array.unshift(8);
// array.unshift(6);
// array.unshift(4);
// array.unshift(3);
// array.unshift(1);
// array.push(10);

// console.log(array);

/*
7
Using the console try to figure out what the thing thats (push, unshift, shift, pop) return to you

var array2 = [5,9,-7,3.5]
*/


// let array =[0,5,7,9];
// array.shift(),
// array.pop(),
// array.pop(),
// array.push(9);
// array.push(-7);
// array.push(3);
// array.push(5);

// console.log(array);

/*
8
Create a function called middleOfArray
that take an array as a parameter
and return the middle element in an array if it is have an odd elemnets
and return the two middle elemnt in an array if it is have an even elemnets

Ex: middleOfArray([1,4,5]) => 4
Ex: middleOfArray(["t","u","g","x"]) =>"u and g"
*/

// function middleOfArray (arr){
//     const length =arr.length;
// if (length % 2 !== 0){
//     return arr[Math.floor(length / 2)];
// }
// else{
//     const mid1 = arr[length / 2 - 1];
//     const mid2 = arr[length / 2];
//     return `${mid1} and ${mid2}`;
// }

// }
// console.log (middleOfArray([1,4,5]));

// console.log (middleOfArray(["t","u","g","x"]));


/*
9
Using assignment operator (=)
make the animals array have these animals
var animals = ['cat', 'ele', 'bird']
animals; => ['zebra', 'elephant']
** hint: animals[0]=something


var nums= [1,2,3,8,9]
nums => [5,-22,3.5,44,98,44]
*/
// var animals =[];
// animals[0] = 'cat'
// animals[1] = 'bird'
// animals[2] = 'zebra'
// console.log(animals);

/*
10
Create a function called indexOfArray
that accept an array and index
and return what this array have in this index

var nums= [1,2,3,8,9]
Ex: indexOfArray(nums,3) => 8
Ex: indexOfArray(nums,1) => 2
Ex: indexOfArray(nums,4) => 9

**try more cases by your self
*/

// function indexOfArray (array,index){
//     return array[index];
// }
// var nums = [1,2,3,8,9];
// console.log(indexOfArray(nums,3));
// console.log(indexOfArray(nums,1));
// console.log(indexOfArray(nums,0));
// console.log(indexOfArray(nums,4));


/*
11
Create a function called arrayExceptLast
that accept an array
and return the entire array except the last elemnt
** hint: search abou the function that will cut the array on MDN
var nums= [1,2,3,8,9]
Ex: arrayExceptLast(nums) =>  [1,2,3,8]

**try more cases by your self
*/

// function arrayExceptLast (array){
//     array.pop();
//     return array

// }
// var nums= [1,2,3,8,9];
// console.log(arrayExceptLast(nums));


/*
12
Create a function called addToEnd
that accept an array and value
and return the entire array with add this value to the end of this array

var nums= [1,2,3,8,9]
Ex: addToEnd(nums,55) =>  [1,2,3,8,55]

**try more cases by your self
*/
// function addToEnd (array){
//     array.pop();
//     array.push(55);
//     return array;

// }
// var nums= [1,2,3,8,9];
// console.log(addToEnd(nums));


// all the exercises below should solved 2 times: 1- for loop 2- while lopp
/*
13
Create a function called sumArray
that accept an array
and return the summation of all elemnt in this array

var nums= [1,2,3,8,9]
Ex: sumArray(nums) => 23

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
// let sum = 0;
// function sumArray (array) {
//     for (let i = 0; i <array.length; i++) {
//         sum += array[i];
//     }
//     return sum;
// }
// var nums= [1,2,3,8,9];
// console.log(sumArray(nums));

// let sum = 0;
// let i = 0;
// function sumArray (array) {
//   while(i<array.length){
//     sum += array[i];
//     i++
//   }
//   return sum;
// }
// var nums= [1,2,3,8,9]
// console.log (sumArray(nums));


/*
14
Create a function called minInArray
that accept an array
and return the minimum value inside this array

var nums= [1,2,3,8,9]
Ex: minInArray(nums) => 1

** solve it one time using for loop and another using while loop
**try more cases by your self
*/

// function middleOfArray (array){
//     let min = array[0];
//       for (let i = 1; i <array.length; i++) {
//              if(min>array[i]){
//                 min=array[i]
//              }
             
//             }

//             return min;
// }
// var nums= [1,2,3,8,9]
// console.log (middleOfArray(nums));


/*
15
Create a function called removeFromArray
that accept an array and elemnt to remove
and return the array after remove this elemnt from it

var nums= [1,2,3,8,9]
Ex: minInArray(nums,8) => [1,2,3,9]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/

   // function removeFromArrayUsingFor(array, element) {
   //    for (let i = 0; i < array.length; i++) {
   //      if (array[i] === element) {
   //        array.splice(i, 1); 
   //        break;
   //      }
   //    }
   //    return array;
   //  }
   //  var nums= [1,2,3,8,9]
   //  console.log (removeFromArrayUsingFor(nums,8) )
   //  let i = 0;
   //  function removeFromArrayUsingFor(array,element){
   //  while(i<array.length){
   //    if(array[i]===element){
   //       array.splice(i, 1); 
   //       break;
   //    }
   //    i++
   //  }
   //  return array;
   //  }
   //  var nums= [1,2,3,8,9]
   //  console.log (removeFromArrayUsingFor(nums,8) )


   /*
16
Create a function called oddArray
that accept an array
and return an array have only the odd elemnts

var nums= [1,2,3,8,9]
Ex: oddArray(nums) => [1,3,9]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
// function oddarray (array){
//    for(let i=0; i<array.length;i++){
//     if (i % 2 !== 0){
//       array.unshift();
//     }
//     else{
//       array.shift();
//     }
// }
// return array;
// }
// var nums= [1,2,3,8,9];
// console.log(oddarray(nums));

// function oddarray (array){
//    let i= 0;
//    while(i<array.length){
//       if (i % 2 !== 0){
//          array.unshift();
//          }
//          else{
//          array.shift();
//              }
//              i++
//    }
//    return array;
// }
// var nums= [1,2,3,8,9];
// console.log(oddarray(nums));

/*
17
Create a function called aveArray
that accept an array
and return the average of the numbers inside this array

var nums= [1,2,3,8,9]
Ex: aveArray(nums) => 4.6

var nums2= [1,2,3,8,9,77]
Ex: aveArray(nums) => 16.6

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
// let sum =0;
// let avg = 0;
// function aveArray (array){
//    for(let i= 0;i<array.length;i++){
//      sum += array[i];
//      avg = sum/array.length
//    }
//    return avg
// }
// var nums2= [1,2,3,8,9,77];
// console.log(aveArray(nums2));
// function aveArray (array){
// let i = 0;
// let avg = 0;
// while (i<array.length){
//    let sum = 0;
//    sum += array[i]
//    avg = sum /array.length;
//    i++
// }
// return avg;
// }

// var nums2= [1,2,3,8,9,77];
// console.log(aveArray(nums2));


/*
18
Create a function called shorterInArray
that accept an array of strings
and return the shortest string inside this array (first)

var strings= ["alex","mercer","madrasa","rashed2","emad","hala"]
Ex: shorterInArray(strings) => "alex"

** solve it one time using for loop and another using while loop
**try more cases by your self
*/


// function shorterInArray (array){
//    let minelement = array[0];
//    for(let i = 0;i<array.length;i++){
//       if(array[i].length<minelement.length){
//          minelement = array[i];
//       }
//    }
//    return minelement;
// }
// var strings= ["alex","mercer","madrasa","rashed2","emad","hala"]
// console.log (shorterInArray(strings))

// function shorterInArray (array){
//    let minelement = array[0];
//    let i = 0;
//    while(i<array.length){
//       if(array[i].length<minelement.length){
//        minelement = array[i];
//          }
//          i++
//    }
//    return minelement;
// }
// var strings= ["alex","mercer","madrasa","rashed2","emad","hala"]
// console.log (shorterInArray(strings))



/*
19
Create a function called repeatChar
that accept a string and char
and return the times that this char repeat inside this string

var string= "alex mercer madrasa rashed2 emad hala"
Ex: repeatChar(string,"a") => 6
Ex: repeatChar(string,"z") => 0

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
// let rep = 0;
// function repeatChar (string,char){
//    for (let i = 0;i<string.length;i++) {
//       if (string[i] === char) { 
//          rep++;
//    }
// }
//    return rep;

// }
// var string= "alex mercer madrasa rashed2 emad hala";
// console.log( repeatChar(string,"z"));
// console.log( repeatChar(string,"a"));

// function repeatChar (string,char){
//    let i = 0;
//    let rep = 0;
//    while (i<string.length){
//    if (string[i] === char) { 
//    rep++;
//    }
//    i++
//    }
//    return rep;
// }
// var string= "alex mercer madrasa rashed2 emad hala";
// console.log( repeatChar(string,"z"));
// console.log( repeatChar(string,"a"));


/*
20
Create a function called evenIndexOddLength
that accept an array of strings
and return a new array that have the string with odd length in even index

var strings= ["alex","mercer","madrasa","rashed2","emad","hala"]
Ex: evenIndexOddLength(strings) => ["madrasa"]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/

// function evenIndexOddLength(array){
//    let result =[];
//    for(let i =0;i<array.length;i++){
//       if (i % 2 === 0 && array[i].length % 2 !== 0) { 
//          result.push(array[i]);
//        }
//    }
// return result;
// }
// var string=["alex","mercer","madrasa","rashed2","emad","hala"]
// console.log(evenIndexOddLength(string));

// function evenIndexOddLength (array){
//    let result = [];
//    let i = 0;
//    while(i<array.length){
//   if (i % 2 === 0 && array[i].length % 2 !== 0) { 
//         result.push(array[i])
//       }
//       i++
//    }
//    return result;
// }
// var string=["alex","mercer","madrasa","rashed2","emad","hala"]
// console.log(evenIndexOddLength(string));

/*
21
Create a function called powerElementIndex
that accept an array of number
and return a new array that have the elemnt power by the index of it self

var nums= [44, 5, 4, 3, 2, 10]
Ex: powerElementIndex(nums) => [0, 5, 16, 27, 16, 100000]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
// function powerElementIndex (array){
//    let result = [];
//    for(let i = 0;i<array.length;i++){
//       result.push(Math.pow(array[i], i)); 
//    }
//    return result;
// }
// var nums= [44, 5, 4, 3, 2, 10];
// console.log(powerElementIndex(nums));


// function powerElementIndexWhile(array) {
//   let result = []; 
//   let i = 0;
//   while (i < array.length) {
//     result.push(Math.pow(array[i], i)); 
//     i++;
//   }

//   return result; 
// }
// var nums = [44, 5, 4, 3, 2, 10];
// console.log(powerElementIndexWhile(nums)); 


/*
22
Create a function called evenNumberEvenIndex
that accept an array of nums
and return a new array that have the even number in even index

var nums= [5,2,2,1,8,66,55,77,34,9,55,1]
Ex: evenNumberEvenIndex(nums) => [2,8,34]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
function evenNumberEvenIndex(array){
   let result =[];
   for (let i =0;i<array.length;i++){
      if(  i % 2 === 0 && array[i] % 2 === 0){
         result.push(array[i]);
      }
   }
return result;
}
var nums= [5,2,2,1,8,66,55,77,34,9,55,1];
console.log(evenNumberEvenIndex(nums))

function evenNumberEvenIndex(array){
   let i = 0;
   let result =[];
   while(i<array.length){
      if(  i % 2 === 0 && array[i] % 2 === 0){
         result.push(array[i]);
      }
      i++
   }
   return result;
}
var nums= [5,2,2,1,8,66,55,77,34,9,55,1];
console.log(evenNumberEvenIndex(nums));
