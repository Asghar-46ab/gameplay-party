//eerste slideNummer//
var slideNummer = 0;
//roept de slider functie aan//
slider();

function slider()
{
  //lege variabel voor de for loop//
  var i;
  //haalt aantal slides op en zet ze in een NodeList//
  var nodeListSlides = document.getElementsByClassName("mySlides");

  //maakt slides in css {display: none}//
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

  //maakt de vorige slide onzichtbaar//
  nodeListSlides[slideNummer-1].style.display = "block";

  //hoe snel de slider veranderd//
  setTimeout(slider, 4000);

}
