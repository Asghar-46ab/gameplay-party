<?php include '/partials/header.php';?>
<div class="row">
  <div id="sliderHome" class="col-12">
    <img class="mySlides" src="../images/sliderImage1.jpg">
    <img class="mySlides" src="../images/sliderImage2.jpg">
    <img class="mySlides" src="../images/sliderImage3.jpg">

    <div class="col-12 sliderButtonDiv">
      <span class="sliderButton" onclick="changeSlide(1)"></span>
      <span class="sliderButton" onclick="changeSlide(2)"></span>
      <span class="sliderButton" onclick="changeSlide(3)"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
    <h3 class="col-12">Home</h3>
    <span class="col-12">Informatie over het bedrijf, Wat wij doen en waar wij voor staan.</span>
  </div>
  <div class="col-3"></div>
</div>
<span id="inlogPageCheck"></span>
<?php include '/partials/footer.php';?>
