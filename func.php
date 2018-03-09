<?php

$db = new mysqli("localhost", "root", "root", "loft_final_001");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['street'] . " " . $_POST['home'] . " " . $_POST['part'] . " " . $_POST['appt'] . " " . $_POST['floor'];
$details = $_POST['comment'];

echo "<hr>";
var_dump($_POST);
echo "<hr>";

if($_POST['email'] !== "") {
    if($_POST > 0) {
        $user = findUser($db, $email);
        if ($user === 0) {
            $db->query(insertUser($name, $phone, $email));
            $db->query(orderDetails ($user, $address, $details));
            echo "User registered";
        } else {
            echo "User authorized";
            $db->query(orderDetails ($user, $address, $details));
        }
    } else {
        echo "error";
    }
} else {
    echo "No data";
}



function insertUser($name, $phone, $email)
{
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    return $sql;
}

function findUser($db, $email)
{

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $db->query($sql);
    if($result->num_rows) {
        $data = $result->fetch_assoc();
        return $data['id'];
    } else {
        return 0;
    }
}

function orderDetails ($user_id, $address, $details)
{
    $sql = "INSERT INTO orders (user_id, user_address, user_details) VALUES ('$user_id', '$address', '$details')";
    return $sql;
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


function sendEmail () {

}











echo "<hr>";
echo "<a href='index.php'>Back</a>";