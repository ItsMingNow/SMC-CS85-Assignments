<!DOCTYPE html>
<html lang="en">
<head>
  <title>Even Numbers</title>
  <meta charset="UTF-8">
</head>
<body>

<?php

  $currentNumber = 1;
  echo "$currentNumber";
  while($currentNumber < 101) {
    if($currentNumber % 2 == 0){
      echo "<h2>$currentNumber<h2>";
      echo "\n";
    }
    
    

    $currentNumber++;
  }

  
?>
</body>
</html>