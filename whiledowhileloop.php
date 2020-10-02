<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-While Loops</title>
</head>
<body style="background-color: #D3D3D3">
    <h1>While Loop</h1>
    <?php
        $grade =0;

        while($grade < 10)
        {
            echo '<P>I am  While Loop Less Than 10!</P>';
            $grade++;
        }

        echo 'End of Loop';
    ?>

    <h1>DO-While Loop</h1>
    <?php 
        //Post-Condition Loop
        $grade =5;

        do
        {
            echo '<P>I am DO While Loop!</P>';
            $grade++;
        }while($grade <10);
    ?>

    
</body>
</html>