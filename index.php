<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body style="background-color: #D3D3D3">
    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printout</a> </a></li>
        <li><a href="forloop.php">Simple For Loop</a> </a></li>
        <li><a href="whiledowhileloop.php">Simple while/Do While Loop</a> </a></li>
        <li><a href="ifstatement.php">Simple If Statement</a> </a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a> </a></li>
        <li><a href="stringmanip.php">Simple String Manipulation</a> </a></li>
    </ul>
    <!-- Basic HTML -->
   <h1>Hello HTML - PHP Primer!!!</h1>


    <?php
        //Printing to HTML using echo
        echo 'Hello PHP!!!';
        //You Can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>


    <?php
        //declare variable
        $name = 'Nahum Kelly';
        $age = 25;
        //echo variable
        echo $name;
        echo '<h1>My name Is: '.$name.' </h1>';
        echo '<h1>My age Is: '.$age.' </h1>';

        echo "<h1>My Nmae is: $name</h1>";
    ?>

</body>
</html>