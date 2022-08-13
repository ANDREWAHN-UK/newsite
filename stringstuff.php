<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String stuff</title>
</head>
<body>
    <h1>String stuff</h1>

    <?php
    $phrase1 = "Students who came late to class ";
    $phrase2 = ", stand in the corner.";
    $name="deidre";

    echo $phrase1. ', named '. $name . $phrase2;

    echo '<br>';
    echo  '<hr/>';

    echo 'Uppercase first letter: '.ucfirst(($name));
    echo '<br>';
    echo 'Uppercase first letter of each word: '.ucwords(($name));
    echo '<br>';
    echo 'Uppercase everything: '.strtoupper(($name));
    echo '<br>';
    echo 'Lowercase everything: '.strtolower(($name));

    echo  '<hr/>';

    echo 'Repeat String : '.str_repeat($name, 2) . '</br>';
    echo 'Repeat String and uppercase it by using nested functions, i.e. functions called inside other functions: '.strtoupper(str_repeat($name, 2)).'</br>';
    echo 'Get a sub String : '.substr($name, 2, 5) . '</br>';

    echo '<p>See also strch, strpos, strlen, trim, ltrim, rtrim, str_replace</p></br>';
    ?>
</body>
</html>