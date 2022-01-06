let submitAction = () => {
    let firstName = document.getElementById("inputFirstName").value;
    let lastName = document.getElementById("inputFirstName").value;
    let email = document.getElementById("inputEmail").value;
    let subject = document.getElementById("selectSubjectOfTheMessage").value;
    let message = document.getElementById("message").value;

    if (firstName != "" && lastName != "" && email != "" && subject != "" && message != "") {
        alert("First name: " + firstName + "\n" + "Last name: " + lastName + "\n" + "Email: " + email + "\n" + "Subject: " + subject + "\n" + "Message: " + message);
    } else {
        alert("Something is missing!");
    }
}

window.addEventListener("DOMContentLoaded", () => {
    let submitButton = document.getElementById("submitButton");

    submitButton.addEventListener("click", (e) => {
        e.preventDefault();
    
        submitAction();
    })
});