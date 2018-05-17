// when the image of the 'down' arrow below the logo is clicked, the menu will hide/show
function hideMenu() {
        var x = document.getElementById("nav");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
      }
      

// displays time in the footer
function time() {
var today = new Date();
var date = today.getDate();
var month = today.getMonth();
var year = (today.getYear() + 1900);
var hour = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();

if (date < 10) {date = "0" + date}
if (month < 10) {month = "0" + month}
if (hour < 10) {hour = "0" + hour}
if (minutes < 10) {minutes = "0" + minutes}
if (seconds < 10) {seconds = "0" + seconds}

var time = date + "/" + month + "/" + year + ", " + hour + ":" + minutes + ":" + seconds;
document.getElementById("time").innerText = "© 2018, Stephanie Barden. All rights reserved." + " " + time;
}

window.onload=function() {time()};
window.onload= function() {setInterval(time, 500);};

