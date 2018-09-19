<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha Siclovan
         Date: September 18, 2018
        
         CoastCityComputers.php
           
     -->
    <title>Coast City Computers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <?php //PHP outside file inserted to top of the list 
    include("inc_header.php");
    ?>
    <h2>Memorial Day Sale</h2> 
    <ul>
        <!-- List of different items and their prices -->
        <li>Compaq Presario m2007us Notebook: <strong>$799.99</strong></li>
        <li>Epson Stylus CX6600 Color All-In-One Printer, Print/Copy/Scan: <strong>$699.99</strong></li>
        <li>Proview Technology Inc. KDS K715s 17-inch LCD Monitor, Silver/Black: <strong>$199.99</strong></li>
        <li>Hawking Technology Hi-Speed Wireless-AC Cardbus Card: <strong>$9.99</strong></li>
    </ul>
    <?php //PHP outside file inserted to bottom of list
	include("inc_footer.php");
    ?>
</body>

</html>
