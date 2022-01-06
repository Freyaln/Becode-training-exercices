// 09-misc/06-guess-number/script.js - 9.6: guess the number

(() => {

    // your code here
    let random = "";

    function randomNum() {
        random = Math.floor(Math.random() * 100 + 1);
        console.log(random);
        prompt("Guess the number :");
        let userInput = "";
        let chanceLeft = 7;
        let chanceLeftCom = 7;
        for (let i = 0; i < chanceLeft; i++) {
            if (userInput > random) {
                chanceLeftCom -= 1;
                userInput = prompt("Lower, try again" + "\n" + "Chances remaining : " + chanceLeftCom);
            }
            if (userInput < random) {
                chanceLeftCom -= 1;
                userInput = prompt("Higher, try again" + "\n" + "Chances remaining : " + chanceLeftCom);
            }
            if (userInput === random) {
                alert("That's it!");
                break;
            }
            if (chanceLeftCom === 1) {
                alert("Better luck next time");
                break;
            }
        }
    }
    randomNum()


})();
