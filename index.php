<?php
   
   $fnameerr = $snameerr = $cardnumbererr = $issuemontherr = $issueyeareer = $expmontherr = $expyearerr = $securityerr = "";
   $fname = $sname = $cardnumber = $issuemonth = $issueyear = $expmonth = $expyear = $security = "";

   $submission_status = FALSE;

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $submission_status = TRUE;

    if (empty($_POST["fname"])) {
      $fnameerr = "Id is required";
      $submission_status = FALSE;
    }

    if (empty($_POST["sname"])) {
      $snameerr = "Name is required";
      $submission_status = FALSE;
    }

    if (empty($_POST["cardnumber"])) {
      $cardnumbererr = "Year is required";
      $submission_status = FALSE;
    }

    if (empty($_POST["issuemonth"])) {
      $issuemontherr = "Director name is required";
      $submission_status = FALSE;
    }

      if($submission_status==TRUE){
      $fname = isset($_POST['fname']) ? $_POST['fname'] : null;
      $sname = isset($_POST['sname']) ? $_POST['sname'] : null;
      $cardnumber = isset($_POST['cardnumber']) ? $_POST['cardnumber'] : null;
      $issuemonth = isset($_POST['issuemonth']) ? $_POST['issuemonth'] : null;
      $issueyear = isset($_POST['issueyear']) ? $_POST['issueyear'] : null;
      $expmonth = isset($_POST['expmonth']) ? $_POST['expmonth'] : null;
      $expyear = isset($_POST['expyear']) ? $_POST['expyear'] : null;
      $security = isset($_POST['security']) ? $_POST['security'] : null;
   }
}

   /* If the content inputted has been entered into the credit card form, 
   if(isset($_POST['submit'])){
      $fname = isset($_POST['fname']) ? $_POST['fname'] : null;
      $sname = isset($_POST['sname']) ? $_POST['sname'] : null;
      $cardnumber = isset($_POST['cardnumber']) ? $_POST['cardnumber'] : null;
      $issuemonth = isset($_POST['issuemonth']) ? $_POST['issuemonth'] : null;
      $issueyear = isset($_POST['issueyear']) ? $_POST['issueyear'] : null;
      $expmonth = isset($_POST['expmonth']) ? $_POST['expmonth'] : null;
      $expyear = isset($_POST['expyear']) ? $_POST['expyear'] : null;
      $security = isset($_POST['security']) ? $_POST['security'] : null;

      // echo what the content that has been entered is.
      echo 'First name: ' . $fname . '<br>';
      echo 'Surname name: ' . $sname . '<br>';
      echo 'Issue month: ' . $issuemonth . '<br>';
      echo 'Issue year: ' . $issueyear . '<br>';
      echo 'Expiry month: ' . $expmonth . '<br>';
      echo 'Expiry year: ' . $expyear . '<br>';
      echo 'Security code: ' . $security . '<br>';


   // create a function to remove any spaces between the credit card numbers
   function remove_spaces($text){
      return str_replace(" ", "", $text);
   }

   // create a variable for function remove_spaces
   $cardnumber_break = remove_spaces($cardnumber);
   // var_dump($cardnumber_break);  //Check that the variable for the function is printing out the card number correctly.

   // create a variable to split the credit card numbers into 4 spaces
   $arr = str_split($cardnumber_break, 4);
   /* var_dump that the string,
   credit card number had been split into sections of four.
   //var_dump($arr);

   // create a variable and add a '-' in each of the spaces
   $dash_separated = implode("-", $arr);

   // echo the correctly formatted credit card number
   echo 'Card number: ' . $dash_separated;
}*/

?>
<html>
   <head>
      <title>Form!</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body class="container">
      <div id="form-border" class="mobile-padding">
         <form action="index.php" method="POST">
            <h3><strong>Complete credit card details</strong></h3>
            <h4>First name</h4>
            <input type="text" name="fname" value="<?php echo $fname;?>" class="box" placeholder="First name" style="color:#ffffff; padding-left:5px; font-size: 12px">
            <h4>Second name</h4>
            <input type="text" name="sname" value="<?php echo $sname;?>" class="box" placeholder="Second name" style="color:#ffffff; padding-left:5px; font-size: 12px;">
            <h4>Card number</h4>
            <input type="text" name="cardnumber" value="<?php echo $cardnumber;?>" class="box" placeholder="Card Number" style="color:#ffffff; padding-left:5px; font-size: 12px;">
            <div>
               <div class="issue_date">
                  <label for="ccMonth">
                     <h4>Issue date</h4>
                  </label>
                  <select name="issuemonth">
                     <option value="1" selected="selected">01</option>
                     <option value="2">02</option>
                     <option value="3">03</option>
                     <option value="4">04</option>
                     <option value="5">05</option>
                     <option value="6">06</option>
                     <option value="7">07</option>
                     <option value="8">08</option>
                     <option value="9">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                  </select>
               </div>
               <br></br>
               <div class="issue_date">
                  <select name="issueyear">
                     <option value="2015" selected="selected">2015</option>
                     <option value="2016">2014</option>
                     <option value="2017">2013</option>
                     <option value="2018">2012</option>
                     <option value="2019">2011</option>
                     <option value="2020">2010</option>
                     <option value="2021">2009</option>
                     <option value="2022">2008</option>
                     <option value="2023">2007</option>
                     <option value="2024">2006</option>
                     <option value="2025">2005</option>
                     <option value="2026">2004</option>
                     <option value="2027">2003</option>
                     <option value="2028">2002</option>
                     <option value="2029">2001</option>
                     <option value="2030">2000</option>
                     <option value="2031">1999</option>
                     <option value="2032">1998</option>
                     <option value="2033">1997</option>
                     <option value="2034">1996</option>
                     <option value="2035">1995</option>
                  </select>
               </div>
            </div>
            <div class="expiry_date">
               <div>
                  <label for="ccMonth">
                     <h4>Expiration date</h4>
                  </label>
                  <select id="ccMonth" name="expmonth">
                     <option value="1" selected="selected">01</option>
                     <option value="2">02</option>
                     <option value="3">03</option>
                     <option value="4">04</option>
                     <option value="5">05</option>
                     <option value="6">06</option>
                     <option value="7">07</option>
                     <option value="8">08</option>
                     <option value="9">09</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                  </select>
               </div>
                  <br></br>
                  <div>
                     <select id="ccYear" name="expyear">
                        <option value="2015" selected="selected">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                     </select>
                  </div>
               </div>
            <div class="cvc">
               <h4>Security code (cvc)</h4>
               <input type="text" name="security" value="<?php echo $security;?>" class="box" style="color:#ffffff; padding-left:5px; font-size: 12px">
            </div>
            <br>
            <div>
               <input type="submit" name="submit" value="submit">   
            </div>
         </form>
      </div>
   </body>
</html>