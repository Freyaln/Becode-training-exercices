
// 02-maths/03-even-square/script.js - 2.3: squares and pairs


(() => {

    document.getElementById("run").addEventListener("click", () => {

        // your code here
        let squareList = "";
        for (let i = 0; i <= 21; i++) {
            squareList = i * i
            alert(squareList);
        }
    });

})();
