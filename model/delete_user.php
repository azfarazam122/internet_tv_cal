<?php
require_once '../config.php';

// echo $id;
$query = "DELETE FROM `users` WHERE email='".$_POST['emailOfUser']."'";
if (mysqli_query($link, $query)) {
    echo "Deleted Successfully";
} else {
    echo "ERROR: Could not delete " . mysqli_error($link);
}