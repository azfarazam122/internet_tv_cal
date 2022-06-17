<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
require_once '../config.php';


$sql = "SELECT  * FROM `users` WHERE `email`= '".$_POST['userEmail']."' AND `password`= '".$_POST['userPassword']."' ";

$data = array();
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $tmp = $row;
            array_push($data, $tmp);
        }

        $jsonData = json_encode($data);
        $_SESSION['username'] = $_POST['userEmail'];
        // $_SESSION['password'] = $_POST['userPassword'];
    //     echo '<script type="text/javascript">
    //     var url = window.location.href;
    //         url = url.replace("login.html", "index.html");
    //        window.location = url;
    //   </script>';
    echo "Successful";
    

    } else {
        echo "No records matching your query were found.";
        
    }
} else {
    echo "ERROR: Could not able to execute ".$sql. " . mysqli_error($link)";
}

}
?>