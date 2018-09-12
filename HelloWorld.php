<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         HelloWorld.php
           
     -->
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php 
    //These are my global variables (variable declarations)
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    $worldInfo = 92897000;
    $sunInfo = 72000000;
    $moonInfo = 3456;
    
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is $moonInfo miles in diameter.</p>";
    
    echo "This is a {$moonVar}embedded in double quotes.<br>";
    echo "This is a $moonVarembedded in double quotes.<br>";
    ?>
</body>

</html>
