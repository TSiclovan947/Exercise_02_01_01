<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 13, 2018
        
         Functions.php
           
     -->
    <title>PHP Functions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Passing Parameters</h2>
    <?php 
    //Create a function called incrementByValue to pass the countbyvalue
    //Pass by value because no &
    function incrementByValue($countByValue) {
    ++$countByValue;
    echo "<p>incrementByValue() value is $countByValue.</p>";
    }
    
    //Create a function called incrementByReference to pass the countByReference
    //Ampersand & means passing by refence
    function incrementByReference(&$countByReference) {
    ++$countByReference;
    echo "<p>incrementByReference() value is $countByReference.</p>";
    }
    
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    //Pass the argument
    incrementByValue($count);
    echo "<p>Main program ending value is $count.</p>";
    
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    //Pass the argument
    incrementByReference($count);
    echo "<p>Main program ending value is $count.</p>";
    ?>
    
    <h2>Default Arguments</h2>
    <?php
    function paint($room="office",$color="red") {
        return "<p>The color of the $room is $color.</p>";
    }
    //Call the function
    //Pass parameters to blue
    echo paint();
    //Default Parameters
    echo paint("bedroom", "blue");
    //Null is a real value
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    ?>
</body>

</html>
