<?php include 'view/partials/header.php';
// require_once "controller/bioscopen.php";
?>
<div class="row">
  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
    <h3 class="col-12">Bioscopen</h3>
    <span class="col-12">Dit zijn alle bioscopen waarmee wij samen werken.</span>
  </div>
  <div class="col-3"></div>
</div>
<div class="row">
  <?php echo $content;?>


  <div class="col-3">

  </div>
  <div class="col-3">

  </div>
  <div class="col-3">

  </div>
</div>
<div class="row">
  <div class="col-5"></div>
  <div class="col-2 paginering">
    <span class="paginaNummer">1</span>
    <span class="paginaNummer">2</span>
    <span class="paginaNummer">3</span>
    <span class="paginaNummer">4</span>
  </div>
  <div class="col-5"></div>
</div>
<span id="bioscoopPageCheck"></span>
<?php include 'view/partials/footer.php';?>
