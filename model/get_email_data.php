<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    require_once '../config.php';

    $sql = "SELECT * FROM `email_data`";

    $data = array();
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $row = array_map('utf8_encode', $row);
                $tmp = $row;
                array_push($data, $tmp);
            }
            $jsonData = json_encode($data);
            // echo $result;
            echo $jsonData;

        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}