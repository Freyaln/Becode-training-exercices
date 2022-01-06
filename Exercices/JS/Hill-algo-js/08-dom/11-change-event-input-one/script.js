// 08-dom/11-change-event-input-one/script.js - 8.11: change event (1)


(() => {

    // your code here

    let keyCount = document.getElementById("counter");
    let passOne = document.getElementById("pass-one");
    passOne.setAttribute("maxlength", 10)
    let keyInc = 0;

    document.getElementById("pass-one").addEventListener("keyup", () => {
        if (keyInc < 10) {
            keyInc++;
            keyCount.innerHTML = keyInc + "/10";
        }
    });



})();
