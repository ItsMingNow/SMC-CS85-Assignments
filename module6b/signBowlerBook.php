<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sign Guest Book </title>
</head>
<body>
    <?php
        if(empty($_POST['name'])||empty($_POST['age'])||empty($_POST['average']))
        echo "<p>You must enter your first and last name. Click your browser's back button to return to the Guest Book.</p>\n";
        else
        {
            $Name = addslashes($_POST['name']);
            $age = addslashes($_POST['age']);
            $average = addslashes($_POST['average']);
            $GuestBook = fopen("bowlbook.txt", "ab");
            if(is_writeable("bowlbook.txt")){
                if(fwrite($GuestBook, $Name . ", " . $age . ", " . $average . "\n"))
                    echo "<p>Thank you for ENTERING THE GREATEST TOURNAMENT!</p>\n";
                else
                    echo "<p>Cannot add your name to the TOURNAMENT.</p>";
            }
            else 
                echo "<p>Cannot write to the file. </p>\n";
            fclose($GuestBook);
        }
    ?>
</body>
</html>