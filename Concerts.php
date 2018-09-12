<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         Concerts.php
           
     -->
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php 
    //Created an array with 5 elements
    $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    //Added two more elements to the array 
    $concerts[] = "Bob Dylan";
    $concerts[] = "Joan Jett";
    echo "<p>The following ", count($concerts), " concerts are scheduled.</p>";
    ?>
</body>

</html>
