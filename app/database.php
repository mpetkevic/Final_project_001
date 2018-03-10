<?php


$db = new mysqli("localhost", "root", "root", "loft_final_001");

if($db) {
    echo "DB Connected";
    echo "<hr>";
} else {
    echo "No DB Connection";
    echo "<hr>";
}