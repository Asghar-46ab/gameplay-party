<?php 	include 'view/partials/header.php';?>

<h1>bioscopen Aanmaken</h1>

<form method="post" action="" >

    <label for="naam">Bioscoop naam</label>
    <input type="text"  name="naam" ><br/>

    <label for="strat">Straat</label>
    <input type="text"  name="strat" ><br/>

    <label for="postcode">Postcode</label>
    <input type="text"  name="postcode" ><br/>

    <label for="stad">Stad</label>
    <input type="text"  name="stad" ><br/>

    <label for="provincie">Provincie</label>
    <input type="text"  name="provincie" ><br/>

    <label for="begintijd">Begintijd</label>
    <input type="date"  name="begintijd" ><br/>

    <label for="eindtijd">Eindtijd</label>
    <input type="date"  name="eindtijd" ><br/>

    <label for="bereikbaarauto">Bereikbaar auto</label>
    <input type="text"  name="bereikbaarauto" ><br/>

    <label for="bereikbaarov">Bereikbaar ov</label>
    <input type="text"  name="bereikbaarov" ><br/>

    <label for="bereikbaarfiets">Bereikbaar fiets</label>
    <input type="text"  name="bereikbaarfiets" ><br/>

    <label for="rolstoeltoegankelijkheid">Rolstoel toegankelijkheid</label>
    <input type="number"  name="rolstoeltoegankelijkheid" ><br/>

    <label for="voorwaarden">Voorwaarden</label>
    <input type="text"  name="voorwaarden" ><br/>

    <input type="submit" value="Creat" name="create">
</form>

<?php include 'view/partials/footer.php'; ?>