// 09-misc/07-storage-clicker/script.js - 9.7: storage clicker


(() => {

    // your code here
    let targStor = document.getElementById("target").innerHTML = localStorage.getItem("counter");
    let btn = document.getElementById("increment");
    btn.addEventListener("click", () => {

        let count = Number(localStorage.getItem("counter"));
        count++;
        localStorage.setItem("counter", count);

        targStor = localStorage.getItem("counter");

    })

})();
