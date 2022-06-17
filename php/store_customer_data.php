<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once '../config.php';

    $unique_id = $_POST['unique_Id'];

    $unique_url = mysqli_real_escape_string($link, $_POST['unique_Url']);

    $customer_data = mysqli_real_escape_string($link, $_POST['customer_Data']);

    $user_name = mysqli_real_escape_string($link, $_POST['username']);

// echo $id;

    $query = "INSERT INTO customer_data

(

    uniqueId,

    uniqueUrl,

    user,

    customerData

)

 VALUES

 (

'" . $unique_id . "',

'" . $unique_url . "',

'" . $user_name . "',

'" . $customer_data . "'

     );";

    $result = mysqli_query($link, $query);

    if ($result) {

        echo $unique_url;

        $last_inserted_id = mysqli_insert_id($link);

        // echo '<script>window.location="../superadmin.php";</script>';

        // -------------------------------------------------------------------------------

        // -------------------------------------------------------------------------------

        // echo $last_inserted_id;

    } else {

        echo "Error: " . $query . "<br>" . mysqli_error($link);

    }

}

// $query = "DELETE FROM `rates` WHERE id=$id";

// if (mysqli_query($link, $query)) {

//     echo "Data Deleted Successfully";

// } else {

//     echo "ERROR: Could not delete " . mysqli_error($link);

// }

// }