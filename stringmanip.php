
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>

    <?php
    //Concatenation of Strings
    echo'<h3>RConcatenation Strings</h3>';
        $phrase1 ="I am from A small Community In St. Thomas , Called Amity Hall";
        $phrase2 ="I am presently living in Yallahs";
        $name ="nahum kelly";

        echo "My Name is"." ".ucwords($name). "<br/>";
        echo $phrase1. " but ". $phrase2."<br/>";
        echo '<hr/>';

        //String Transformation
        echo'<h3>String Transformation</h3>';
        echo ' Uppercase First Letter: '.ucfirst($name.'<br/>');
        echo ' Uppercase First Letter of each Word: '.ucwords($name.'<br/>');
        echo ' Upper Case: '.strtoupper($name.'<br/>');
        echo ' Lower Case: '.strtolower("A WEB APPLICATION IS A COMPUTER PROGRAM THAT UTILIZES WEB BROWSERS AND WEB TECHNOLOGY TO PERFORM TASKS OVER THE INTERNET".'<br/>');
        echo'<hr/>';

        echo'<h3>Repeat String & Substring</h3>';
        echo 'Repeat String: '. str_repeat($name. " - ",10).'<br/>';
        echo 'Repeat String - Nested Function: '. strtoupper(str_repeat($name.' - ',10)).'<br/>';

        echo 'Get Substring: '. substr($name, 3, 4).'<br/>';

        echo 'Get Position of String: ' .strpos($name, 'e'). '<br/>';
        echo '<hr/>';

        echo'<h3>find String Character</h3>';
        echo 'find Character "A": '. strchr($name, 'A'). '<br/>';
        echo 'find Character "a": '. strchr($name, 'a'). '<br/>';
        echo 'find Character "k": '. strchr($name, 'k'). '<br/>';
        echo 'find Character "l": '. strchr($name, 'l'). '<br/>';
        echo'<hr/>';

        echo'<h3>find Length of Stringr</h3>';
;        
        echo 'find Length of String: '. strlen($name). '<br/>';
        echo'<hr/>';

        echo'<h3>Trim Space</h3>';

        echo 'Without Trim: '. "N" . " A H U" . "M" .'<br/>';
        echo 'Without Trim: '. "N" . trim(" A H U") . "M" .'<br/>';
        echo 'Without Trim: '. "N" . ltrim(" A H U") . "M" .'<br/>';
        echo 'Without Trim: '. "N" . rtrim(" A H U") . "M" .'<br/>';

        echo'<hr/>';

        echo'<h3>Replaceing String</h3>';

        echo 'Replace String with another: ' . str_replace("Yallahs", "Kingston", $phrase2). '<br/>'.'<hr/>';

    ?>

</body>
</html>