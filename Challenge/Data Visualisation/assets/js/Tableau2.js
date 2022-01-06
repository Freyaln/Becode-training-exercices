let canva = document.createElement("canvas");
canva.id = "didilid"

let tableau = document.getElementById("table1");


tableau.parentNode.insertBefore(canva,tableau);
let graph = document.getElementById("didilid").getContext("2d");

let row = tableau.rows
let annee = []
let donnee = []

const randomColor = () => {
    let r = Math.random()*255
    let g = Math.random()*255
    let b = Math.random()*255

    return `rgb(${r}, ${g}, ${b})`
};


for (let i = 2; i < row[1].cells.length; i++) {
    annee.push(row[1].cells[i].innerHTML)
    
}


for (let i = 2; i < row.length; i++) {
    let pays = row[i].cells[1].innerHTML

    let varilavariable = []
     

    for (let j = 2; j < row[i].cells.length; j++) {
      
        varilavariable.push(parseInt(row[i].cells[j].innerHTML))

    }
   
    let data = {

        label : pays, 
        data : varilavariable,
        backgroundColor : randomColor()

        

    }
    
    donnee.push(data)


 
}



const config = {
    type : "bar",
    data : {
            labels : annee, 
            datasets : donnee
    },

    options: {
        responsive: true,
    }
};



const chartTable1 = new Chart(graph,config);


/*

for (let i = 0; i < array.length; i++) {
    const element = array[i];

    console.log(element)
    
}
*/



