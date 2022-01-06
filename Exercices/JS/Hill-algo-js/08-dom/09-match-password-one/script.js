// 08-dom/09-match-password-one/script.js - 8.9: password verification (1)


(() => {

    // your code here
    document.getElementById("run").addEventListener("click", () => {
        let passOne = document.getElementById("pass-one").value;
        console.log(passOne);
        let passTwo = document.getElementById("pass-two").value;
        console.log(passTwo);

        if (passOne != passTwo) {
            document.getElementById("pass-two").style.borderColor = "red";
        }
    });
})();
