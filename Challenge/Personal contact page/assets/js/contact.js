//Send values to PHP file
//Display "mail send"

//function to check empty fields
function checkEmpty() {
    let i = 0;
    document.querySelectorAll('.form').forEach((e) => {
        document.getElementById(e.id).checkValidity();
        document.getElementById(e.id).reportValidity();

        if (document.getElementById(e.id).checkValidity() === false) {
            i++;
        }
    })
    if (i > 0) {
        return false;
    }
    return true;
}

//listener on submit button with check for empty fields
submit.addEventListener('click', (e) => {
    e.preventDefault();
    const values = {
        company: document.getElementById('company').value,
        email: document.getElementById('email').value,
        firstname: document.getElementById('firstname').value,
        lastname: document.getElementById('lastname').value,
        gender: document.getElementById('gender').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value,
    }
    let isCompleted = checkEmpty();
    if (isCompleted) {
        fetch('./assets/php/contact.php', { cache: 'reload', method: 'POST', body: JSON.stringify(values) })
            .then(response => response.json())
            .then(jsonFormValuesSanitized => {
                if (jsonFormValuesSanitized.company.length < 2) {
                    document.getElementById('company').style.border = '1px red solid';
                    document.getElementById('companyWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('companyWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.firstname.length < 2) {
                    document.getElementById('firstname').style.border = '1px red solid';
                    document.getElementById('firstnameWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('firstnameWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.lastname.length < 2) {
                    document.getElementById('lastname').style.border = '1px red solid';
                    document.getElementById('lastnameWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('lastnameWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.email === false) {
                    document.getElementById('email').style.border = '1px red solid';
                    document.getElementById('emailWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('emailWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.gender === false) {
                    document.getElementById('gender').style.border = '1px red solid';
                    document.getElementById('genderWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('genderWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.subject === false) {
                    document.getElementById('subject').style.border = '1px red solid';
                    document.getElementById('subjectWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('subjectWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.message.length < 20) {
                    document.getElementById('message').style.border = '1px red solid';
                    document.getElementById('messageWrong').style.display = "flex";
                    setTimeout(() => {
                        document.getElementById('messageWrong').style.display = "none";
                    }, 5000);
                }
                if (jsonFormValuesSanitized.company !== "" && jsonFormValuesSanitized.email !== false && jsonFormValuesSanitized.firstname !== "" && jsonFormValuesSanitized.lastname !== ""
                    && jsonFormValuesSanitized.gender !== false && jsonFormValuesSanitized.subject !== false && jsonFormValuesSanitized.message !== "") {
                    document.getElementById('submit').value = "Message submitted";
                    document.getElementById('submit').disabled = true;
                    fetch('./assets/php/Phpmailer.php', { cache: 'reload', method: 'POST', body: JSON.stringify(values) })
                        .then(response => response.text())
                        .then(completed => {
                            console.log(completed)
                            if (completed === 'message send') {
                                document.querySelector('.contact-container').style.display = 'none';
                                document.querySelector('.form-container').style.display = 'none';
                                document.querySelector('.header').style.display = 'none';
                                document.querySelector('.mail-sent').style.display = 'flex';
                                document.querySelector('.mail-sent').style.flexDirection = 'column';
                                document.querySelector('.mail-sent').style.alignItems = 'center';
                                document.querySelector('.mail-sent').style.justifyContent = 'center';
                                document.querySelector('.mail-sent').style.fontSize = '1.3rem';
                                document.querySelector('.mail-sent').style.display = 'flex';
                                document.querySelector('.mail-sent').style.fontFamily = 'Genos, sans-serif';
                            }
                        })
                }
                else {
                    console.log('ERROR')
                    return;
                }
            })
    }

})
