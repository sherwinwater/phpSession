<?php
session_start();

// -- code to show error messages:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// -------------

$_SESSION["e1"]="hello";
$_SESSION["example1"] = "Hello, World!";
$ex2 = isset($_SESSION["example2"]) ? $_SESSION["example2"] : "no data set";
?>

<!DOCTYPE html>
<html>
    <body>

        <?php
// Echo session variables that were set on previous page
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
        echo $_SESSION["hello"];
        echo $ex2."<br>";
        echo $_SESSION["e1"]."<br>";
        unset($_SESSION["e1"]);
        echo $_SESSION["e1"]."<br>";

        print_r($_SESSION);

// remove all session variables
//session_unset();
// destroy the session
//session_destroy();
        ?>

    </body>
</html>