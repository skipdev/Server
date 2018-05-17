// functions to validate each entry box
function validateName() {
    var x = document.forms["contact"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    else { return true; }
}

function validateSurname() {
    var x = document.forms["contact"]["surname"].value;
    if (x == "") {
        alert("Surname must be filled out");
        return false;
    }
    else { return true; }
}

function validateEmail() {
    var x = document.forms["contact"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    else if (x.indexOf('@') <=0) {
        alert("Not a valid email format");
        return false;
    }
    else if (x.indexOf('.') <=0) {
        alert("Not a valid email format");
        return false;
    }
    else { return true; }
}

function validateMessage() {
    var x = document.forms["contact"]["message"].value;
    if (x == "") {
        alert("Message must be filled out");
        return false;
    }
    else { return true; }
}

// when the submit button is clicked, this function checks that everything is validated
function validate() {
    if (validateName() == true & validateSurname() == true & validateEmail() == true & validateMessage() == true) {
    alert("Submitted!");
    window.location.reload();
    }
}

// functions that make the inputs red when the user clicks off
// also validates with a green tick / red cross
function blurName() {
    document.getElementById("name").style.backgroundColor = "red";
    var x = document.forms["contact"]["name"].value;
    if (x !== "") {
        document.getElementById("name").style.backgroundColor = "";
        document.getElementById("name_cross").style.display = "none";
        document.getElementById("name_tick").style.display = "inline";
    }
}

function blurSurname() {
    document.getElementById("surname").style.backgroundColor = "red";
    var x = document.forms["contact"]["surname"].value;
    if (x !== "") {
        document.getElementById("surname").style.backgroundColor = "";
        document.getElementById("surname_cross").style.display = "none";
        document.getElementById("surname_tick").style.display = "inline";
    }
}

function blurEmail() {
    document.getElementById("email").style.backgroundColor = "red";
    var x = document.forms["contact"]["email"].value;
    if (x !== "") {
        if (x.indexOf('@') >=1) {
            if (x.indexOf('.') >=1) {
                document.getElementById("email").style.backgroundColor = "";
                document.getElementById("email_cross").style.display = "none";
                document.getElementById("email_tick").style.display = "inline";
            }
        }
    }
}

function blurPhone() {
    var x = document.forms["contact"]["phone"].value;
    if (x.value.match(/^[0-9]+$/)) {
        document.getElementById("phone_tick").style.display = "inline";
    }
}

function blurMessage() {
    document.getElementById("message").style.backgroundColor = "red"; 
    var x = document.forms["contact"]["message"].value;
    if (x !== "") {
        document.getElementById("message").style.backgroundColor = "";
        document.getElementById("message_cross").style.display = "none";
        document.getElementById("message_tick").style.display = "inline";
    }
}