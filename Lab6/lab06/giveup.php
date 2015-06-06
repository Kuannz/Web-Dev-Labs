<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Display all Members Page</title>
</head>
<body>
    <h1>Give up</h1>
<?php
    session_start();
    $num = $_SESSION["number"];
    echo "The hidden number was: $num";
    $SESSION["number"] = array();
    session_destroy();
?>
<p><a href = "guessinggame.php">Start Over</a></p>
</body>
</html>