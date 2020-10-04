<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>

<?php
    $datenow =getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . "<br/>";
    echo $datenow['mon'] . "<br/>";
    echo $datenow['year'] . "<br/>";

    echo "Today's Date: ". $datenow['mday'] . "/". $datenow['mon'] . "/". $datenow['year']."<br/>";

    echo time() .'<br/>';

    print date("m/d/y G.i:s<br/>", time()). "<br/>";
    print "Taday is ";
    print date("j  of F Y, \a\\t g.i a", time());
    echo "<hr/>";


    echo "Today is " . date("d/m/y") . "<br>";
    echo "The time is " . date("h:i:sa"). "<br>";
    echo "Today is " . date("l");


?>
    
</body>
</html>