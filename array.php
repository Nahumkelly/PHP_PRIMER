<?php 
    $title = "Array and Printout";
    include  "includes\header.php" ;
?>
<h1><?php echo $title ?></h1>

<div class="container">
  <div class="row">
    <div class="col">
        <?php
            // a variable
            $num =3;

            $numbers = array(1,2,3,4,5,6,7,8,9,10,"Nahum",6,6,77,34,90,23,89,12,34, 'Kelly');
            echo $numbers[5];
            echo "<p>$numbers[9]</p>";
        ?>
    </div>
    <div class="col">
        <?php
             $size = count($numbers);

             echo "<p>Array Numbers is Size: $size</p>";
         ?>
    </div>
    <div class="col">
        <?php
            for($count =0; $count <$size; $count++)
            {
                echo "<p>$numbers[$count]</p>";
            }
        ?>
    </div>
  </div>
</div>

<?php require "includes/footer.php"?>