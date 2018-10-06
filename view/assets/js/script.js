var slideNummer = 0;
slider();

function slider()
{
  var i;
  var x = document.getElementsByClassName("mySlides");
  //maakt mySlides images display: none//
  for (i = 0; i < x.length; i++)
  {
    x[i].style.display = "none";
  }

  slideIndex++;
  if (slideNummer > x.length)
  {
    slideNummer = 1;
  }
  x[slideNummer-1].style.display = "block";

  //hoe snel de slider veranderd//
  setTimeout(slider, 4000);

}
