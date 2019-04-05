function myPortfolio() {
    nameValidation();
    phoneValidation();
    emailValidation();
}
function nameValidation() {
    var name =  document.getElementById("name").value;
    if(name.length > 30 || name == ""){
        alert('Input must not be more than 30 or empty');
     }
}
function emailValidation() {
    var email = document.getElementById('email').value;
    var atChar = email.indexOf('@');
    var dotChar = email.lastIndexOf('.');
    if((atChar == -1 || dotChar == -1) ||(atChar < 1 || dotChar < 1)){
        alert('Please enter a valid email');
    }
}

function phoneValidation() {
    var phoneNos =  document.getElementById("phone").value;
    if (!(phoneNos.length == 11)){
        alert('Input must be a number or must equal 11 digit ');
    }
}