<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 18, 2018
        
         OddNumbers.php
           
     -->
    <title>Odd Numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <?php 
    //Variable equal to the end product of 100
    $finish = 100;
    //Variable that displays the following text
	$odd = "Odd Numbers Are : ";
    //For loop to display odd numbers from 1 through 100
	for($i = 1; $i <= $finish; $i++) {
        //Modulus because odd if does not divide by two with a zero remainder
    	if ($i % 2 !== 0) {
        $odd .= $i . ",";
    	}
	}   
	echo $odd;
    ?>
</body>

</html>
