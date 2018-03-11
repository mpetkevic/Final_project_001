<?php

require_once "database.php";
require_once "user_info.php";

function userRegistration($db,$name, $email, $phone)
{
    $sql = "INSERT INTO users (name, email, phone) VALUES ('".$name."', '".$email."', '".$phone."')";
    $db->query($sql);
    echo "New user registered";
    return userExists($db,$email);

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

function orderDetails ($db,$userId, $address, $details)
{
    $sql = "INSERT INTO orders (user_id, user_address, user_details) VALUES ('$userId', '$address', '$details')";
    $db->query($sql);
    $sql = "SELECT * FROM orders WHERE 1 ORDER BY id DESC LIMIT 1";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    return $data;
}

function ordersCount ($db, $id)
{
    $sql = "SELECT * FROM orders WHERE user_id='$id'";
    $result = $db->query($sql);
    $orders = 0;
    for ($row = 0; $row < $result->num_rows; $row++) {
        if ($data= $result->fetch_assoc()) {
            $orders++;
        }
    }

    return $orders;
}

function sendMail ($user, $order, $orderCount) {
    $to = $user['email'];
    $subject = "Новый заказ №" . $order['id'];
    $msg = "Ваш заказ будет доставлен по адресу: " . $order['user_address']. "<br>";
    $msg .= "DarkBeefBurger за 500 рублей, 1 шт, <br>";
    $msg .= "Спасибо! Это уже ". $orderCount . " заказ";
//    echo "Order to: " . $to . " " . $subject . "<br>";
//    echo $msg;
    mail($to, $subject, $msg);

}

?>