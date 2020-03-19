<?php
session_start();
echo "session_id: " . session_id()."<br>";
echo "_SESSION::  ";
print_r($_SESSION) . "<br><br>";

if (!isset($_SESSION["example1"])) {
    $_SESSION["example1"] = "Hello,World!";
}
if (!isset($_SESSION["example2"])) {
    $_SESSION["example2"] = "Bye";
}
if (!isset($_SESSION["example3"])) {
    $_SESSION["example3"] = "Welcome Back!";
}
// add
$addKey = isset($_POST['txtInputKey']) ? htmlentities($_POST['txtInputKey']) : "";
$addValue = isset($_POST['txtInputValue']) ? htmlentities($_POST['txtInputValue']) : "";
if (!empty($addKey) && !empty($addValue)) {
    $_SESSION[$addKey] = $addValue;
}

echo "<br>"."After start"."<br>";
echo "_SESSION::  ";
print_r($_SESSION) . "<br><br>";

//session_destroy();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Session Variables </h1>
        <p>Select a session variable to delete </p>    
        <form method="POST" action="sessionDeleteAddData2.php">
            <?php
            if (!empty($_SESSION)) {
            foreach ($_SESSION as $key => $value) {
            echo '<input type="checkbox" name="chk[]" value="' . $value . '">' . $key . ": " . $value . "<br>";
        }
        }
        ?>
            <input type="checkbox" name="chk[]" value="deleteall" ><?php echo "Delete all" ?> <br>

            <p>Add a new session variable </p>
            Key:<input type="text" name="txtInputKey"><br>
            Value:<input type="text" name="txtInputValue"><br>
            <input type="submit" name="submit" value="Submit Changes">
        </form>
    </body>
</html>


