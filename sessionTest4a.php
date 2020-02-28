<?php
    session_start();
     
    $reset = isset($_GET["reset"]) ? htmlentities($_GET["reset"]) : "false";
    if ($reset) {
        session_destroy();
    }
     
    $name = isset($_SESSION["userName"]) ? htmlentities($_SESSION["userName"]) : "";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
 
        <title>Example 4</title>
    </head>
    <body>
        <h1>Example 4</h1>
         
        <form method="post" action="sessionTest4b.php">
            <input type="text" name="txtName" placeholder="Enter your name."
                   value = <?php echo $name ?>>
<!--            <?php echo " value='$name'";?>>-->
            <input type="submit">
            <a href="sessionTest4a.php?reset=true">Log Out</a>
        </form>
    </body>
</html>