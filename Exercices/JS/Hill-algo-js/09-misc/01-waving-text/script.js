// 09-misc/01-waving-text/script.js - 9.1: waving text


(() => {

    // your code here
    let text = document.getElementById("target").innerHTML;
    console.log(text);

    let newText = text.split(" ");
    newText = newText.map(function (str) {
        if (str === " ") {
            return str;
        }
        return `<span style="font-size: ${[Math.floor(Math.random(30) * 15) + 10 + "px"]};"> ${str} </span>`;
    });

    newText = newText.join(" ");

    document.getElementById("target").innerHTML = newText;

})();
