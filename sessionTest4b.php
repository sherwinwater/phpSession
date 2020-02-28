<?php
    session_start();
    $name = isset($_POST["txtName"]) ? htmlentities($_POST["txtName"]) : "";
    if (!empty($name)) {
        $_SESSION["userName"] = $name;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
 
        <title>Example 4</title>
    </head>
    <body>
        <h1>Example 4</h1>
         
        <?php 
        if (!empty($name)) {
            echo "<h2>Welcome, $name!</h2>";
        } else {
            echo "<h2>Welcome!</h2>";
        }
         print_r($_SESSION);
        ?>
        <a href="sessionTest4a.php">Back to First Page</a>
    </body>
</html>