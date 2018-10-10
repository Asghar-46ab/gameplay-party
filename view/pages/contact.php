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
    <h3 class="col-12">Contact Form</h3>
    <span class="col-12"><div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div></span>
  </div>
  <div class="col-3"></div>
</div>
<span id="contactPageCheck"></span>
<?php include 'view/partials/footer.php';?>
