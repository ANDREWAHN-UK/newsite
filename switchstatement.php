<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Experiments with PHP</title>

    </head>
    <body>

    <h1>Switch Page</h1>

    <!-- Switch statements -->

    <?php 

    $grade = 'D';

    switch($grade){
    case 'A':
        echo '<h3 style="color:green"> You have passed with flying colours, a score of '.$grade .'.</h3>';
        break;
    case 'B':
        '<h3 style="color:blue">You have barely passed, with a score of '.$grade .'.</h3>';
        break;
    case 'C':
        echo '<h3 style="color:red"> You have failed, with a score of '.$grade .'.</h3>';
    default:
        echo '<h3 style="color:black"> No score available</h3>';
        break;
    }
    
    
    ?>

    </body>

    </html>