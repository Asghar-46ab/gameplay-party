<?php 	include 'view/partials/header.php';?>

<h1>Login</h1>

<form method="post" action="" >
    <label for="username">username</label>
    <input type="text"  name="username" ><br/>
    <label for="passwoord">passwoord</label>
    <input type="passwoord"  name="passwoord" ><br/>
    <input type="submit" value="Login" name="login">
</form>

<?php include 'view/partials/footer.php'; ?>