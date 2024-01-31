Task 2: Sum of the series

Make a program that calculates and prints the sum of the series from $number1 to $number2. Give values of your choosing to these variables (in real-life case they’d most likely come from a form in web page). E.g. if the values are 1 and 5, the program should calculate 1+2+3+4+5 and print the value 15. 

let numbers = 0;
let sumOfNumbers = 0;

for (numbers; numbers >= 0; numbers++) 
    let inputNumber = Number(prompt('Please enter numbers. To terminate enter 0'));
    sumOfNumbers += inputNumber;
    if (inputNumber == 0) break;