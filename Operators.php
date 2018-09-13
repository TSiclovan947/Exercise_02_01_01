<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         Operators.php
           
     -->
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Operators</h2>
    <?php 
    //Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo '<p>$returnValue after addition: ', $returnValue, "</p>";
    //Modulus
    $x = 3;
    $y = 2;
    $returnValue = $x % $y;
    echo '<p>$returnValue after modulus: ', $returnValue, "</p>";
    //Assignment Operators
    $x = 3;
    $y = 2;
    $x += $y; //Same as $x = $x + $y //Also = $x++;
    echo '<p>$returnValue after operation: ', $x, "</p>";
    //Concatenation
    $x = "hello ";
    $y = "world";
    $x .= $y;
    echo '<p>$returnValue after operation: ', $x, "</p>";
    ?>
</body>

</html>
