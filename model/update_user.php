<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// echo $fixedEmail;
require_once '../config.php';
$id = $_POST['idOfUser'];
$name = $_POST['nameOfUser']; 
$email = $_POST['emailOfUser'];
$password = $_POST['passwordOfUser'];

$data = array();

// if(no results){ // if there are no results (meaning no account with that email address exist)
// if (mysqli_num_rows($sqlResult) == 0) {
$query = "UPDATE users SET
`name` = '$name',
`email` = '$email',
`password` = '$password'  WHERE id = '$id';";
// UPDATE table_name
// SET column1 = value1, column2 = value2, ...
// WHERE condition;
$result = mysqli_query($link, $query);
if ($result) {

    echo "successfully Updated";

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
// } else {
//     echo "account already exists";
// }
}
?>