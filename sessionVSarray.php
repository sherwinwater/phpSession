<?php
session_start();
//$_SESSION = ["Hello World!", "Bye", "ABC"];
if (!isset($_SESSION[0])) {
    $_SESSION["hello"] = "hello world";
    $array1[0] = "w";
}

if (isset($_POST["txtInputKey"]) && isset($_POST["txtInputValue"])) {
    $newkey = $_POST["txtInputKey"];
    $newvalue = $_POST["txtInputValue"];
    $array1[$newkey] = $newvalue;
    $_SESSION[$newkey] = $newvalue;
}
print_r($_SESSION) . "<br><br>";
//echo "session_id(): " . session_id() . "<br>COOKIE: " . $_COOKIE["PHPSESSID"] . "<br><br>";

//session_destroy();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Session Variables </h1>
        <p>Select a session variable to delete </p>

        <?php
        foreach ($_SESSION as $key => $value) {
            echo '<input type="checkbox" name="chk[]" value="' . $value . '">' . "example" . $key . ": " . $value . "<br>";
        }
        echo "-------array-------" . "<br>";
        foreach ($array1 as $key => $value) {
            echo '<input type="checkbox" name="chk[]" value="' . $value . '">' . "example" . $key . ": " . $value . "<br>";
        }
        ?>

        <form method="POST" action="session61_1.php">

            <input type="checkbox" name="chk[]" value="deleteall" ><?php echo "Delete all" ?> <br>

            <p>Add a new session variable </p>
            Key:<input type="text" name="txtInputKey"><br>
            Value:<input type="text" name="txtInputValue"><br>
            <input type="submit" name="submit" value="Submit Changes">
        </form>

    </body>
</html>


