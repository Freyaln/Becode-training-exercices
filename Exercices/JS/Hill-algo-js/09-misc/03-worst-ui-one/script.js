// 09-misc/03-worst-ui-one/script.js - 9.3: worst user interface (1) : phone slider


(() => {

    // your code here
    let val = document.getElementById("slider");
    console.log(val);
    let min = document.getElementById("slider").min;
    console.log(min);
    let max = document.getElementById("slider").max;
    console.log(max);
    let num = document.getElementById("target");
    console.log(num);

    document.getElementById("slider").addEventListener("input", () => {

        num.innerHTML = "0" + val.value;

    }, false);
})();
