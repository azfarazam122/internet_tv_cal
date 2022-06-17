<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
require_once '../config.php';
if ($_POST['adminEmail'] == "admin" && $_POST['adminPassword'] == "admin") {
    # code...
    $_SESSION['adminUsername'] = $_POST['adminEmail'];
    echo 'Successful';
}else{
    echo "";
}

}


?>