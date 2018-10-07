// checkt de huidige pagina en veranderd de navbarButton //
// elke pagina heeft exist id <span id=""></span> nodig  //
function checkCurrentPage()
{
  var homepageExist = document.getElementById("homepageCheck")
  if (homepageExist)
  {
    navbarButtonHome = document.getElementById("navbarButtonHome");
    navbarButtonHome.style.backgroundColor = "#34495e";
    navbarButtonHome.style.color = "white";
  }
}
