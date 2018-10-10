<?php include 'view/partials/header.php';?>
<div class="row">
  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
  </div>
  <div class="col-3"></div>
</div>


  <div class="col-3"></div>
  <div id="informatieHome" class="col-6">
    <h3 class="col-12">Login Formulier</h3>
    <span class="col-12"><div class="container">
    <form action="/action_page.php">

  <div class="container">
    <label for="uname"><b>Gebruikersnaam</b></label>
    <input type="text" placeholder="Gebruikers Naam" name="uname" required>

    <label for="psw"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Wachtwoord" name="psw" required>
        
    <button type="submit">Inloggen</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Account Onthouden
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>
</div></span>
  </div>
  <div class="col-3"></div>
</div>
<span id="inlogPageCheck"></span>
<?php include 'view/partials/footer.php';?>
