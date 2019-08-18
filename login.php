<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Logga in</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <form class="login" action="checklogin.php" method="post"> 
    <h1>Logga in</h1> 
    <label><p>Användare:</p></label>
    <p><input type="text" name="txtUser"></p>
    <label><p>Lösenord:</p></label>
      <p><input type="password" name="txtPassword"></p>
      <p><input type="submit" name="submit" value="Logga in"></p>
  </form>

</body>
</html>