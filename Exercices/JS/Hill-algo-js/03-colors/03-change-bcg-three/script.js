
// 03-colors/03-change-bcg-three/script.js - 3.3: background color (3)


(() => {

    // your code here
    document.getElementById("run").addEventListener("click", () => {

        document.body.style.background = "#" + Math.floor(Math.random() * 16777215).toString(16);

    })
})();
