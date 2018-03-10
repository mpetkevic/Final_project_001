<?php

require_once "database.php";
require_once "user_info.php";
require_once "func.php";
$user = userExists($db, $email);

echo "<hr>Authorize:<br>";
if($_POST['email'] !== "") {
    if ($user === 0) {
        userRegistration($db,$name, $email, $phone);
    } else {
        echo "User exists & authorized";
    }
} else {
    echo "No data for user";
}

echo "<hr>";
echo "<a href='../public_html/index.php'>Back</a>";
?>