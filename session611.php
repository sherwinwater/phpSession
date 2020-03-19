<?php
session_start();
$_SESSION["hello"] = "hello world";
if (isset($_POST["txtInputKey"])) {
    $newkey = $_POST["txtInputKey"];
    $_SESSION[$newkey] = $newkey;
}

//session_destroy();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Session Variables </h1>
        <?php
        print_r($_SESSION) . "<br><br>";
        ?>

        <form method="POST" action="session611.php">
            <p>Add a new session variable </p>
            Key:<input type="text" name="txtInputKey"><br>
            <input type="submit" name="submit" value="Submit Changes">
        </form>
    </body>
</html>


