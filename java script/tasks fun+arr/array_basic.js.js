// 1-Write a function to find the largest element in an array.
// function arr(...elements) { 
//     let maxElement = ""; 

//     for (let i = 0; i < elements.length; i++) {
//         if (elements[i].length > maxElement.length) {
//             maxElement = elements[i];
//         }
//     }

//     return maxElement;
// }

// console.log(arr('feeda', 'ree', 'rere', 'erwerere', 'erf')); 

// 2-Write a function to find the smallest element in an array.

// function arr (...elements){
//     let minelement = elements[0];
//     for (let i = 1; i<elements.length; i++){
//         if (elements[i].length<minelement.length){
//             minelement = elements[i];
//         }
//     }
//     return minelement;
// }

// console.log(arr('feeda', 'ree', 'rere', 'erwerere', 'erfad'));


// 3-Write a function to find the sum of all elements in an array.

// function sumele(... elements) {
//     let sum =0;
//   for (let i = 0; i <elements.length; i++) {
//     sum+= elements[i];
    
//   }
//   return sum;
    
// }
//  console.log(sumele(1,4,4,3,2) );

// 4-Write a function to find the average of all elements in an array.

// function avgerage(... elements) {
//       let sum =0;
//     let avg =0;
// for (let i = 0; i <elements.length; i++) {
//     sum+= elements[i];
//     avg = sum / elements.length
    
//   }
//    return avg;
    
//  }
//   console.log(avgerage(1,4,4,3,2) );

// 5-Write a function to find the median of all elements in an array.

// function median(... elements) {
//     elements.sort((a, b) => a - b);
//     const n = elements.length;
  
//     if (n % 2 === 0){
//         const mid1 = elements[n / 2 - 1];
//         const mid2 = elements[n / 2];
//         return (mid1 + mid2) / 2;
//     }
//     else{
//         return elements[Math.floor(n / 2)];
//     }
// }

// console.log(median(1,4,4,3,2) );

// 6-Write a function to remove all duplicates from an array.

// function remove (...elements){
//     elements = [...new Set(elements)];
//     return elements;
// }
// console.log(remove('feda','ttt','feda','yioiuy'))


// 7-Write a function to sort an array in ascending order.

// function remove (...elements){
//     elements.sort() ;
//     return elements;
// }
// console.log(remove('feda','ttt','feda','yioiuy'))

// 8-Write a function to sort an array in descending order.

// function remove (...elements){
//     elements.sort((a, b) => b.localeCompare(a)) ;
//     return elements;
// }
// console.log(remove('feda','ttt','feda','yioiuy'))

// 9-Write a function to shuffle the elements of an array randomly. 

// function shuffledArray (...elements){
//     for (let i = elements.length - 1; i > 0; i--) {
//         const j = Math.floor(Math.random() * (i + 1));
       
// [elements[i], elements[j]] = [elements[j], elements[i]];
//    }
//  return elements;
   
// }

// console.log(shuffledArray('feda','ttt','feda','yioiuy','ggsa','assds','dsccc'))
