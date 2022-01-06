# Personal Contact Page

This project's purpose was to create our (*soon to be*) **portfolio's contact page**.

In order to do so I used these languages :

                1. HTML
                2. SCSS
                3. Javascript
                4. PHP
                    1. PhpMailer

On this page you'll be able to send me a mail to approach me for a Internship, a job or any other matter.
You also have the menu to navigate on the website (currently only the contact page is working), I'm also going to rework the footer at some point but that's not a priority.




## Techniques used

Build with a flexbox layout, the page is mostly responsive *(until 290px width)*.
I used a three steps validations for the form :

                1. Checked if there are one or more empty fields, if so, inform the user, if not send the input via fetch to a php file.
                2. Validated and sanitized the value in PHP and creating a new array with the input sanitized then sent them to JS.
                3. Checked if the values return by the PHP are correct, if so, sending them via a second fetch to Phpmailer, if not inform the user of their mistakes.

By doing so, I blocked possibilities to modifying values of the form and / or sending malevolent code.

## Deployment

The project is currently host and deploy at my **[personal website](https://www.freyling-aurelien.be/contact.html)** (*WIP !*)

## Contributors

A big thanks to SalukiMakingCode for his help with the PHP logic part and Saralalou for her help with the design and the ideas !

