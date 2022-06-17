<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
require_once '../config.php';
    # code...
    $_SESSION['userSettingsUserEmail'] = $_POST['userSettingsEmail'];
    echo 'UserSettingsSuccessful';
}
?>