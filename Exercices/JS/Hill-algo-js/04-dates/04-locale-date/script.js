
// 04-dates/04-locale-date/script.js - 4.4: textual date


(() => {

    // to change the content of a tag: document.getElementById("element-id").innerHTML = "new-value"

    // your code here
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDay();
    let dayNum = date.getDate();
    let hour = date.getHours();
    let min = date.getMinutes();

    console.log(year, month, day, hour, min)

    if (day === 0) {
        day = "Sunday";
    }

    else if (day === 1) {
        day = "Monday";
    }

    else if (day === 2) {
        day = "Tuesday";
    }

    else if (day === 3) {
        day = "Wednesday";
    }

    else if (day === 4) {
        day = "Thursday";
    }

    else if (day === 5) {
        day = "Friday"
    }

    else if (day === 6) {
        day = "Saturday";
    };

    if (month === 0) {
        month = "January";
    }

    else if (month === 1) {
        month = "February";
    }

    else if (month === 2) {
        month = "March";
    }

    else if (month === 3) {
        month = "April";
    }

    else if (month === 4) {
        month = "May";
    }

    else if (month === 5) {
        month = "June";
    }

    else if (month === 6) {
        month = "July";
    }

    else if (month === 7) {
        month = "August";
    }

    else if (month === 8) {
        month = "September";
    }

    else if (month === 9) {
        month = "October";
    }

    else if (month === 10) {
        month = "November";
    }

    else if (month === 11) {
        month = "December";
    }

    document.getElementById("target").innerHTML = day + " " + dayNum + " " + month + " " + year + " , " + hour + "h" + min;

})();
