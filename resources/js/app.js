import './bootstrap';

function logIn() {
    alert("You have logged in succesfully!");
    document.getElementById("login").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function openFormLogIn() {
    document.getElementById("login").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function closeFormLogIn() {
    document.getElementById("login").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

