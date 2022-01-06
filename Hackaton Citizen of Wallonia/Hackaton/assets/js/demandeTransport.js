//Select elements
const familyName = document.getElementById("familyName");
const firstName = document.getElementById("firstName");
const personCount = document.getElementById("personCount");
const departZone = document.getElementById("departZone");
const targetZone = document.getElementById("targetZone");
const travelDate = document.getElementById("travelDate");
const travelTime = document.getElementById("travelTime");
const comments = document.getElementById("comments");
const submit = document.getElementById("submit");

//Get value
let familyNameData = "";
let firstNameData = "";
let personCountData = "";
let departZoneData = "";
let targetZoneData = "";
let travelDateData = "";
let travelTimeData = "";
let commentsData = "";
let datasTransportDemands = [];

submit.addEventListener('click', (e) => {
    e.preventDefault();
    location.href = "confirmation-demande-transport.html";

    familyNameData = familyName.value;
    firstNameData = firstName.value;
    personCountData = personCount.value;
    departZoneData = departZone.value;
    targetZoneData = targetZone.value;
    travelDateData = travelDate.value;
    travelTimeData = travelTime.value;
    commentsData = comments.value;

    //Set the object
    datasTransportDemands = [{
        familyName: familyNameData,
        firstName: firstNameData,
        personCount: personCountData,
        departZone: departZoneData,
        targetZone: targetZoneData,
        travelDate: travelDateData,
        travelTime: travelTimeData,
        comments: commentsData
    }];
});

//Send to JSON
JSON.stringify(datasTransportDemands);