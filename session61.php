<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Session Variables </h1>
        <p>Select a session variable to delete </p>
        <form method="POST" action="session62.php">

            <?php
            $_SESSION = ["Hello World!", "Bye", "ABC"];
            foreach ($_SESSION as $key => $value) {
                echo '<input type="checkbox" name="chk[]" value="' . $value . '">' . "example" . $key . ": " . $value . "<br>";
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


