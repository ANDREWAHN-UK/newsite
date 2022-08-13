<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Experiments with PHP</title>

    </head>

    <body>

    <h1>Testing</h1>

    <p>This is a page exploring the working of PHP</p>

    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple Array and Print Outs</a></li>
        <li><a href="forloop.php">Simple for loop</a></li>
        
        <li><a href="whiledowhileloop.php">Simple while & do while loops</a></li>
        <li><a href="ifstatement.php">Simple if statement</a></li>
        <li><a href="switchstatement.php">Simple switch statement</a></li>
    </ul>

    <?php echo 'Hello PHP' ;
     $myName = 'Andy';
     $myAge = 37;
        echo '<br/>';
        echo '<p>My name is: ' . $myName .' and my age is ' . $myAge. '<p/>';
        echo '<br/>';
        echo '<br/>';  
    ?>

    <!-- Comments! -->


    </body>
</html>