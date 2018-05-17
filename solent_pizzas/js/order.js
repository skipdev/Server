// a function to define the variables
function define() {
 var small_base = document.getElementById("small_base");
 var med_base = document.getElementById("med_base");
 var large_base = document.getElementById("large_base");
 var x_large_base = document.getElementById("x_large_base");
 
 var cheese = document.getElementById("cheese");
 var ham = document.getElementById("ham");
 var mushrooms = document.getElementById("mushrooms");
 var anchovies = document.getElementById("anchovies");
 
 var chips = document.getElementById("chips");
 var garlic_bread = document.getElementById("garlic_bread");
}

// the order function shows the user what food they have chosen in real time
// located at the bottom left side of the page
function order(){
 
 define();
 var output = document.getElementById("output");
 var result = "<ul>"
 
 // finding out which checkboxes have been ticked by the user
 // adds results into a list
 if (small_base.checked){
  result += "<li>" + "Small - &pound;" + small_base.value + "</li>";
 } 
 if (med_base.checked){
  result += "<li>" + "Medium - &pound;" + med_base.value + "</li>";
 } 
 if (large_base.checked){
  result += "<li>" + "Large - &pound;" + large_base.value + "</li>";
 } 
 if (x_large_base.checked){
  result += "<li>" + "X-Large - &pound;" + x_large_base.value + "</li>";
 } 
 
 if (cheese.checked){
  result += "<li>" + "Cheese - &pound;0" + cheese.value + "</li>";
 } 
 if (ham.checked){
  result += "<li>" + "Ham - &pound;0" + ham.value + "</li>";
 } 
 if (mushrooms.checked){
  result += "<li>" + "Mushrooms - &pound;0" + mushrooms.value + "</li>";
 } 
 if (anchovies.checked){
  result += "<li>" + "Anchovies - &pound;0" + anchovies.value + "</li>";
 } 
 
 if (chips.checked){
  result += "<li>" + "Chips - &pound;" + chips.value + "</li>";
 } 
 if (garlic_bread.checked){
  result += "<li>" + "Garlic Bread - &pound;" + garlic_bread.value + "</li>";
 } 
 
 //outputs final result
 result += "</ul>"
 output.innerHTML = result;
} 
 
 
 // this function adds a live total under the order
function add_total(){
 
 var total = 0
 var result = 0;
 define();
 
 // finding out which checkboxes have been ticked by the user
 // adds the value of the product to the total
 if (small_base.checked){
  result += parseFloat(small_base.value);
 } 
 if (med_base.checked){
  result += parseFloat(med_base.value);
 } 
 if (large_base.checked){
  result += parseFloat(large_base.value);
 } 
 if (x_large_base.checked){
  result += parseFloat(x_large_base.value);
 } 
 
 if (cheese.checked){
  result += parseFloat(cheese.value);
 } 
 if (ham.checked){
  result += parseFloat(ham.value);
 } 
 if (mushrooms.checked){
  result += parseFloat(mushrooms.value);
 } 
 if (anchovies.checked){
  result += parseFloat(anchovies.value);
 } 
 
 if (chips.checked){
  result += parseFloat(chips.value);
 } 
 if (garlic_bread.checked){
  result += parseFloat(garlic_bread.value);
 } 
 
 // works out the total
 total = parseFloat(result);
 var output = document.getElementById("total");
 output.innerHTML = "&pound;" + Math.round(parseFloat(total) * 100) / 100;
 output.value = total;
}


//resets all checkboxes and text
function reset() {
 document.getElementById("small_base").checked = false;
 document.getElementById("med_base").checked = false;
 document.getElementById("large_base").checked = false;
 document.getElementById("x_large_base").checked = false;
 document.getElementById("cheese").checked = false;
 document.getElementById("ham").checked = false;
 document.getElementById("mushrooms").checked = false;
 document.getElementById("anchovies").checked = false;
 document.getElementById("chips").checked = false;
 document.getElementById("garlic_bread").checked = false;
 
 var output = document.getElementById("output");
 var result = "";
 output.innerHTML = result;
}


// checks to see if at least one base and topping have been selected
function check() {
 define();
 
 var error = document.getElementById("error");
 
 if ((small_base.checked == true || med_base.checked == true || large_base.checked == true || x_large_base.checked == true) && (cheese.checked == true || ham.checked == true || mushrooms.checked == true || anchovies.checked == true)){
   error.style.display = "none";
   alert("Submitted!");
   window.location.reload();
 }
 else {
  error.style.display = "block";
 }
}