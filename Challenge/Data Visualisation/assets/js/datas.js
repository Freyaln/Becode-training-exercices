//TODO
// - make the button work

// Variables
//Creating the div (container) & the canvas (for the chart)
const div = document.createElement("div");
div.id = "canvasContainer"
document.getElementById("firstHeading").appendChild(div);
const canvas = document.createElement("canvas");
canvas.id = "canvas";
document.getElementById("canvasContainer").appendChild(canvas);
const button = document.createElement("button");
button.id = "pauseButton";
button.textContent = "Pause";
document.getElementById("firstHeading").appendChild(button);

let datas = [];
let label = [];
let chart;

// Fetch datas function
fetch("https://canvasjs.com/services/data/datapoints.php")
    .then(res => res.json())
    .then(stats => stats.forEach(e => {
        datas.push(e[1]);
        label.push(e[0]);
    }));
setGraph(datas, label)


// function to set the graph 
function setGraph(datas, label) {


    const canvasChart = document.getElementById("canvas").getContext("2d");

    chart = new Chart(canvasChart, {
        type: "line",
        data: {
            labels: label,
            datasets: [{
                data: datas,
                backgroundColor: [
                    "rgba(255,99,132,0.2)",
                    "rgba(54,162,235,0.2)",
                    "rgba(255,206,86,0.2)",
                    "rgba(75,192,192,0.2)",
                    "rgba(153,102,255,0.2)",
                    "rgba(255,159,64,0.2)"
                ],
                borderColor: ["rgba(255,99,132,1)",
                    "rgba(54,162,235,1)",
                    "rgba(255,206,86,1)",
                    "rgba(75,192,192,1)",
                    "rgba(153,102,255,1)",
                    "rgba(255,159,64,1)",],
                label: "Crime statistics"
            }]
        }
    })

}
let check;

//Update graph with new datas
function interval() {
    check = setInterval(() => {
        chart.update();
        fetch("https://canvasjs.com/services/data/datapoints.php", { cache: "reload" })
            .then(res => res.json())
            .then(stats => stats.forEach(e => {
                datas.push(e[1]);
                label.push(e[0]);
            }));
        setGraph(datas, label)

    }, 1000);
}
interval();


document.getElementById("pauseButton").addEventListener("click", () => {
    console.log("test")
    clearInterval(check);
    setTimeout(interval, 5000);
});

setGraph();





