// 08-dom/06-mini-carousel/script.js - 8.6: mini carousel


(() => {

    let gallery = [
        "../../_shared/img/bell.svg",
        "../../_shared/img/clock.svg",
        "../../_shared/img/compass.svg",
        "../../_shared/img/lemon.svg",
        "../../_shared/img/map.svg",
    ];

    // your code here
    let img = document.querySelector("img");
    console.log(img)

    document.getElementById("next").addEventListener("click", () => {
        imgRandom = gallery[Math.floor(Math.random() * gallery.length)];
        img.src = imgRandom;
    })

})();
