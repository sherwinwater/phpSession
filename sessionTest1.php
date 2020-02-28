<?php

session_start();
$random = isset($_GET["random"]) ? htmlentities($_GET["random"]) : 0;
$cancel = isset($_GET["cancel"]) ? htmlentities($_GET["cancel"]) : "no";

if (!isset($_SESSION["test"])) {
    echo "<p>No session found - starting a session now.</p>";
    $_SESSION["test"] = $random;
} else {
    echo "<p>Session found: " . $_SESSION["test"] . "</p>";
}
if ($cancel == "yes") {
    echo "<p>Clearing Session...</p>";
    session_destroy();
}
echo "<p><a href='sessionTest1.php?random=" . rand(1, 10000) . "&cancel=no'>Reload this page</a></p>";  //??
echo "<p><a href='sessionTest1.php?cancel=yes'>Destroy session</a></p>";
?>

<!--a. Load the page. What is the output? Why?
b. Click the "Reload this page" link. What is the output? Why? Click the link as many times as you need to.
c. Click the "Destroy session" link. What is the output? Why?
d. What do you think you will see if you click the "Reload this page" link again? See if you are correct.

a. You should see "No session found - starting a session now." because the if statement on line 6 is true: the session variable doesn't exist on the first load. The if statement on line 12 is false, so the "Clearing Session..." message doesn't appear.
b. Note that the URL has a random number in it (this is generated when the Reload this page link is displayed). But this number doesn't appear on the page: You only see "Session found: 0". When we first loaded the page in part a, the session variable didn't exist and there was no random number (default was given as 0 on line 3). Therefore, when line 8 was executed the first time we loaded the page, the value 0 was stored in the session variable. When we reload the page, the if statement on line 6 is false, causing line 10 to execute: this prints the current value of the session variable (0, from the previous page load). The new random number in the URL is never assigned to the session variable, because line 8 only executes when the session variable doesn't exist.
c. We see "Session found: 0" and the "Clearing Session..." message. The first line is explained in part b. The second line occurs because the if statement on line 12 is true (the value "yes" was passed via the URL and captured on line 4).
d. We would expect to see the same output we saw in part a.-->