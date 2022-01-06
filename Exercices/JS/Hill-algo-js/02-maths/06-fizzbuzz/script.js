
// 02-maths/06-fizzbuzz/script.js - 2.6: fizzbuzz

(() => {

    // your code here
    // if n % 3 = 0 -- Divisible par 3
    for (i = 1; i <= 100; i++) {

        if (i % 3 === 0 && i % 5 === 0) {
            console.log(i + " fizzbuzz");
        }

        else if (i % 3 === 0) {
            console.log(i + " fizz");

        }
        else if (i % 5 === 0) {
            console.log(i + " buzz");
        }

        else if (i % 3 != 0) {
            console.log(i);
        }
        else if (i % 5 != 0) {
            console.log(i);
        }
    };
    console.log(i)
})();
