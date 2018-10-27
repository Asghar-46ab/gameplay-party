<?php 	include 'view/partials/header.php';?>
<head>
    <style>
        input[type=number] {
            width: 100% !important;
            padding: 12px 20px !important;
            margin: 8px 0 !important;
            display: inline-block !important;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            box-sizing: border-box !important;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


    </style>
</head>
    <h1 style="text-align: center">bioscopen Aanmaken</h1>
    <div class="col-2">


        <div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:70px; height: 145px; background-color: #46a530 !important;">
            <a href="/Cinema/CreateCinema" class="w3-bar-item w3-button"><i class="fas fa-film"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fas fa-edit"></i></a>
        </div>

    </div>

    <form method="post" action="" >


        <div class="formcontent col-8">
            <label for="fname">Bioscoop Naam</label>
            <input type="text" id="fname" name="cinema_name">
            <label for="fname">URL Naam</label>
            <input type="text" id="fname" name="info_url" >
            <label for="fname">Straat Naam</label>
            <input type="text" id="fname" name="street" >

            <label for="fname">Huisnummer</label>
            <input type="number" id="fname" name="house_number" >

            <label for="fname">Postcode</label>
            <input type="text" id="fname" name="postal_code" >

            <label for="fname">stad</label>
            <input type="text" id="fname" name="city" >

            <label for="fname">provincie</label>
            <input type="text" id="fname" name="state" >

            <label for="fname">Auto bereikbaarheid</label>
            <input type="text" id="fname" name="car_accessibility" >

            <label for="fname">OV bereikbaarheid</label>
            <input type="text" id="fname" name="ov_accessibility" >

            <label for="fname">Fiets bereikbaarheid</label>
            <input type="text" id="fname" name="bike_accessibility" >

            <label for="fname">Rolstoeltoegankelijkheid</label>
            <input type="number" id="fname" name="wheelchair_accessibility" >

            <label for="fname">bioscoop voorwaarden</label>
            <input type="text" id="fname" name="cinema_conditions" >

            <input type="submit"  name="createsubmit" value="aanmaken">



        </div>

        <div class="col-2"></div>
    </form>

<?php include 'view/partials/footer.php'; ?>
