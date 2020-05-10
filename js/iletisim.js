$('.navbar-toggler').on('click', function() {

    $(this).toggleClass('menu-open');
})

function validation() {

    var name = document.forms["contact-form"]["name"].value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message").value;
    var text;

    error_message.style.padding = "10px";

    if (name.lenght < 5) {
        text = "please enter valid name";
        error_message.innerHTML = text;
        return false;
    }
    if (email.indexOf("@") == -1 || email.lenght < 6) {
        text = "please enter valid email";
        error_message.innerHTML = text;
        return false;
    }
    if (isNaN(phone) || phone.lenght != 10) {
        text = "please enter valid phone number";
        error_message.innerHTML = text;
        return false;
    }
    if (message.lenght <= 150) {
        text = "please enter more than 150 characters";
        error_message.innerHTML = text;
        return false;
    }
    alert("Form submitted succesfully");

    return true;


}