<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cost Per Square Foot Area Function</title>
  <meta charset="UTF-8">
</head>
<body>

<?php

  //declare two function rArea and totalCost

  //rArea take two args, return int
  //calculate area of a propety based on length and width
  //returns area
    $length = 20;

    $width = 4; 

    $ftCost = 75;

    function rArea($length, $width){
        $area = $width * $length;

        return $area;
    }

  //totalCost takes three args, return int

    function totalCost($length, $width, $ftCost) {
        $totalCost = $width * $length * $ftCost;
        return $totalCost;
    }

  //echo statement using value returns from function
    echo "A room of length " . $length . "ft and width " . $width . "ft has an area of " . rArea($length ,$width ) . "ft squared. <br>";

    echo "The total cost of a room of length ".  $length . "ft and width " . $width . "ft area at $" . $ftCost  . " per square foot is $" . totalCost($length ,$width,$ftCost) .".";
  
?>
</body>
</html>