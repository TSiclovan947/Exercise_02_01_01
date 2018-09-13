<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         HelloWorld.php
           
     -->
    <title>Days Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Days Array</h2>
    <?php 
    //Created an array with 5 elements
    //$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    //echo "<p>The days of the week in English are: ", print_r($days), "</p>";
    
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    
    echo "<p>The days of the week in French are: ", print_r($days), "</p>";
    
    ?>
</body>

</html>
