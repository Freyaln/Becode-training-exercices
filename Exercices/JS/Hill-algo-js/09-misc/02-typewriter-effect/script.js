// 09-misc/02-typewriter-effect/script.js - 9.2: typewriter effect


(() => {

    // your code here
    document.getElementById("target").innerHTML = " ";
    let baseText = "Je suis un texte qui va apparaître dans un effet \"machine à écrire\", un peu comme dans les films noirs. Sauf que... je ne sais pas qui est l'assassin ! Y en a-t-il vraiment un ? Habite-t-il au 21 ? Que de mystères !";
    let speed = "";
    let i = 0;
    console.log(baseText);


    function typewritter() {
        if (i < baseText.length) {
            document.getElementById("target").innerHTML += baseText.charAt(i);
            i++;
            speed = Math.floor(Math.random() * 20 * i);
            setTimeout(typewritter, speed);
        };
    };
    typewritter();

})();
