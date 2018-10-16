// checkt de huidige pagina en veranderd de navbarButton //
// elke pagina heeft exist id <span id=""></span> nodig  //
function checkCurrentPage()
{
  var navbarButton;
  var pageCheckIdArray = ["homePageCheck", "bioscoopPageCheck", "contactPageCheck", "inlogPageCheck"];

  for (x = 0; x < pageCheckIdArray.length; x++)
  {
    pageCheckString = pageCheckIdArray[x];
    if (document.getElementById(pageCheckString) != null)
    {
      switch (pageCheckString)
      {

        case "homePageCheck":
          navbarButton = document.getElementById("navbarButtonHome");
          break;
        case "bioscoopPageCheck":
          navbarButton = document.getElementById("navbarButtonBioscopen");
          break;
        case "contactPageCheck":
          navbarButton = document.getElementById("navbarButtonContact");
          break;
        case "inlogPageCheck":
          navbarButton = document.getElementById("navbarButtonInlog");
          break;

      }
      navbarButton.style.backgroundColor = "#C4E538";
      navbarButton.style.color = "#009432";
      navbarButton.style.border = "1px solid #34495e";
    }
  }
}
