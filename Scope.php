<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 13, 2018
        
         Scope.php
           
     -->
    <title>Variable Scope</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Variable Scope</h2>
    <?php 
    //Created Global Variable
    $globalVariable = "global variable";
    
    //Function with a local variable
    function scopeExample() {
        $localVariable = "local variable";
        echo "<p>This is a $localVariable</p>";
    }
    
    function globalExample() {
        //$globalVariable = "another one";
        global $globalVariable;
        echo "<p>This is a $globalVariable</p>";
    }
    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
    ?>
</body>

</html>
