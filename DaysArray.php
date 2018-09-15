<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 12, 2018
        
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
    //Created an array with the seven days of the week in English
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    
    echo "<p>The days of the week in English are:</p><p>";
    
    //Prints the $days in English taken from the array
    echo "$days[0]<br>";
    echo "$days[1]<br>";
    echo "$days[2]<br>";
    echo "$days[3]<br>";
    echo "$days[4]<br>";
    echo "$days[5]<br>";
    echo "$days[6]<br>";
    
    //Created array with the seven days of the week in French
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    
    echo "<p>The days of the week in French are:</p><p>";
    
    //Prints the $days in French taken from the array
    echo "$days[0]<br>";
    echo "$days[1]<br>";
    echo "$days[2]<br>";
    echo "$days[3]<br>";
    echo "$days[4]<br>";
    echo "$days[5]<br>";
    echo "$days[6]<br>";
    
    //Created array with the seven days of the week in Romanian
    $days = array("Duminica", "Luni", "Marti", "Mercuri", "Joi", "Vineri", "Sambata");
    
    echo "<p>The days of the week in Romanian are:</p><p>";
    
    //Prints the $days in French taken from the array
    echo "$days[0]<br>";
    echo "$days[1]<br>";
    echo "$days[2]<br>";
    echo "$days[3]<br>";
    echo "$days[4]<br>";
    echo "$days[5]<br>";
    echo "$days[6]<br>";
    ?>
</body>

</html>
