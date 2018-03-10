<?php

require_once "database.php";
require_once "user_info.php";

function userRegistration($db,$name, $email, $phone)
{
    $sql = "INSERT INTO users (name, email, phone) VALUES ('".$name."', '".$email."', '".$phone."')";
    $db->query($sql);
    echo "New user registered";
}

function userExists($db, $email)
{
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $db->query($sql);
    if($result->num_rows) {
        $data = $result->fetch_assoc();
        //var_dump($data);
        echo "User exists";
        return $data;
    } else {
        echo "Find user: 0";
        return 0;
    }
}



?>