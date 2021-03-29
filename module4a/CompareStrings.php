<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare Strings</title>
</head>
<body>
    <h1>Compare Strings</h1>
    <?php
        $firstString = "Geek2Geek";
        $secondString = "Geezer2Geek";

        function sameVar($var1 , $var2){
            echo "<p>String 1: " . $var1 . " and String 2: " . $var2 . " are a match!</p>";
        };

        function diffVar($var1 , $var2){
            echo "<p>String 1: " . $var1 . " and String 2: " . $var2 . " are not a match!</p>";
        };

        if(!empty($firstString)&&!empty($secondString)){
            if(strcmp($firstString, $secondString) == 0){
                sameVar($firstString, $secondString);
            }
            else{
                diffVar($firstString, $secondString);
            }
        }
        else {
            echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared. </p>";
        };
    ?>
</body>
</html>