<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] ++;
} else {
    $_SESSION['counter'] = 1;
}

$msg = "You have visited this page " . $_SESSION['counter'];
$msg .= " in this session.";
?>

<html>

    <head>
        <title>Setting up a PHP session</title>
    </head>

    <body>
        <?php echo ( $msg ); ?>

        <p>
            To continue  click following link <br />

            <a  href = "nextpage.php?<?php echo htmlspecialchars(SID); ?>">
        </p>
    </body>

</html>