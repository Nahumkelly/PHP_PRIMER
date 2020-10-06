<?php 
    $title = "while/Do While Loop";
    include "includes/header.php" ;
?>
    <h1><?php echo $title ?></h1>
    
<div class="container">
        <div class="row">
            <div class="col">
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
            </div>
            <div class="col">
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
            </div>
        </div>
    </div>
<?php require "includes/footer.php"?>