// 05-arrays/09-rand-array-stats/script.js - 5.9: random & statistics array

(() => {

    // your code here
    document.getElementById("run").addEventListener("click", () => {


        let tablecells = document.querySelectorAll("td");
        let arr = [];
        let arr2 = [];
        let min = 101;
        let max = 0;
        for (let i = 0; i < 10; i++) {
            let random = Math.floor(Math.random() * 100 + 1);
            tablecells[i].innerHTML = random;
            arr.push(random);
            console.log(random)
            if (random < min) {
                min = random;
            }
            if (random > max) {
                max = random;
            }
            document.getElementById("min").innerHTML = min;
            document.getElementById("max").innerHTML = max;
        }

        for (let i of arr) {
            arr2.push(i);
        }

        sum = arr2.reduce((a, b) => a + b, 0)
        console.log(sum)

        document.getElementById("sum").innerHTML = sum;
        document.getElementById("average").innerHTML = sum / 10;




    })

})();
