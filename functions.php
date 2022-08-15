<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Functions</h1>

    

    <?php
    
    // Defining a function 
    function writeMessage() 
    {
        echo "Have a nice day!";
    }

    //calling the function

   
    echo 'function writeMessage() 
    {
        echo "Have a nice day!";
    }

    <br>

    which is then called with:

    <br>

    writeMessage(); produces :' . '<br>';
    
    writeMessage();

    function addNum($num1,$num2)
    {
       $sum = $num1 + $num2;
       echo"<br>The sum of $num1 and $num2 = $sum";
    }

    addNum(34, 15);

    ?>

    
</body>
</html>