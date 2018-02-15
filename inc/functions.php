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
                $playerTotal = $roll1 + $roll2;
                echo "<h2 id='h_score'>" . "Your total score is: " . $playerTotal . "</h2>";
            }
            print "</div>";
            
            print "<div id='second_format'>";
            for($i=1; $i<2; $i++){
                echo $dicearray[$roll3];
                echo $dicearray[$roll4];
                $computerTotal= $roll3 + $roll4;
                echo "<h2 id='c_score'>" . "Computer's total score is: " . $computerTotal . "</h2>";
            }
            print "</div>";
        
            print "<div id='result'>";
            if($computerTotal < $playerTotal){
                print "You Win!";
            }
            
            elseif($computerTotal > $playerTotal){
                print "Computer Wins!";
            }
            
            else{
                print "Tie!";
            }
            print "</div>";
           
           /*
            $roll1 = rand(1,6);
            $roll2 = rand(1,6);
            $roll3 = rand(1,6);
            $roll4 = rand(1,6);
            
            $playerTotal = $roll1 + $roll2;
            $computerTotal = $roll3 + $roll4;
            
            
            
            
            print "<div>";
            print $dicearray[$roll1];
            print $dicearray[$roll2];
            print "</div>";
            
            print "<div>";
            print $dicearray[$roll3];
            print $dicearray[$roll4];
            print "</div>";
            
            echo "<h2>" . "Your total score is: " . $playerTotal . "</h2>";
            echo "<h2>" . "The computer's total score is: " . $computerTotal . "</h2>";
            */
        ?>
        