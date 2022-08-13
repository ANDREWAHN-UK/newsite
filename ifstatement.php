<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Experiments with PHP</title>

    </head>
    <body>

    <!-- If statements -->

    <h1>If statement page</h1>

    <?php 

    $grade = 30;

    if ($grade >= 70) {
        echo '<h3 style="color:green"> You have passed with flying colours, a score of '.$grade .'.</h3>';
    } else if ($grade >= 50) {
            echo '<h3 style="color:blue">You have barely passed, with a score of '.$grade .'.</h3>';
    } else {
        echo '<h3 style="color:red"> You have failed, with a score of '.$grade .'.</h3>';
    }
    
    ?>

    </body>

    </html>