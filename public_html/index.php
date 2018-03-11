<?php



if (strpos($_SERVER['REQUEST_URI'], "admin") !== false) {
    require_once('../app/admin.php');
} else {

}


require_once 'template.php';