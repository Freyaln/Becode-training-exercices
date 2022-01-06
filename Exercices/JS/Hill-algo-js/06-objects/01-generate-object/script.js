// 06-objects/01-generate-object/script.js - 6.1: genererate an object


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        const myself = {
            firstname: "Aurélien",
            lastname: "Freyling",
            age: 34,
            city: "Charleroi",
            country: "Belgium",
        }

        console.log(myself);
    });

})();
