<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../config.php';

    // _____________________________________________
    $user_name = $_POST['userName'];
    $inputsMsg = mysqli_real_escape_string( $link , $_POST['inputsmessage'] );
    $summaryMsg = $_POST['summarymessage'];
  $allMsg = $inputsMsg . $summaryMsg;
    $emailHtml = $inputsMsg . $summaryMsg;
    $query = "INSERT INTO email_data
     (`user`,`email_data`)
     VALUES
     (
     '".$user_name."',
     '".$allMsg."'
 );";
    $result = mysqli_query($link, $query);
    if ($result) {

        echo "Created successfully";

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    // _____________________________________________

}

// $query = "DELETE FROM `rates` WHERE id=$id";
// if (mysqli_query($link, $query)) {
//     echo "Data Deleted Successfully";
// } else {
//     echo "ERROR: Could not delete " . mysqli_error($link);
// }
// }