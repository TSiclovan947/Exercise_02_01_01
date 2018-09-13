<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         HelloWorld.php
           
     -->
    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Is Even</h2>
    <?php 
    $numbersArray[1] = rand(); 
    $numbersArray[2] = rand();
    $numbersArray[3] = rand();
    $numbersArray[4] = rand();
    $numbersArray[5] = rand();
    $numbersArray[6] = rand();
    $numbersArray[7] = rand();
    $numbersArray[8] = rand();
    $numbersArray[9] = rand();
    $numbersArray[10] = rand();
    
    echo print_r($numbersArray);
    
    //$evenVar = ($numbersArray % 2 == 0) ? "is an even number" : "is an odd number";
    //$even = ($num % 2 == 0);
    //$odd = ($num % 2 != 0);

  
    ?>
</body>

</html>
