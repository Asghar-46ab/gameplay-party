// first slidenumber
var slideNummer = 0;
var timeOut;

slider();

function slider()
{
  // empty variable for looping
  var i;
  // gets all slide images and puts them in a NodeList
  var nodeListSlides = document.getElementsByClassName("mySlides");
  // gets all slide buttons and puts them in a NodeList
  var nodeListSlideButtons = document.getElementsByClassName("sliderButton");
  //this loop makes all slide images invisible with css {display: none}//
  for (i = 0; i < nodeListSlides.length; i++)
  {
    nodeListSlides[i].style.display = "none";
    nodeListSlideButtons[i].style.backgroundColor = "";
  }


  //up the slide number with +1//
  slideNummer++;
  //checks when the last slide comes up and sets the slidenumber to 1//
  if (slideNummer > nodeListSlides.length)
  {
    slideNummer = 1;
  }
  //makes the current slide images invisible and turns slide button to active//
  nodeListSlides[slideNummer-1].style.display = "block";
  nodeListSlideButtons[slideNummer-1].style.backgroundColor = "#34495e";
  //a timer how fast the slides changes//
  timeOut = setTimeout(slider, 5000);
}
// changeSlide() checks for the corresponding button with the image and changes the slide.
// it also resets the automatic timer of changing the slide image
function changeSlide(huidigeSlide)
{
  clearTimeout(timeOut);
  slideNummer = huidigeSlide-1;
  slider();
}
