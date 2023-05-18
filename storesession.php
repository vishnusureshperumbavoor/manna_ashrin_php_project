<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo "favcolor is " . $_SESSION["favcolor"] . ".<br>";
echo "favanimal is " . $_SESSION["favanimal"] . ".";
?>