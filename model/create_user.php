<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
require_once '../config.php';

$name = $_POST['nameOfUser'];
$email = $_POST['emailOfUser'];
$password = $_POST['passwordOfUser'];

$query = "INSERT INTO users
(
    name,
     email,
    password
)
 VALUES
 (
'$name',
'$email',
'$password'
     );";
$result = mysqli_query($link, $query);
if ($result) {

    echo "Created successfully";


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
?>