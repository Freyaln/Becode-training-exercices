// 02-maths/04-sort-numbers/script.js - 2.4: Sorting the numbers

(() => {

    // to get the value of an input: document.getElementById("element-id").value

    document.getElementById("run").addEventListener("click", () => {

        // your code here
        let array = [];
        let result = "";
        function splitting() {

            let input = document.getElementById("numbers").value.split(",");
            for (let i = 0; i < input.length; i++) {
                array.push(input[i]);
            };
            console.log(array)
        };

        function ordering(arr) {
            return arr.sort(function (a, b) {
                return a - b
            });
        };

        function stringy(arr) {

            result = arr.toString();
            console.log(result)
        };


        splitting()
        ordering(array);
        stringy(array);
        alert(result);
    });

})();
