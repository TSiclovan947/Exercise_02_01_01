<!doctype html>

<html>

<head>
    <!--   
         Exercise 02_01_01
         Author: Tabitha SIclovan
         Date: September 14, 2018
        
         DiceRoll.php
           
     -->
    <title>Dice Roll</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll</h2>
    <?php 
    //Global Variables Array with singular numbers
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    //Global Variables Array with plural numbers
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    //Global variable to track how many doubles are rolled
    $doublesCount = 0;
    $rollNumber = 1;
    //Constant used for number rolls
    define("NBR_ROLLS", 4);
    
    //Function to check for doubles
    function CheckForDoubles($die1, $die2) {
        //Access to global varaibles; Python syntax ("global)
        global $faceNamesSingular;
        global $faceNamesPlural;
        $returnValue = false;
        echo "Die 1: $die1<br>Die 2: $die2<br>";
        //If statement for singular roll (different numbers)
        if($die1 === $die2) {
            echo "The roll was double " . $faceNamesPlural[$die1 - 1] . ".<br>";
            $returnValue = true;
        }
        //If statement for double roll (same two numbers)
        else {
            echo "The roll was a " . $faceNamesSingular[$die1 - 1] . " and a " . $faceNamesSingular[$die2 - 1] .".<br>";
            $returnValue = false;
        }
        return $returnValue;
    }
    
    //Function to display the score text
    function displayScoreText($score, $doubles) {
        if($doubles) {
            //Switch statement if dice roll double 1 and 1 and 6 and 6
            switch ($score) {
                case 2:
                    echo "You rolled snake eyes!<br>";
                    break;
                case 12:
                    echo "You rolled boxcars!<br>";
                    break;
            }
        }
        else {
            //else If statement if score of dice roll is 3
            if($score === 3) {
                echo "You rolled a loose deuce!<br>";
            }
            //else If statement if score of dice roll is 5
            else if($score === 5) {
                echo "You rolled a fever fiver!<br>";
            }
            //else If statement if score of dice roll is 7
            else if($score === 7) {
                echo "You rolled a natural!<br>";
            }
            //else If statement if score of dice roll is 9
            else if($score === 9) {
                echo "You rolled a nina!<br>";
            }
            //else If statement if score of dice roll is 11
            else if($score === 11) {
                echo "You rolled a yo!<br>";
            }
            //Else statement if the score is not equal to any of the above
            else {
                echo "Your roll has no nickname!<br>";
            }
        }
    }
    
    //Created dice array
    $dice = array();
    while($rollNumber <= NBR_ROLLS) {
        //Roll the dice (two of them)
        $dice[0] = rand(1, 6);
        $dice[1] = rand(1, 6);
        echo "<p>";
        //Add the two dice rolls
        $score = $dice[0] + $dice[1];
        //Test with output
        echo "The total score for the roll was $score.<br>";
        //Call the functions
        $doubles = CheckForDoubles($dice[0], $dice[1]);
        displayScoreText($score, $doubles);
        echo "</p>";
        if($doubles) {
            ++$doublesCount;
            
        }
        ++$rollNumber;
    }
    echo "<p>Doubles occurred on $doublesCount of the " . NBR_ROLLS . ".</p>";
    ?>
</body>

</html>
