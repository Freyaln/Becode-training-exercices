// 08-dom/10-match-password-two/script.js - 8.10: password verification (2)


(() => {

    // your code here
    document.getElementById("run").addEventListener("click", () => {
        let passOne = document.getElementById("pass-one");
        console.log(passOne);
        let passTwo = document.getElementById("pass-two");
        console.log(passTwo);

        if (passOne.value != passTwo.value) {
            passOne.classList.add("error");
            passTwo.classList.add("error");
        }
    });
})();
