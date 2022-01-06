// 10-asynchronous/03-handling-errors/script.js - 10.3: gestion d'erreur


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        window.lib.getPersons((error, persons) => {
            for (let elem of persons)
                console.log(elem);
            console.error();
        })
    })
})();
