
// 04-dates/03-age-by-select/script.js - 4.3: calculate the age


(() => {

    // your code here
    let date = new Date();
    console.log(date);
    let day = date.getDay();
    console.log(day);
    let month = date.getMonth();
    console.log(month);
    let year = date.getFullYear();
    console.log(year);


    document.getElementById("run").addEventListener("click", function () {

        let userDay = day - document.getElementById("dob-day").value;
        let userMonth = month - document.getElementById("dob-month").value;
        let userYear = year - document.getElementById("dob-year").value;
        console.log(userDay, userMonth, userYear);

        let age = userYear;
        alert(age);
    });



})();
