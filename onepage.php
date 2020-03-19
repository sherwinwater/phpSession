<?php
session_start();
$access = $_POST["guess"];
$un = $_SESSION[$access] = $access;
echo "USERID is $un" . "<br>";
print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>One Page PHP Application</title>
    </head>
    <body>
        <div>
            <?php

            ?>
            <form method="post" action="onepage.php">
                <p>Try your guess here: <input type="text" name="guess" /></p>
                <input type="submit" name="submit" value="Submit Changes">

            </form>
        </div>
    </body>
</html>