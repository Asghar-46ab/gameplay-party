
<?php include 'view/partials/header.php';?>
<div class="row">
  <div id="sliderHome" class="col-12">
    <img class="mySlides" src="/view/images/sliderImage1.jpg">
    <img class="mySlides" src="/view/images/sliderImage2.jpg">
    <img class="mySlides" src="/view/images/sliderImage3.jpg">

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
    <span class="col-12"><?php echo $content; ?></span>

  </div>
  <div class="col-3"></div>
</div>

<span id="homePageCheck"></span>
<?php include 'view/partials/footer.php';?>
