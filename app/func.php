<?php

require_once "database.php";
require_once "user_info.php";

function authorize($db,$name, $email, $phone)
{
    $sql = "INSERT INTO users (name, email, phone) VALUES ('".$name."', '".$email."', '".$phone."')";
    $db->query($sql);
    echo "New user registered";
}




?>