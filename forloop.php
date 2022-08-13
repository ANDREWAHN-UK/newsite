<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>For Loop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>   
</head>
<body>

<!-- For loop is a counter controlled loop, used when you know the number of loops usually, i.e. how often you want it to run -->

<h1>For Loops page</h1>

<?php 
    for ($count = 0; $count < 10; $count ++) {
        echo "<p> The count is: $count </p>" ;
    }
 ?>
    
</body>
</html>