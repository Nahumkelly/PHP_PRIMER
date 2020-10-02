<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body style="background-color: #D3D3D3">
    <h1>Array</h1>

    <?php
        // a variable
        $num =3;

        $numbers = array(1,2,3,4,5,6,7,8,9,10,"Nahum",6,6,77,34,90,23,89,12,34, 'Kelly');
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);

        echo "<p>Array Numbers is Size: $size</p>";

        for($count =0; $count <$size; $count++)
        {
            echo "<p>$numbers[$count]</p>";
        }
    
    ?>
</body>
</html>