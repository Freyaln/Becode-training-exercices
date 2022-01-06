// 10-asynchronous/02-get-comments/script.js - 10.2: chargement d'articles et de commentaires


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        window.lib.getPosts((error, articles) => {
            for (let elem of articles) {
                window.lib.getComments(elem.id, (error, comment) => {
                    elem.comments = comment;
                    console.log(elem.comments)
                })
            }
        })
    })
})();
