<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 11, 2018
        
         MultipleScripts.php
           
     -->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h1>PHP Environment Info</h1>
   <p>This page was rendered with 
       <?php //Version page was rendered 7.0
        echo phpversion();
    ?> 
   </p>
   <p>This PHP code was rendered with Zend Engine Version
       <?php //Code was rendered with Zend Engine Version 3.0.0
       echo zend_version();
    ?> 
   </p>
    <p>PHP's default MIME type is
       <?php //This echo prints the MIME type of the script (text/html)
       echo ini_get("default_mimetype");
    ?> 
   </p>
    <p>The maximum allowable execution time of a PHP script is
       <?php //This echo prints the max execution time of the PHP Script
       echo ini_get("max_execution_time");
    ?> 
   </p>
</body>

</html>
