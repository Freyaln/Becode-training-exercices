// 10-asynchronous/05-promise-get-comments/script.js - 10.5: chargement d'articles et de commentaires (Promise)


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        window.lib.getPosts().then((articles) => {
            for (let elem of articles) {
                window.lib.getComments(elem.id).then((comments) => {
                    elem.comment = comments
                    console.log(comments)
                })
            }
        })
    })
})();
