// 08-dom/05-hover-image/script.js - 8.5: image hover


(() => {

    // your code here
    let img = document.querySelector("img");
    let imgData = img.dataset.hover;

    img.addEventListener("mouseover", () => {

        img.src = imgData;
    })


    console.log(img);
    console.log(imgData);
    console.log(img.src)
})();
