    <?php 
        $title = "Index";
        require  "includes\header.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Basic HTML -->
                <h1>Hello HTML - PHP Primer!!!</h1>

                <?php
                    //Printing to HTML using echo
                    echo 'Hello PHP!!!';
                    //You Can echo HTML tags
                    echo '<br/>';
                    echo 'Second Line';
                    echo '<br/>';
                
                    //declare variable
                    $name = 'Nahum Kelly';
                    $age = 25;
                    //echo variable
                    echo $name;
                    echo '<h1>My name Is: '.$name.' </h1>';
                    echo '<h1>My age Is: '.$age.' </h1>';

                    echo "<h1>My Nmae is: $name</h1>";
                ?>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>

            </div>
        </div>
    </div>


    <?php require "includes/footer.php"?>