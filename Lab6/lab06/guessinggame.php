<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Display all Members Page</title>
</head>
<body>
    <h1>Display Members</h1>
    <?php
    session_start();
    if(!isset($_SESSION["number"])){
        $_SESSION["number"] = rand(1,100);
    }
if(!isset($_SESSION["gRemaining"])){
        $_SESSION["gRemaining"] = 5;
    }
    $num = $_SESSION["number"];
    $gRemaining = $_SESSION["gRemaining"];
?>
    <?php
        echo "Enter a number between 1 and 100,<br>
            then press the Guess button.";
    ?>
    <form action = "guessinggame.php" method = "post">
    <label>Number: <input type="text" name = "guess"></label>
    <input type="submit" value="Guess">
    
    <?php
        $guess = $_POST["guess"];
        if($guess > $num){
            echo "<br>Your guess is too high";   
        }
        else if($guess === $num){
            echo "<br>Congratulations! you guessed the hidden message";
        }
        else if ($guess < $num){
            echo "<br>Your guess is too low"; 
        }
        echo "<br>Number of guesses: '$gRemaining'";
    ?>
    <p><a href = "giveup.php">Give Up</a></p>
<p><a href = "startover.php">Start Over</a></p>
    </body>
</head>