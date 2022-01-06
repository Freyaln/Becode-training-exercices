
// 02-maths/05-factorial/script.js - 2.5: Factorial

(() => {

    // to get the value of an input: document.getElementById("element-id").value

    document.getElementById("run").addEventListener("click", () => {

        // your code here
        let number = Number(document.getElementById("number").value);

        function factorial(n) {
            if (n < 0)                      // Using an if .. else if loop, here to refuse any numbers below 0
                return -1

            else if (n === 1)               // if the number is 1, the function return 1
                return 1

            else
                return (n * factorial(n - 1));  // Multiplying the input (a) by the function to run the function (a) times to reach the factorial.
        }
        alert(factorial(number));

    });

})();
