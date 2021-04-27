<!DOCTYPE html>
<head>  
    <title>...</title>
</head>
<body>
<?php

    
    
    function displayError($fieldName, $errorMsg){
        echo " ". $fieldName . $errorMsg . "<br/>\n";
    }

    // all four words are entered, that all of them contain only letters, 
    // and that all four are between 4 and 7 characters long
    function validateWord($data, $fieldName){ 
        if(!ctype_alpha($data) &&  (strlen($data) < 4 || strlen($data) > 7)) {
            $errorOne = "'s characters are not all letters and the word cannot be shorter than 4 letters or longer than 8 letters";
            displayError($fieldName, $errorOne);

            return 0;
        }
        if(!ctype_alpha($data)){
            $errorTwo = "'s characters are not all letters";
            displayError($fieldName, $errorTwo);

            return 0;
        }
        if(strlen($data) < 4 || strlen($data) > 7){
            $errorThree = " cannot be shorter than 4 letters or longer than 8 letters";
            displayError($fieldName, $errorThree);

            return 0;
        }
        if(ctype_alpha($data) && strlen($data) > 3 && strlen($data) < 8){
            return strtoupper(str_shuffle($data));
        }

        
    }

    $errorCount = 0;

    $words = array();

    $words[] = validateWord($_POST['Word1'], "Word 1");
    $words[] = validateWord($_POST['Word2'], "Word 2");
    $words[] = validateWord($_POST['Word3'], "Word 3");
    $words[] = validateWord($_POST['Word4'], "Word 4");


    foreach($words as $ward){
        if($ward === 0){
            $errorCount++;
        }
    }

    if($errorCount>0){
        echo "Please use the \"back\" button to re-enter the data.<br/>\n";
    }
    else{
        $wordnum = 0;

        // $testWord = $_POST['Word1'];
        // echo "$_POST <br />";
        // echo "$testWord <br />";

        foreach($words as $word){
            echo"Word".++$wordnum.": $word<br />\n";
        }
    }
        
?>
</body>
</html>