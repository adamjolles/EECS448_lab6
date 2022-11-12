<html>
    <body>
        <h1>Questions and Answers:</h1>
        <?php
        $correctAnswers = 0;
        $q1 = $_POST["1"];
        $q2 = $_POST["2"];
        $q3 = $_POST["3"];
        $q4 = $_POST["4"];
        $q5 = $_POST["5"];

        echo "<br><br>Question 1: What year was the Bitcoin whitepaper published?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q1;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: 2008";
        if($q1 == "2008") {
            $correctAnswers++;
        }

        echo "<br><br>Question 2: What is the name for the Ripple Ledger's token?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q2;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: XRP";
        if($q2 == "XRP") {
            $correctAnswers++;
        }

        echo "<br><br>Question 3: Who created Bitcoin?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q3;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Satoshi Nakamoto";
        if($q3 == "Satoshi Nakamoto") {
            $correctAnswers++;
        }

        echo "<br><br>Question 4: What is the largest cryptocurrency exhange in existence?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q4;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Binance";
        if($q4 == "Binance") {
            $correctAnswers++;
        }

        echo "<br><br>Question 5: What language is the Ethereum blockchain built on?";
        echo "<br>&nbsp;&nbsp;&nbsp;You answered: ".$q5;
        echo "<br>&nbsp;&nbsp;&nbsp;Correct answer: Solidity";
        if($q5 == "Solidity") {
            $correctAnswers++;
        }

        echo "<h3>You answered a total of ".$correctAnswers." questions correctly</h3>";
        echo "<h4>Your score: ".($correctAnswers*20)."%</h4>";
        ?>
    </body>
</html>