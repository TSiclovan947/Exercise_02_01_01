<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha Siclovan
         Date: September 18, 2018
        
         TempConversion.php
           
     -->
    <title>Temperature Conversion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Temperature Conversion</h2>
    <?php 
    //Fahrenheit temperature set to 0
	$fahrenTemp = 0;
    //While loop to convert fahrenheit temperature to celcius
        while ($fahrenTemp <= 100) {
           //Conversion math
            //.556 rounded version of 5/9
	       $celsTemp = ($fahrenTemp - 32) * .556;
           //Displays the text and temperature
	       echo $fahrenTemp." Fahrenheit is equal to ".$celsTemp." Celsius<br/>"; 
	       $fahrenTemp++;
        }
    ?>
</body>

</html>
