<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Arrays</h1>

<p>Arrays are like variables in that they store information, but they can store more than one value</p>

<br>

<p> Arrays usually store one data type, e.g. integer, but in PHP you can store multiples</p>

<?php 
$numbers =  array(1,2,3,4,5,6,7,8,9,10);

echo '<p>To get the size of the array, create a variable, e.g. $size, and  
set $size=count($nameOfYourArray) and then echo $size.</p>';

$size = count($numbers);

echo "The size of the array is : $size";

for($count = 0; $count < $size; $count++ ){
    echo "<p>$numbers[$count]</p>";
}

?>
    
</body>
</html>