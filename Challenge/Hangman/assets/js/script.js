//Variables
let word = document.getElementById("words");
let img = document.getElementById("imgSrc");
let chancesLeft = document.getElementById("chancesLeft");
let lettersFound = document.getElementById("lettersFound");
let lettersToFind = document.getElementById("lettersToFind");
let randomWord = words[Math.floor(Math.random() * words.length)];
let randomWordEn = wordsEn[Math.floor(Math.random() * wordsEn.length)]
let wordToFind = [];
let lettersFoundNum = 0;
let wordGuessed = [];
let left = 7;
let toFind = wordToFind.length;
let dataLang = 1;
lettersToFind.innerHTML = "Lettres restantes : " + toFind;
lettersFound.innerHTML = "Lettres trouvées : ";
chancesLeft.innerHTML = "Essais restants : " + left;


// Funtion to swap the language of the page (WIP)
function getLang() {
    if (document.getElementById("lang").dataset.lang === "fr") {
        wordToFind = randomWord;
        dataLang = 1;
    }
    if (document.getElementById("lang").dataset.lang === "en") {
        wordToFind = randomWordEn;
        dataLang = 2;
    }
}
getLang()
console.log(wordToFind)

for (let elem of wordToFind) {
    elem += "_"
    wordGuessed.push("_");
    word.innerHTML += "_" + `\n`;
};

//alerte() replace alert()                                                              Source SalukiMakingCode on github.
document.getElementById("alertCloseButton").addEventListener("click", () => {
    document.getElementById("alert").style.display = "none";
})
document.getElementById("newGame").addEventListener("click", () => {
    location.reload();
})
function alerte(text) {
    document.getElementById("alertText").innerHTML = text;
    document.getElementById("alert").style.display = "flex";
}

//Function to check letters
function wordToGuess(choice) {
    let i = 0;

    for (let elem of wordToFind) {
        if (choice === elem) {
            lettersFoundNum++;
            toFind--;
            wordGuessed[i] = elem;
            word.innerHTML = wordGuessed.join(' ');
            lettersFound.innerHTML = "Lettres trouvées : " + lettersFoundNum;
            lettersToFind.innerHTML = "Lettres restantes : " + toFind;
            document.getElementById(choice).style.backgroundColor = "green";
            document.getElementById(choice).style.color = "white";
        }

        if (lettersFoundNum === wordToFind.length) {
            alerte("Bravo, vous avez gagné. N'hésitez pas à retenter votre chance !");
        }
        i++;
    }
    if (wordToFind.includes(choice) === false) {
        left -= 1;
        img.src = "./assets/img/" + left + ".svg";
        chancesLeft.innerHTML = "Essais restants : " + left;
        document.getElementById(choice).style.backgroundColor = "red";
        document.getElementById(choice).style.color = "white";
    }
    if (left === 0) {
        img.src = "./assets/img/0.svg";
        alerte("Oh noes, vous avez malheureusement perdu.. Mais pas d'inquiétude, juste quelques pixels sont morts.")
    }
};

//Listening to mouse clicks
document.querySelectorAll(".letter").forEach((element) =>
    element.addEventListener("click", () => {
        if (document.querySelector("#" + element.id))
            wordToGuess(element.id);
    }));

//Listening to keyboard input
window.addEventListener("keypress", () => {

    if (document.querySelector("#" + event.key))
        wordToGuess(event.key);
});