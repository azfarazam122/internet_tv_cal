<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {



require_once '../../config.php';



// Attempt select query execution

// echo $_SESSION['username'];

$uniq_id = $_GET['unique_id'];





// $email = $_POST['useremail'];



$sql = "SELECT * FROM customer_data WHERE uniqueId = '$uniq_id'";



$data = array();

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {



        while ($row = mysqli_fetch_assoc($result)) {

            $tmp = $row;

            array_push($data, $tmp);

        }



        $jsonData = json_encode($data);



        echo $jsonData;



    } else {

        echo "No records matching your query were found.";

    }

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



}





?>



