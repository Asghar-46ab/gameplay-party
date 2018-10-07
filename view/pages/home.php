<?php include '../partials/header.php';?>
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
    <h3>Home</h3>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
  <div class="col-3"></div>
</div>
<span id="homepageCheck"></span>
<?php include '../partials/footer.php';?>
