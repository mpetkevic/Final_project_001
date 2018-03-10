<?php
echo "Users:<br>";
$db = new mysqli("localhost", "root", "root", "loft_final_001");

$sql = "SELECT * FROM users";
$result = $db->query($sql);
echo "<table border='1'>";
echo "<thead style='text-align: center; font-weight: bold;'><td>Name</td><td>Email</td><td>Phone</td></thead>";
for ($row = 0; $row < $result->num_rows; $row++) {
    $data = $result->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $data['name'] . "</td>" . "<td>" . $data['email'] . "</td>" . "<td>" . $data['phone'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr>";
echo "Orders:<br>";

$sql = "SELECT * FROM orders";
$result = $db->query($sql);
echo "<table border='1'>";
echo "<thead style='text-align: center; font-weight: bold;'><td>Order ID</td><td>User ID</td><td>Address</td><td>Details</td></thead>";
for ($row = 0; $row < $result->num_rows; $row++) {
    $data = $result->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $data['id'] . "</td>" . "<td>" . $data['user_id'] . "</td>" . "<td>" . $data['user_address'] . "</td>" . "<td>" . $data['user_details'] . "</td>";
    echo "</tr>";
}
echo "</table>";