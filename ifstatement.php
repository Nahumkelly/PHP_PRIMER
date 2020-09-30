<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body style="background-color: #D3D3D3">
   
    <?php
    
        //An if statememt that will carry an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 80)
        {
            echo '<h3 style="color: green">You Have Passed</h3>';
        }
        else
        {
            echo '<h3 style="color: red">You Have Failed </h3style=>';
        }

        $grade ='A';
        // If - Else If -Else

        if($grade == 'A')
        {
            echo '<h2 style="color: #1EBB02">Nahum Kelly You are a Super Star</h2>';
            echo '<img src="Image\superstar.png" alt="Super Star" width="300" height="200">';
        }
        elseif($grade == 'B')
        {
            echo '<h2 style="color: blue">Nahum Kelly You have DONE Very Well</h2>';
            echo '<img src="Image\well done.gif" alt="well done" width="350" height="300">';
        }
        else
        {
            echo '<h2 style="color: red">You Have Failed </h2>';
            echo '<img src="Image\fail.png" alt="fail" width="300" height="300">';
        }
    ?>
</body>
</html>