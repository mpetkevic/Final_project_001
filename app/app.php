<?php

require_once "database.php";
require_once "user_info.php";
require_once "func.php";
$user = userExists($db, $email);


echo "<hr>Authorize:<br>";
if($_POST['email'] !== "") {
    if ($user === 0) {
        $user = userRegistration($db,$name, $email, $phone);
        echo "CODE IS WORKING";
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
    } else {
        echo "User exists & authorized";
    }
} else {
    echo "No data for user";
}

$userId = $user['id'];




$order = orderDetails ($db,$userId, $address, $details);



$orderCount = ordersCount($db, $userId);

sendMail($user, $order, $orderCount);


echo "<hr>";
echo "<a href='../public_html/index.php'>Back</a>";
?>