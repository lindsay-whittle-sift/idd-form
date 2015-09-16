<?php
include('form-function.php');

// If form is not empty, once submitted, print the following;

if(!empty($_POST['submit'])){

    // Firstname
    $fname = $_POST['fname'];
    // if fname is not empty print Name: $fname
    if(!empty($fname)){
      echo "Name: " . $fname . '<br />';
    }
    // if name is empty print 'Your name is required'
      if(empty($fname)){
        echo "Your name is a required field<br>";
      }

    // Surname
    $sname = $_POST['sname'];
    // if sname is not empty print Surname: $sname
    if(!empty($sname)){
      echo "Surname: " . $sname . '<br />';
    }
    // if sname is empty print 'Your name is required'
      if(empty($sname)){
      echo "Your surname is a required field<br>";
    }

    // Cardnumber
    $cardnumber = $_POST['cardnumber'];
    // if cardnumber is not empty print Cardnumber: $cardnumber using the funciton parse_card_details to call the settings further down the page.**
    if(!empty($cardnumber)){
      echo "Cardnumber: " . parse_card_details($cardnumber) . '<br>';
    }
    // if cardnumber is empty print 'Your cardnumber is required'
      if(empty($cardnumber)){
      echo "Your cardnumber is a required field<br>";
    }

    // Issue month
    $issuemonth = $_POST['issuemonth'];
    // if the issue month is not empty print Issue month: $issuemonth
    if(!empty($issuemonth)){
      echo "Issue month: " . $issuemonth . '<br>';
    }
    // if issue month is empty print 'Issue month is required'
      if(empty($issuemonth)){
      echo "The issue month is a required field<br>";
    }

    // Issue year
    $issueyear = $_POST['issueyear'];
    // if issue year is not empty print 'Issue year: $issueyear'
    if(!empty($issueyear)){
      echo "Issue year: " . $issueyear . '<br>';
    }
    // if issue year is empty print 'Issue year is required'
    if(empty($issueyear)){
      echo "The issue year is a required field<br>";
    }

    // Expiry month
    $expmonth = $_POST['expmonth'];
      // if expiry month is not empty print 'Expiry month: $expmonth'
    if(!empty($expmonth)){
      echo "Expiry month: " . $expmonth . '<br>';
    }
      // if expiry month is empty print 'Expiry month is required'
    if(empty($expmonth)){
      echo "The expiry month is a required field<br>";
    }

    // Expiry year
    $expyear = $_POST['expyear'];
    if(!empty($expyear)){
      // if expiry year is not empty print 'Expiry year: $expyear'
      echo "Expiry year: " . $expyear . '<br>';
    }
      // if expiry year is empty print 'Expiry year is required'
    if(empty($expyear)){
      echo "The expiry year is a required field<br>";
    }

    // Security number
    $security = $_POST['security'];
    // if security number is not empty print 'Security number: $security'
    if(!empty($security)){
      echo "Security number: " . $security . '<br>';
    }
      // if security number is empty print 'Security number is required'
    if(empty($security)){
      echo "Your security number is a required field<br>";
    }

    //echo parse_card_details($input);
  }



// Start of Credit card form HTML
?>
<html>
   <head>
      <title>Form!</title>
      <!-- link to html style sheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <!-- Start of html form -->
   <body class="container" style="line-height:26px;">
      <div id="form-border">
         <form action="index.php" method="POST">
            <h3><strong>Complete credit card details</strong></h3>
            <h4>First name</h4>
            <!-- Enter first name -->
            <input type="text" name="fname" value="" class="box" placeholder="First name">
            <h4>Second name</h4>
            <!-- Enter second name -->
            <input type="text" name="sname" value="" class="box" placeholder="Second name">
            <h4>Card number</h4>
            <!-- Enter cardnumber -->
            <input type="text" name="cardnumber" value="" class="box" placeholder="Card Number">
            <div>
               <div class="issue_date">
                  <label for="ccMonth">
                     <h4>Issue date</h4>
                  </label>
                  <!-- Enter issue month -->
                  <select name="issuemonth">
                    <option value="" name="issuemonth"selected="selected"> </option>
                     <option value="Jan" name="issuemonth">01</option>
                     <option value="Feb" name="issuemonth">02</option>
                     <option value="Mar" name="issuemonth">03</option>
                     <option value="Apr" name="issuemonth">04</option>
                     <option value="May" name="issuemonth">05</option>
                     <option value="Jun" name="issuemonth">06</option>
                     <option value="Jul" name="issuemonth">07</option>
                     <option value="Aug" name="issuemonth">08</option>
                     <option value="Sep" name="issuemonth">09</option>
                     <option value="Oct" name="issuemonth">10</option>
                     <option value="Nov" name="issuemonth">11</option>
                     <option value="Dec" name="issuemonth">12</option>
                  </select>
               </div>
               <br>
               <div class="issue_date">
                <!-- Enter issue year -->
                  <select name="issueyear">
                     <option value="" name="issueyear" selected="selected"> </option>
                     <option value="2015" name="issueyear">2015</option>
                     <option value="2016" name="issueyear">2014</option>
                     <option value="2017" name="issueyear">2013</option>
                     <option value="2018" name="issueyear">2012</option>
                     <option value="2019" name="issueyear">2011</option>
                     <option value="2020" name="issueyear">2010</option>
                     <option value="2021" name="issueyear">2009</option>
                     <option value="2022" name="issueyear">2008</option>
                     <option value="2023" name="issueyear">2007</option>
                     <option value="2024" name="issueyear">2006</option>
                     <option value="2025" name="issueyear">2005</option>
                     <option value="2026" name="issueyear">2004</option>
                     <option value="2027" name="issueyear">2003</option>
                     <option value="2028" name="issueyear">2002</option>
                     <option value="2029" name="issueyear">2001</option>
                     <option value="2030" name="issueyear">2000</option>
                     <option value="2031" name="issueyear">1999</option>
                     <option value="2032" name="issueyear">1998</option>
                     <option value="2033" name="issueyear">1997</option>
                     <option value="2034" name="issueyear">1996</option>
                     <option value="2035" name="issueyear">1995</option>
                  </select>
               </div>
            </div>
            <div class="expiry_date">
               <div>
                  <label for="ccMonth">
                     <h4>Expiration date</h4>
                  </label>
                  <!-- Enter expiry month -->
                  <select id="ccMonth" name="expmonth">
                     <option value="" name="expmonth" selected="selected"> </option>
                     <option value="Jan" name="expmonth">01</option>
                     <option value="Feb" name="expmonth">02</option>
                     <option value="Mar" name="expmonth">03</option>
                     <option value="Apr" name="expmonth">04</option>
                     <option value="May" name="expmonth">05</option>
                     <option value="Jun" name="expmonth">06</option>
                     <option value="Jul" name="expmonth">07</option>
                     <option value="Aug" name="expmonth">08</option>
                     <option value="Sep" name="expmonth">09</option>
                     <option value="Oct" name="expmonth">10</option>
                     <option value="Nov" name="expmonth">11</option>
                     <option value="Dec" name="expmonth">12</option>
                  </select>
               </div>
                  <br>
                  <div>
                     <select id="ccYear" name="expyear">
                      <!-- Enter expiry year -->
                      <option value="" name="expyear" selected="selected"> </option>
                        <option value="2015" name="expyear">2015</option>
                        <option value="2016" name="expyear">2016</option>
                        <option value="2017" name="expyear">2017</option>
                        <option value="2018" name="expyear">2018</option>
                        <option value="2019" name="expyear">2019</option>
                        <option value="2020" name="expyear">2020</option>
                        <option value="2021" name="expyear">2021</option>
                        <option value="2022" name="expyear">2022</option>
                        <option value="2023" name="expyear">2023</option>
                        <option value="2024" name="expyear">2024</option>
                        <option value="2025" name="expyear">2025</option>
                        <option value="2026" name="expyear">2026</option>
                        <option value="2027" name="expyear">2027</option>
                        <option value="2028" name="expyear">2028</option>
                        <option value="2029" name="expyear">2029</option>
                        <option value="2030" name="expyear">2030</option>
                        <option value="2031" name="expyear">2031</option>
                        <option value="2032" name="expyear">2032</option>
                        <option value="2033" name="expyear">2033</option>
                        <option value="2034" name="expyear">2034</option>
                        <option value="2035" name="expyear">2035</option>
                     </select>
                  </div>
               </div>
            <div class="cvc">
               <h4>Security code (cvc)</h4>
               <!-- Enter security code -->
               <input type="text" name="security" value="" class="box">
            </div>
            <br>
            <div>
              <!-- Submit form -->
               <input type="submit" name="submit" value="submit">   
            </div>
         </form>
      </div>
   </body>
   <!-- End of html form -->
</html>