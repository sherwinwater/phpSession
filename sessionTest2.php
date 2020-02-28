<?php
session_start();
$cancel = isset($_GET["cancel"]) ? htmlentities($_GET["cancel"]) : "no";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Exercise 2</title>
    </head>
    <body>

        <?php
        //retrieve session data
        echo "<p>Pageviews=" . $_SESSION['views'] . "</p>";
        ?>

        <h1>Exercise 2</h1>

        <?php
        if (isset($_SESSION['views']))
            $_SESSION['views'] = $_SESSION['views'] + 1;
        else
            $_SESSION['views'] = 1;

        echo "<h2>Same Page</h2>";
        echo "<p>Views=" . $_SESSION['views'] . "</p>";
        echo "<p>" . $_SESSION["width"] . " x " . $_SESSION["height"] . "</p>";
        if ($cancel == "yes") {
            echo "<p>Clearing Session...</p>";
            session_destroy();
        }
        if ($cancel == "yes") {
            echo "<p>Clearing Session...</p>";
            session_destroy();
        }

        echo "<p><a href='sessionTest2.php'>Reload this page</a></p>";
        echo "<p><a href='sessionTest2.php?cancel=yes'>Destroy session</a></p>";
        ?>
    </body>
</html>