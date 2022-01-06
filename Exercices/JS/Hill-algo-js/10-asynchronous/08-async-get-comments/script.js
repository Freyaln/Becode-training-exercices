// 10-asynchronous/08-async-get-comments/script.js - 10.8: chargement d'articles et de commentaires (async/await)


(() => {
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        async function fetch() {
            await window.lib.getPosts().then(async (articles) => {
                for (let elem of articles) {
                    await window.lib.getComments(elem.id).then(async (comments) => {
                        elem.comment = comments
                        console.log(comments)
                    })
                }
            })
        };
        console.log(fetch())
    })
})();
