
// 02-maths/02-calculator-two/script.js - 2.2: calculatrice (2)

(() => {
    // to get the value of an input: document.getElementById("element-id").value

    const performOperation = operation => {
        // perform the operation
        let operandOne = Number(document.getElementById("op-one").value);
        let operandTwo = Number(document.getElementById("op-two").value);
        let result = "";
        switch (operation) {

            case "addition":

                result = operandOne + operandTwo;
                alert("The result is : " + result);
                break;

            case "substraction":

                result = operandOne - operandTwo;
                alert("The result is : " + result);
                break;

            case "multiplication":

                result = operandOne * operandTwo;
                alert("The result is : " + result);
                break;

            case "division":

                result = operandOne / operandTwo;
                alert("The result is : " + result);
                break;

            default:
                alert("You should enter some numbers first...")
                break;
        }
    };

    Array.from(document.querySelectorAll("button.operator")).forEach($btn =>
        $btn.addEventListener(
            "click",
            () => (performOperation($btn.id), false),
        ),
    );
})();
