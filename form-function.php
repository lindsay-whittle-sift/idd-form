<?php

//** Cardnumber function. parse_card_details;
//** replace any spaces with no spaces,
//** replace any hyphens with no spaces,
//** split the cardnumber string into chunks of 4 with hyphens,
//** remove the last hyphen of the cardnumber so it ends with a number,
//** return the Cardnumber
function parse_card_details($cardnumber){
  $cardnumber = str_replace(" ", "", $cardnumber);
  $cardnumber = str_replace("-", "", $cardnumber); 
  $cardnumber = chunk_split($cardnumber,4,"-");
  $cardnumber = substr($cardnumber, 0, -1);
  return $cardnumber;
}

?>