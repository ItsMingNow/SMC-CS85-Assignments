<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validate Credit Card</title>
</head>
<body>
    <h1>Validate Credit Card</h1>
    <?php
        $CreditCard = array( "", "8910-1234-5678-6543", "OOOO-9123-4567-0123");

        foreach ($CreditCard as $CardNumber) {

            if (empty($CardNumber)) { 
            echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>";
            }
            else {
                
                $newCardInfo = str_replace("-", "", $CardNumber);
                
                echo '<br>';

                if(is_numeric($newCardInfo)){
                    for($i = 0; $i< strlen($newCardInfo); $i++){
                        echo $newCardInfo[$i];
                    };
                }
                else {
                    echo "WARNING This card does not contain all numberal values!";
                }

                echo '<br>';
            };
        }    
    ?>
</body>
</html>