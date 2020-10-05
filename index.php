<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP Primer - <?php echo "$title"?></title>
</head>

<body style="background-color: #D3D3D3">
    <div class="container-fluid">

        <!-- <ul>
        <li><a href="index.php">Home</a> </a></li>
        <li><a href="array.php">Simple Array and Printout</a> </a></li>
        <li><a href="forloop.php">Simple For Loop</a> </a></li>
        <li><a href="whiledowhileloop.php">Simple while/Do While Loop</a> </a></li>
        <li><a href="ifstatement.php">Simple If Statement</a> </a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a> </a></li>
        <li><a href="stringmanip.php">Simple String Manipulation</a> </a></li>
        <li><a href="datetimemanip.php">Simple Date and Time Manipulation</a> </a></li>
        <li><a href="functions.php">Simple Functions</a> </a></li>
    </ul> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">Nahum Kelly Assignment 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="array.php">Array and Printout<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forloop.php">For Loop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="whiledowhileloop.php">while/Do While Loop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ifstatement.php">If Statement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="switchstatement.php">Switch Statement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stringmanip.php">String Manipulation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datetimemanip.php">Date and Time Manipulation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="functions.php">Functions</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">

            <h2>Follow each link to the page example</h2>

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

            <?php
    echo "<p>Copyright &copy; 2000-". date("Y")." Nahum Kelly PHP Website</p>";
    ?>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        </div>
    </div>
</body>

</html>