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
    <h3 class="col-12">Login Formulier</h3>
    <span class="col-12"><div class="container">
    <form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div></span>
  </div>
  <div class="col-3"></div>
</div>
<span id="contactPageCheck"></span>
<?php include 'view/partials/footer.php';?>
