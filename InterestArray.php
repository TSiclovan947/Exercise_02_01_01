<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
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
    $interestRate1 = .0725;
    $interestRate2 = .0750;
    $interestRate3 = .0775;
    $interestRate4 = .0800;
    $interestRate5 = .0825;
    $interestRate6 = .0850;
    $interestRate7 = .0875;
    
    //$ratesArray = array(".0725", ".0750", ".0775", ".0800", ".0825", ".0850", ".0875");
    $ratesArray = array("$interestRate1", "$interestRate2", "$interestRate3", "$interestRate4", "$interestRate5", "$interestRate6", "$interestRate7");
    
    echo "<pre>";
    //Prints entire contents of array
    print_r($ratesArray);
    echo "</pre>";
    ?>
</body>

</html>
