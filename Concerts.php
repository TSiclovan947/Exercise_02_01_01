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
    echo "<p>The following ", count($concerts), " concerts are scheduled.</p><p>";
    
    //Displaying the contents of the array (the seven performers)
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    
    //Pre to turn off HTML formatting
    echo "<pre>";
    //Prints entire contents of array
    print_r($concerts);
    echo "</pre>";
    //Pre to turn off HTML formatting
    echo "<pre>";
    //Prints entire contents of array with size/length
    var_dump($concerts);
    echo "</pre>";
    ?>
</body>

</html>
