<html>
    <body>
        <h1>Questions and Answers:</h1>
        <?php
        $q1 = $_POST["1"];
        $q2 = $_POST["2"];
        $q3 = $_POST["3"];
        $q4 = $_POST["4"];
        $q5 = $_POST["5"];
        $correct = 0;
        echo "<br>Question 1: What's the acronym for HyperText Markup Language";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q1;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: HTML";
        if($q1 == "HTML") {
            $correct++;
        }
        echo "<br><br>Question 2: What language is being used for this form?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q2;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: PHP";
        if($q2 == "PHP") {
            $correct++;
        }
        echo "<br><br>Question 3: What is the offical state code for Kansas?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q3;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: KS";
        if($q3 == "KS") {
            $correct++;
        }
        echo "<br><br>Question 4: What is the first version of Windows called?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q4;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: MSDOS";
        if($q4 == "MSDOS") {
            $correct++;
        }
        echo "<br><br>Question 5: What's the name of the US standard keyboard?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q5;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Querty";
        if($q5 == "Querty") {
            $correct++;
        }

        echo "<h3>You answered a total of ".$correct." questions correctly</h3>";
        echo "<h4>Your score: ".($correct*20)."%</h4>";
        ?>
    </body>
</html>