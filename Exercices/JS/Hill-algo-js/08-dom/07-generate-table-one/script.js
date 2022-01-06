// 08-dom/07-generate-table-one/script.js - 8.7: creating a table (1)


(() => {

    // your code here
    let tableTarget = document.getElementById("target");
    console.log(tableTarget);
    let tbody = document.createElement("tbody");


    for (let i = 0; i < 10; i++) {
        let tRow = tbody.insertRow();

        for (let j = 0; j < 1; j++) {
            let tCol = tRow.insertCell();
        }
    }
    tableTarget.appendChild(tbody);
})();
