
// 01-base/04-asv-confirm/script.js - 1.4: ASV avec confirmation

(() => {
    // Don't bother with that, look at your browser's console(chrome), you can delete it afterwards ;)
    console.log('%c ', 'padding: 38px; background:url(https://becode.org/app/uploads/2020/03/bc_mailsign_seal.png) no-repeat;');
    console.log('Hello Woods programmer');

    // YOUR CODE HERE
    function asv() {
        let age = prompt("How old are you ?");
        let gender = prompt("What's your gender ?");
        let city = prompt("In which city do you currently live ?");
        let conf = confirm("Do you confirm your infos ? : You have " + age + " old " + " you are a " + gender + " and you live in " + city);
        if (conf === false) {
            prompt("Ok, let's do this again", asv())
        }
        if (conf == true) {
            alert("Perfect !")
        }
        else { }
    };

    asv()
})();
