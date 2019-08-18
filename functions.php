<?php  
// Skiver ut "kvitto" och kolla åldersgräns:
  function message($movie,$age,$parent){
    $movieAge = 0;
    if($parent == "Ja") {  
      $age = $age + 4;
    }
    if ($movie == "Flyg, sa Alfons Åberg") {
      $movieAge = 7;   
    } 
    
    if ($movie == "Captain Marvel") {
        $movieAge = 11;
      
    } 
    if ($movie == "Escape Room") {
        $movieAge = 15;
      
    } 
    if($age >= $movieAge){
      echo "<p><strong>Tack för din beställning!</strong></p>";
      echo "<br>";
      echo "<p>Du har bokat biljett till: <p>" . $movie;
      ticketQuantity($_POST['ticket']);
      
    }else{
      echo "<br>";
      echo "<p>Du får inte gå på filmen utan målsman.</p>";
    }
  }  
  
    
  // Visar antal köpta biljetter:
  function ticketQuantity($ticket){
    if($ticket == "1"){
        echo "<br>";
        echo "<br>";
        echo "Antal biljetter: " . $ticket . " st.";
    }
      elseif($ticket == "2") {
        echo "<br>";
        echo "<br>";
        echo "Antal biljetter: " . $ticket . " st.";
      }
      elseif($ticket == "3") {
        echo "<br>";
        echo "<br>";
        echo "Antal biljetter: " . $ticket . " st.";
      }  
      elseif($ticket == "4") {
        echo "<br>";
        echo "<br>";
        echo "Antal biljetter: " . $ticket . " st.";
      }  
      elseif($ticket == "5") {
        echo "<br>";
        echo "<br>";
        echo "Antal biljetter: " . $ticket . " st.";
      }    
  }
    
?>