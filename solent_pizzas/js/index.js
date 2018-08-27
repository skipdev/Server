// carousel function - sets slide index to 1 - if the slide index goes over the amount of slides (3), it resets back to one
function slideJS(x) {
  var i;
  var slides = document.getElementsByClassName("slide");
  if (x > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  slides[slideIndex-1].style.display = "block"; 

  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  } 
  setTimeout(slideJS, 5000);
}