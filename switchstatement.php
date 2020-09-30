<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statement</title>
</head>
<body style="background-color: #D3D3D3">
    <h1>Switch Statement</h1>
    
    <?php
        $grade ='g';

        switch($grade)
        {
            case 'A':
                echo '<h2 style="color: #1EBB02">Nahum Kelly You are a Super Star</h2>';
                echo '<img src="Image\superstar.png" alt="Super Star" width="300" height="200">';
            break;
            case 'B':
                echo '<h2 style="color: blue">Nahum Kelly You have DONE Very Well</h2>';
                echo '<img src="Image\well done.gif" alt="well done" width="350" height="300">';
            break;
            default:
                echo '<h2 style="color: red">You Have Failed </h2>';
                echo '<img src="Image\fail.png" alt="fail" width="300" height="300">';
            break;
        }
 
    ?>
</body>
</html>