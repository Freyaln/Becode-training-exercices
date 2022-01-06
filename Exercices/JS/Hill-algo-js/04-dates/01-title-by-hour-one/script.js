
// 04-dates/01-title-by-hour-one/script.js - 4.1: text according to the hour (1)


(() => {

    // to change the content of a tag: document.getElementById("element-id").innerHTML = "new-value"

    // your code here

    let date = new Date();
    console.log(date);
    let time = date.getHours();
    console.log(time);

    if (time <= 18) {
        document.getElementById("target").innerHTML = "Hello"
    }
    if (time > 18) {
        document.getElementById("target").innerHTML = "Good evening"
    }

})();
