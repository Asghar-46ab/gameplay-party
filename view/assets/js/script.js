//eerste slideNummer//
var slideNummer = 0;
var timeOut;
//roept de slider functie aan//
slider();

function slider()
{
  //lege variabel voor de for loop//
  var i;
  //haalt aantal slides op en zet ze in een NodeList//
  var nodeListSlides = document.getElementsByClassName("mySlides");
  //maakt slides in onzichtbaar, css {display: none}//
  for (i = 0; i < nodeListSlides.length; i++)
  {
    nodeListSlides[i].style.display = "none";
  }


  //verhoogt de huidige slideNummer met 1//
  slideNummer++;
  //checkt wanneer laatste slide is en reset hem//
  if (slideNummer > nodeListSlides.length)
  {
    slideNummer = 1;
  }
  //maakt de huidige slide zichtbaar//
  nodeListSlides[slideNummer-1].style.display = "block";
  //hoe snel de slider veranderd//
  timeOut = setTimeout(slider, 4000);
}

function changeSlide(huidigeSlide)
{
  clearTimeout(timeOut);
  slideNummer = huidigeSlide-1;
  slider();
}
