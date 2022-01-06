// 06-objects/04-from-entries/script.js - 6.4: fromEntries


(() => {
    const keys = ["name", "species", "age", "gender", "color"];
    const values = ["Skitty", "cat", 9, "female", "tabby"];
    // your code here
    document.getElementById("run").addEventListener("click", () => {

        const obj = Object.fromEntries(keys.map((j, i) => [keys[i], values[i]]))

        console.log(obj)
    })
})();
