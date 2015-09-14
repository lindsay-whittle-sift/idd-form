<?php

  function remove_spaces($cardnumber){
    if(isset($cardnumber)){
      $cardnumber = str_replace(" ", "", $cardnumber);
      echo "Card test 1: " . $cardnumber; 
    }
  }


?>