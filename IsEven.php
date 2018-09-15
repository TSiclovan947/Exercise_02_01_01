<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 12, 2018
        
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
    //Created empty array to contain the array[] blocks
    $numbersArray = array();
    //Array elements to generate ten random numbers from 0 to 100
    $numbersArray[] = rand(0, 100); 
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    $numbersArray[] = rand(0, 100);
    
 //Created a for loop to display if the random nimber is odd or even  
 for ($i = 0; $i < count($numbersArray); $i++) {
     //Used the modulus 2 because even numbers are divisible by 2
     if (($numbersArray[$i] % 2) === 0) {
         //Prints if even number
         echo "<p>$numbersArray[$i] is an even number. </p>";
     }
     else {
         //Prints if odd number
         echo "<p>$numbersArray[$i] is an odd number</p>";
     }
 }
    ?>
</body>

</html>
