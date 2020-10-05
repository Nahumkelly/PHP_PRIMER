<?php 
    $title = "Functions";
    include "includes\header.php" ;
?>
    <h1><?php echo $title ?></h1>
    
    <?php
        /*Defining a Function*/
        echo "<hr/>";
        
        function writeText()
        {
            echo "<h3>Welcome to Nahum Kelly World</h3>";
        }

        //Calling a Function
        writeText();
        echo "<hr/>";
        writeText();

        echo "<hr/>";
        echo "<h3>Functions with Parameters</h3>";

        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            $num2 =$num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

         //Pass by Reference - use Ampersand in parameter
         function changNum(&$num)
         {
             $num +=25;
         }

         function returnProduct($num1, $num2)
         {
            $prod = $num1 * $num2;
            return $prod;
         }

        $num = 200;
        addFunction(50, 80);
        addFunction($num, 80);
        addFunction(750, 80);
        addFunction($num, $num);

        echo "<hr/>";

        changNum($num);
        echo $num . '<hr/>';

        $return_value = returnProduct(1500, 2900);
        echo $return_value . '<hr/>';
        
    ?>

<?php require "includes/footer.php"?>