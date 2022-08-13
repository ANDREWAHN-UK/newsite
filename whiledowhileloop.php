<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while/do-while-loops</title>
</head>
<body>

<!-- Unlike for loops, these have no set number, and work off a condition - this being something that could be dynamically set.
     Be aware of closed loops, i.e. with no exit clause -->
    <h1>While Loop</h1>

    <?php 
    //pre condition loop
    $grade = 0;
        while($grade <10){
            echo "<p>I am: $grade</p>";
            $grade++;
        }

        echo "<p>I am finished now</p>";
    ?>

    <h1>Do - while loop</h1>

    <?php 

    //post condition loop, guaranteed to run at least once
        do{
            echo '<p>I am a do-while loop</p>';
            $grade++;
        } while
        ($grade<15);
        echo "<p>I am finished now</p>";
    ?>
</body>
</html>