<?php
        
            print "<h1 id='title'> Dice Roll Game </h1>";
            
            $dicearray = array(
                " ",
                "<img src='img/1die.png' />",
                "<img src='img/2die.png'/>",
                "<img src='img/3die.png' />",
                "<img src='img/4die.png'/>",
                "<img src='img/5die.png'/>",
                "<img src='img/6die.png'/>");
                
            
            asort($dicearray);
            
            $amount = count($dicearray)-1;
            echo "<h2 id='desc'>" . "There are a total of 4 dice displayed below, each with " . $amount . " sides. " . 
            "You will compete against the computer to see who wins this game!" . "</h2>";
            
                
            for($i=1; $i<5; $i++){
                ${"roll" . $i } = rand(1,6);
                
            }
            
            print "<div id='format'>";
            for($i=1; $i<2; $i++){
                echo $dicearray[$roll1];
                echo $dicearray[$roll2];
                $sum = array($roll1, $roll2);
                $playerTotal = array_sum($sum);
                $prod = array_product($sum);
                echo "<h2 id = 'total_score_h'>" . "Your total score is: " . "</h2>". "<h2 id = 'h_score'>" . $playerTotal . "</h2>";
                echo "<h2 id = 'product_h'>" . "The product of the two dice is: ". "</h2>" . "<h2 id = 'h_prod'>" . $prod . "</h2>";
            }
            print "</div>";

            
            print "<br>";
            
            print "<div id='second_format'>";
            for($i=1; $i<2; $i++){
                echo $dicearray[$roll3];
                echo $dicearray[$roll4];
                $sum = array($roll3, $roll4);
                $computerTotal= array_sum($sum);
                $prod = array_product($sum);
                echo "<h2 id = 'total_score_c'>" . "Computer's total score is: " . "</h2>" . "<h2 id = 'c_score'>" . $computerTotal . "</h2>";
                echo "<h2 id = 'product_c'>" . "The product of the two dice is: ". "</h2>" . "<h2 id = 'c_prod'>" . $prod . "</h2>";
            }
            print "</div>";
        
            print "<div id='result'>";
            if($computerTotal < $playerTotal){
                print "You Win!";
            }
            
            if($computerTotal == $playerTotal){
                print "Tie!";
            }
            
            ($computerTotal > $playerTotal) ? print "Computer Wins"
            : print "";
            print "</div>";
?>
        