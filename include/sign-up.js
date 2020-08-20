/* Regex variables- global, used in any function */	
var emailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
var passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
var clickCount = 0;

/* Generic function to reset before running validations, on second click of submit */
function clickCheck() {
    if (clickCount == 1) {
        document.getElementById("emailLabel").innerHTML = document.getElementById("emailLabel").innerHTML = "Email";
        document.getElementById("nameLabel").innerHTML = document.getElementById("nameLabel").innerHTML = "Phone";
        document.getElementById("password1Label").innerHTML = document.getElementById("password1Label").innerHTML = "Password";
        document.getElementById("password2Label").innerHTML = document.getElementById("password2Label").innerHTML = "Confirm  Password";
        clickCount = 0;
    }
};

/* Generic function to validate. Pass in a regex, a string to test and an id name to change the HTML of. */					
function validation(regex, string, idName) {
    var result = regex.test(string);
    if (result == true) {
        document.getElementById(idName).innerHTML = document.getElementById(idName).innerHTML +' <i style="color:green" class="far fa-check-circle"></i>';
    }
    else {
        document.getElementById(idName).innerHTML = document.getElementById(idName).innerHTML +' <i style="color:red" class="far fa-times-circle"></i>'; 
    }
    
    };
    
/* Generic function to check whether passwords match. Not sure if better to just include in onclick function since it only occurs once, but would make 
it more messy. */
function passMatch(pass1, pass2) {
    if (pass1 === pass2) {
        document.getElementById("password2Label").innerHTML = document.getElementById("password2Label").innerHTML +' <i style="color:green" class="far fa-check-circle"></i>';
    }
    else {
        document.getElementById("password2Label").innerHTML = document.getElementById("password2Label").innerHTML +' <i style="color:red" class="far fa-times-circle"></i>';
    }
};

/* Generic function to hide or show password. Icon changes.*/
var icons = document.querySelectorAll(".icon-class");
var showPass = function() {
    var passId = "password"+this.id;
    if (document.getElementById(passId).type === "password") {
        document.getElementById(passId).type = "text";
        document.getElementById(this.id).className = "fas fa-eye-slash icon-class";
    }
    else {
        document.getElementById(passId).type = "password";
        document.getElementById(this.id).className = "far fa-eye icon-class";
    }	
}

for (let i=0; i<icons.length; i++) {
    icons[i].addEventListener("click", showPass);
    }
	

/* When the button is pressed, all previous icons are removed, multiple variables are created from the inputted text. 
Validation function is called for each input and passwords are checked for a match. */ 	
document.getElementById("submitButton").onclick = function() {
    clickCheck();
    var emailString = document.getElementById("emailInput").value;
    var passString = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    validation(emailRegex, emailString, "emailLabel");
    validation(passRegex, passString, "password1Label");
    passMatch(passString, password2);
    clickCount++;				
    };