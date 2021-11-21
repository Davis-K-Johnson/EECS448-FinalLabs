<?php

    $numRight = 0;

    $answer = $_POST["name"];
    if($answer == "Davis"){

        $numRight++;
    }
    echo "Question 1: What is my name?" . "<br>";
    echo "&emsp; You Answered: " . $answer . "<br>";
    echo "&emsp; Correct Answer: Davis" . "<br>" . "<br>";

    $answer = $_POST["quest"];
    if($answer == "I seek to pass this lab"){

        $numRight++;
    }
    echo "Question 2: What is my quest?" . "<br>";
    echo "&emsp; You Answered: " . $answer . "<br>";
    echo "&emsp; Correct Answer: I seek to pass this lab" . "<br>" . "<br>";

    $answer = $_POST["color"];
    if($answer == "Orange"){

        $numRight++;
    }
    echo "Question 3: What is my favorite color?" . "<br>";
    echo "&emsp; You Answered: " . $answer . "<br>";
    echo "&emsp; Correct Answer: Orange" . "<br>" . "<br>";

    $answer = $_POST["swallow"];
    if($answer == "African or European?"){

        $numRight++;
    }
    echo "Question 4: What is the velocity of an unladened swallow?" . "<br>";
    echo "&emsp; You Answered: " . $answer . "<br>";
    echo "&emsp; Correct Answer: African or European?" . "<br>" . "<br>";

    $answer = $_POST["know"];
    if($answer == "AAAAAAAAAAARGH"){

        $numRight++;
    }
    echo "Question 5: What? I don't know that!" . "<br>";
    echo "&emsp; You Answered: " . $answer . "<br>";
    echo "&emsp; Correct Answer: AAAAAAAAAAARGH" . "<br>" . "<br>";

    echo "Number Correct: " . $numRight . "<br>" . "<br>";

    if($numRight == 0){

        echo "Final Score: 0%" . "<br>"; 
    }
    if($numRight == 1){

        echo "Final Score: 20%" . "<br>"; 
    }
    if($numRight == 2){

        echo "Final Score: 40%" . "<br>"; 
    }
    if($numRight == 3){

        echo "Final Score: 60%" . "<br>"; 
    }
    if($numRight == 4){

        echo "Final Score: 80%" . "<br>"; 
    }
    if($numRight == 5){

        echo "Final Score: 100%" . "<br>"; 
    }
?>