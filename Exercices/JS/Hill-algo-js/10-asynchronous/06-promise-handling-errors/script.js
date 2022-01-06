// 10-asynchronous/06-promise-handling-errors/script.js - 10.6: gestion d'erreur (Promise)


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        Promise.resolve(window.lib.getPersons())
        console.log(window.lib.getPersons())
        console.error()
    })
})();
