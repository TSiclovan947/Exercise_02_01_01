<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 18, 2018
        
         WhileLogic.php
           
     -->
    <title>While Logic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>
    <?php
    //variable called counter set equal to 0
	$counter = 0;
    $numbers = array();
    //while and foreach loop to fill the array with the numbers 1 to 100
    while ($counter <= 100) {
        $numbers[] = $counter;
        //Iteration
        ++$counter;
    }
    foreach($numbers as $currentNum) {
        //Echo to display currentNum
        echo "$currentNum<br>";
    }

    ?>
</body>

</html>
