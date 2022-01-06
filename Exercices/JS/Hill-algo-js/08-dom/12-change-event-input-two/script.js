// 08-dom/12-change-event-input-two/script.js - 8.12: change event (2)


(() => {

    // your code here
    let input = document.getElementById("pass-one");
    let validity = document.getElementById("validity");
    let regex = /[0-9].*?[0-9](.*|[0-9])?/gi

    input.addEventListener("input", function () {
        let pswrd = input.value
        if (pswrd.length >= 8) {
            let check = regex.test(pswrd);

            if (check) {
                check = regex.test(pswrd);
                validity.textContent = "[ok]";
            }

        } else {
            validity.textContent = "[Not ok]"
        }
    });

    // Crédit à AlineBsr on github
})();
