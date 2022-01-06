// fetching datas


// Create xhr object
let xhr = new XMLHttpRequest;
let quote = document.getElementById("quote");
let author = document.getElementById("name");
let gender = document.getElementById("gender");
let photo = document.getElementById("photo");
let link = document.getElementById("permalink");
let numQuote = document.getElementById("numQuote");
let str = ""
let parse = "";
//Open function

xhr.open("GET", "https://thatsthespir.it/api", true)

//Call the onload

xhr.onload = function () {

    //return response into JSON 
    parse = JSON.parse(this.responseText);

    // 200 means everything is ok; 403 means FORBIDDEN; 404 means ERROR
    if (this.status === 200) {
        quote.innerHTML = parse.quote;
        author.innerHTML = "Author name : " + parse.author;
        gender.innerHTML = " Author gender : " + parse.gender;
        photo.src = parse.photo;
        permalink.href = parse.permalink;
        numQuote.innerHTML = "Quotes from this author : " + parse.total_quotes;
    }

}
// Send 
xhr.send()

//accessing JSON data
/* data = JSON.parse(this.response);
if (request.status >= 200 && request.status < 400) {
    document.getElementById('test').innerHTML = data.CreatedBy;
} */