// 08-dom/08-generate-table-two/script.js - 8.8: creating a table (2)

(() => {

    // your code here
    let tableTarget = document.getElementById("target");
    console.log(tableTarget);
    let tbody = document.createElement("tbody");
    let tRow = "";
    let tCol = "";
    let multi = 0;

    for (let i = 1; i < 11; i++) {
        tRow = tbody.insertRow();

        for (let j = 1; j < 11; j++) {
            multi = i * j;
            tCol = tRow.insertCell();
            tCol.innerHTML = multi;
        }
    }
    tableTarget.appendChild(tbody);

})();
