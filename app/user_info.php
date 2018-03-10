<?php
echo "User info:<br>";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['street'] . " " . $_POST['home'] . " " . $_POST['part'] . " " . $_POST['appt'] . " " . $_POST['floor'];
$details = $_POST['comment'];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Address: " . $address . "<br>";
echo "Details: " . $details . "<br>";
