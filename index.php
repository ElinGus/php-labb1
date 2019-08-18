<?php session_start(); ?>
<?php require("functions.php") ?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Labb 1 - Biobokning</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="booking">
    <?php
      if(isset($_POST['isSubmit']) && $_POST['isSubmit'] == 1) {
        $movie = $_POST['movies'];
        $age = $_POST['ages'];
        $ticket = $_POST['ticket'];
        $parent = $_POST['parent'];
        $isSubmit = 1;
        message($movie,$age,$parent);

      }else {
        $movie = "";
        $age = "";
        $ticket = "";
        $parent = "";
        $isSubmit = 0;
      }
      
      if($isSubmit == 1) {
      }else{  
      ?>
    </div>
    
    <form class="bookingTickets" action="index.php" method="post">
      <h1>Boka biobiljett</h1>
      <input type="hidden" name="isSubmit" value="1">
      <p>Välj film:</p>
      <select class="movies" name="movies">
        <option value="Flyg, sa Alfons Åberg">Flyg, sa Alfons Åberg</option>
        <option value="Captain Marvel">Captain Marvel</option>
        <option value="Escape Room">Escape Room</option>
      </select>
      
      <p>Ålder:</p>
      <input type="text" name="ages" value="" placeholder="Skriv in din ålder">
      <p>Följer målsman med?:</p>
       <select class="parent" name="parent">
         <option value="Ja">Ja</option>
         <option value="Nej">Nej</option>
       </select>
        
      <p>Antal biljetter:</p>      
      <select class="ticket" name="ticket">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <p>Biljettpris: 100 kr</p>
      <br>
      <input type="submit" name="booking" value="Boka biljetter">
      <div class="logout">
        <p><a href="logout.php">Logga ut</a></p>
      </div>
    </form>
    <?php } ?>
    <div class="logout">
      <p><a href="logout.php">Logga ut</a></p>
    </div>
  </body>
</html>