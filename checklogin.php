<?php
// Startar upp sessionen
session_start();

// Användare och lösenord för sidan
$user = "Elin";
$pass = "123456";

// Hämtar användare och lösenord från formuläret
$checkUser = $_POST['txtUser'];
$checkPass = $_POST['txtPassword'];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Boka</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="checklogin">
  <?php
    if($checkUser == $user && $checkPass == $pass){
    	$_SESSION['status'] = "ok";
    	echo "<p>Du har loggat in, klicka på länken för att boka biljetter!</p>";
    	echo '<p><a href="index.php">Boka biljetter här.</a></p>';
    } else{
    	echo "<p>Du har inte fyllt i rätt användare och lösenord!</p>";
    	echo '<p><a href="login.php">Försök igen</a></p>';
    }
?>
  </div>
</body>
</html>