<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 1 Task 3</title>
</head>
<body>
<?php
function rectangleArea($length, $width) {
    $area = $length * $width;
   return "A rectangle of width $width and length $length has an area of $area.";
 }
    echo rectangleArea(9, 6);
?>
</body>
</html>