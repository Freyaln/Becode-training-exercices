// 08-dom/02-select-two/script.js - 8.2: select by css selector


(() => {

    // your code here
    let target = document.getElementsByClassName("material")[0];
    targetChange = target.getElementsByTagName("p")[0];
    targetChange.textContent = "Owned";

})();
