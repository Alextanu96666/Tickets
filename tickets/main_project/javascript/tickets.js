document.addEventListener("DOMContentLoaded", function(){
var button = document.getElementById("loadCookiebtn");
console.log(button);

});

function saveTickets() {
    localStorage.eventname = document.getElementById('event').innerText;
    localStorage.fname = document.getElementById("first").value;
    localStorage.lname = document.getElementById("last").value;
    localStorage.quant = document.getElementById("quantity_input").value;
  //  window.location.href = 'varukorg.php';
    console.log(localStorage.eventname);
    
}

function loadCookie() {
    console.log('hhh');
    document.getElementById("first").value = localStorage.fname;
    document.getElementById("last").value = localStorage.lname;
    document.getElementById("quantity_input").value = localStorage.quant;
}

