<!DOCTYPE html>
<html lang="nl">

<head>

    <!-- algemeen style -->
    <link rel="stylesheet" type="text/css" href= '../view/assets/css/mainStyle.css'>
    <link rel="stylesheet" type="text/css" href=' ../view/assets/css/headerStyle.css'>
    <link rel="stylesheet" type="text/css" href=' ../view/assets/css/footerStyle.css'>
    <link rel="stylesheet" type="text/css" href=' ../view/assets/css/homePageStyle.css'>
    <!-- browser icon in tab -->
    <link rel="icon" href="../view/images/path1803.png">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Game Play Party</title>
</head>
<div class="row">
  <header class="col-12 logoGPP">
    <img src="../view/images/gpp.svg" alt="">
  </header>
</div>
<div class="row">
  <nav class="col-12 navBar">
    <li class="col-3 navButtons" id="navbarButtonHome" onclick="location.href='home.php'">Home</li>
    <li class="col-3 navButtons" id="navbarButtonBioscopen" onclick="location.href='home.php'">Bioscopen</li>
    <li class="col-3 navButtons" id="navbarButtonContact" onclick="location.href='home.php'">Contact</li>
    <li class="col-3 navButtons" id="navbarButtonInlog" onclick="location.href='home.php'">Inlog</li>
  </nav>
</div>
<body onload="checkCurrentPage()">
