<?php

require_once "database.php";
require_once "user_info.php";
require_once "func.php";


echo "<hr>Authorize:<br>";
if($_POST['email'] !== "") {
    authorize($db,$name,$email,$phone);

} else {
    echo "No data for user registration";
}

echo "<hr>";
echo "<a href='../public_html/index.php'>Back</a>";
?>