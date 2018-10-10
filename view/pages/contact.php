<?php include 'view/partials/header.php';?>
<div class="row">
  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
    <h3 class="col-12">Contact Pagina</h3>
    <span class="col-12">Informatie over het bedrijf, Wat wij doen en waar wij voor staan.</span>
  </div>
  <div class="col-3"></div>
</div>


  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
    <h3 class="col-12">Contact Formulier</h3>
    <span class="col-12"><div class="container">
  <form action="/action_page.php">
    <label for="fname">Voornaam</label>
    <input type="text" id="fname" name="firstname" placeholder="Voornaam">

    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lastname" placeholder="Achternaam">

    <label for="subject">Bericht</label>
    <textarea id="subject" name="subject" placeholder="Jouw Bericht" style="height:200px"></textarea>

    <input type="submit" value="Verzenden">
  </form>
</div></span>
  </div>
  <div class="col-3"></div>
</div>
<span id="contactPageCheck"></span>
<?php include 'view/partials/footer.php';?>
