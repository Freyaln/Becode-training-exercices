// 08-dom/04-attr-create/script.js - 8.4: manipulating attributes and creating elements


(() => {

    // your code here
    let base = document.getElementById("source");
    let img = base.dataset.image;
    let target = document.getElementById("target");
    let newImg = document.createElement("img");
    newImg.src = "http://www.randomkittengenerator.com/cats/rotator.php";
    target.appendChild(newImg);

    base.remove();


})();
