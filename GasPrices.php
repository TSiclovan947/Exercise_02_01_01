<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha Siclovan
         Date: September 18, 2018
        
         GasPrices.php
           
     -->
    <title>Gas Prices</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>
    <?php 
    //Variable $gasPrice with value between 2 and 3
    //$gasPrice = 2.57;
    $gasPrice = rand(1, 6);
        //if ($gasPrice >= 2) {
        //      if ($gasPrice <= 3) {
        //          echo "<p>Gas Prices are between $2.00 and $3.00.</p>";
        //      }
        //  }
    
    //A max (3) and min(2) variable
    $max = 3;
    $min = 2;
    //If statement to display text if the gas price is between 2 and 3
    if (($min <= $gasPrice) && ($gasPrice <= $max)) {
        echo "<p>Gas Prices are $$gasPrice.00 dollars a gallon which is between $2.00 and $3.00.</p>";
    }
    else { //Else if not between 2 and 3
        echo "<p>Gas Prices are $$gasPrice.00 dollars a gallon which is not between $2.00 and $3.00.</p>";
    }
    ?>
</body>

</html>
