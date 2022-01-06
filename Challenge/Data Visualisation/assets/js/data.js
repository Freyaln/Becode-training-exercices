
var table2 = document.getElementById("table2");
var displayParent = document.getElementById("mw-content-text");
var canvas3 = document.createElement("canvas");
var yearsArray = [];
displayParent.insertBefore(canvas3, table2);

let randColor = () => {
    return '#' + Math.floor(Math.random() * 16777215).toString(16);
}


let chart3 = new Chart(canvas3, {
    type: 'bar',
    data: {
        labels: [],
        datasets: [{
            label: "Click to display",
            data: [],
            backgroundColor: [],
            boderColor: [],
            borderWidth: 1,
            fill: true
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

for (let i = 2; i < table2.rows[1].cells.length; i++) {
    let getYears = table2.rows[0].cells[i].innerText;
    chart3.data.labels.push(getYears);
};

for (let i = 0; i < table2.rows.length; i++) {
    if (i >= 1) {
        let getCountry = {
            label: "",
            borderColor: randColor(),
            backgroundColor: randColor(),
            data: []
        }
        getCountry.label = table2.rows[i].cells[1].innerText
        for (let a = 2; a < table2.rows[i].cells.length; a++) {
            getCountry.data.push(parseInt(table2.rows[i].cells[a].innerText))
        }
        chart3.data.datasets.push(getCountry)
    }
}





//aller chercher les elements du tableau pour les afficher dans le canvas
// Use the rows collection to return a collection of all <tr> elements in a table.
table2.rows;
