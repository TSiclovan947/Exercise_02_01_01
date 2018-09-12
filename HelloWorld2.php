<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         HelloWorld2.php
           
     -->
    <title>Hello World 2</title>
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
    define("WORLD_INFO", 92897000); //Constant
    define("SUN_INFO", 72000000); //Constant
    define("MOON_INFO", 3456); //Constant
    
    echo "<p>Hello $worldVar!<br>";
    //Used number format to add commas to the numbers
    echo "The $worldVar is ", number_format(WORLD_INFO, 0)," miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2)," degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is ", number_format(MOON_INFO,0)," miles in diameter.</p>";
    
    
    ?>
</body>

</html>
