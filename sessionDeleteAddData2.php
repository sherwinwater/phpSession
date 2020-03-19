<?php
session_start();

echo "session_id: " . session_id() . "<br>";
echo "_SESSION::  ";
print_r($_SESSION) . "<br><br>";

// remove
$checks = isset($_POST["chk"]) ? $_POST["chk"] : "";
$sessionVars;
if ($checks) {
    foreach ($checks as $selected) {
        if ($selected == "deleteall") {
            unset($_SESSION);
        } else {
//            $newkey = array_search($selected, $_SESSION);
//            unset($_SESSION[$newkey]);

            $sessionVars[] = filter_var($selected, FILTER_SANITIZE_STRING);
            $_SESSION = array_diff($_SESSION, $sessionVars);
        }
    }
}

//echo "<br>" . "sessionVars::  ";
//print_r($sessionVars) . "<br>";

echo "<br>" . "After deleting the data" . "<br>";
echo "_SESSION::  ";
if (isset($_SESSION)) {
    print_r($_SESSION) . "<br><br>";
}

// add
$addKey = isset($_POST['txtInputKey']) ? htmlentities($_POST['txtInputKey']) : "";
$addValue = isset($_POST['txtInputValue']) ? htmlentities($_POST['txtInputValue']) : "";
if (!empty($addKey) && !empty($addValue)) {
    $_SESSION[$addKey] = $addValue;
}

//session_destroy();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Session Variables </h1>
        <p>Select a session variable to delete </p>    
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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


