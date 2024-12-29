
// 1- Write a program that prints numbers from 1 to 10 using a for loop.
// let text = "";
// for (let i = 1; i > 0 && i <= 10; i++) { 
//     text += "The number is " + i + "<br>";
// }
// console.log(text);

// 2-Write a program that prints the even numbers from 1 to 10 using a for loop.

// for (let i = 1; i <= 10; i++)
//     {
//     if (i % 2 == 0){
//         console.log (i);
//     }
// }
// 3- Write a program that prints the odd numbers from 1 to 10 using a while loop.
  
// for (let i = 1; i <= 10; i++)
//          {
//         if (i % 2 != 0){
//             console.log (i);
//          }
//      }
// 4- Write a program that prints the multiplication table of a number entered by the user using a for loop.
// let i ;
// let y;


// for ( let i=1;i <=10 ; i++){
//     for(let y=1; y <=10 ;y++)
//         console.log(i+"X"+y +"="+i*y)
// }

// 5- Write a program that calculates the sum of numbers from 1 to 100 using a while loop.
// let i=1 ;
// while (i <= 50) {
//     let y=0 ;
// while (y <= 50) {
//     let res = (i + y);
// console.log(i +"+"+y +"="+ res)
//     y++;
// }
   

// i++;
// }
// 6- Write a program that calculates the factorial of a number entered by the user using a for loop.
// let usernum = 5;
// let factorial = 1;
// for (let i = 1; i <= usernum; i++) {
//     factorial *= i;
   
// }
// console.log(`The factorial of ${usernum} is ${factorial}.`);

// 7- Write a program that prints the Fibonacci series up to a certain number entered by the user using a while loop.

// let fib=[0,1];
// let usernumb1 = 10;
// let i=2;
// while (i<usernumb1){
//     fib[i] = fib[i - 1] + fib[i - 2];
//     i++;
// }
// console.log(fib);


// 8- Write a program that prints the reverse of the following numbers:
//5 , 10 , 15 , 20
// using a while loop.


let i = 0;
let num = 20;
while(i <=num){
   
    i+= 5
     
}
for (let j = i - 5; j >= 0; j -= 5) {
    console.log(j); // reverse
}

