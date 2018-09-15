<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 12, 2018
        
         HelloWorld.php
           
     -->
    <title>Interest Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Interest Array</h2>
    <?php 
    //An array to contains the values of the interest rates
    $ratesArray = array(".0725", ".0750", ".0775", ".0800", ".0825", ".0850", ".0875");
    
    //Prints the following statement
    echo "<p>The values of the interest rates are as follows:</p><p>";
    
    //Prints thevalues of the arrays 1-7
    echo "The value of interestRate1 is: $ratesArray[0]<br>";
    echo "The value of interestRate2 is: $ratesArray[1]<br>";
    echo "The value of interestRate3 is: $ratesArray[2]<br>";
    echo "The value of interestRate4 is: $ratesArray[3]<br>";
    echo "The value of interestRate5 is: $ratesArray[4]<br>";
    echo "The value of interestRate6 is: $ratesArray[5]<br>";
    echo "The value of interestRate7 is: $ratesArray[6]<br>";
    ?>
</body>

</html>
