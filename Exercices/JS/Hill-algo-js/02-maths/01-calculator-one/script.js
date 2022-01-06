
// 02-maths/01-calculator-one/script.js - 2.1: calculator1

(() => {
    // to get the value of an input: document.getElementById("element-id").value




    document.getElementById("addition").addEventListener("click", function () {
        // perform an addition
        let operandOne = Number(document.getElementById("op-one").value);
        let operandTwo = Number(document.getElementById("op-two").value);
        let result = operandOne + operandTwo;
        alert("The result is : " + result);
    });

    document.getElementById("substraction").addEventListener("click", function () {
        // perform an substraction
        let operandOne = Number(document.getElementById("op-one").value);
        let operandTwo = Number(document.getElementById("op-two").value);
        let result = operandOne - operandTwo;
        alert("The result is : " + result);
    });

    document.getElementById("multiplication").addEventListener("click", function () {
        // perform an multiplication
        let operandOne = Number(document.getElementById("op-one").value);
        let operandTwo = Number(document.getElementById("op-two").value);
        let result = operandOne * operandTwo;
        alert("The result is : " + result);
    });

    document.getElementById("division").addEventListener("click", function () {
        // perform an division
        let operandOne = Number(document.getElementById("op-one").value);
        let operandTwo = Number(document.getElementById("op-two").value);
        let result = operandOne / operandTwo;
        alert("The result is : " + result);
    });
})();
