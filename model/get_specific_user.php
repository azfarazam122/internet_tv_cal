<?php
require_once '../config.php';
// Attempt select query execution
// echo $_SESSION['citadel_user'];
// $emailForAccountUpdate = $_SESSION['citadel_user'];

$email = $_POST['emailOfUser'];

$sql = "SELECT * FROM users WHERE email = '$email' ";
$data = array();
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $tmp = $row;
            array_push($data, $tmp);
        }

        $jsonData = json_encode($data);
        echo $jsonData;

        // mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}