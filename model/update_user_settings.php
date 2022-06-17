<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// echo $fixedEmail;
require_once '../config.php';

$id_user = $_POST['idOfUser'];
$email_user = $_POST['emailOfUser'];
$password_user = $_POST['passwordOfUser'];
$name_user = $_POST['nameOfUser'];
$createdAt_user = $_POST['createdAtOfUser'];
$updatedAt_user = $_POST['updatedAtOfUser'];
$mailer_user = $_POST['mailerOfUser'];
$mailHost_user = $_POST['mailHostOfUser'];
$mailPort_user = $_POST['mailPortOfUser'];
$mailUsername_user = $_POST['mailUsernameOfUser'];
$mailPassword_user = $_POST['mailPasswordOfUser'];
$mailEncryption_user = $_POST['mailEncryptionOfUser'];
$mailFromAddress_user = $_POST['mailFromAddressOfUser'];
$mailFromName_user = $_POST['mailFromNameOfUser'];

$data = array();

// if(no results){ // if there are no results (meaning no account with that email address exist)
// if (mysqli_num_rows($sqlResult) == 0) {
$query = "UPDATE users SET
`email` = '$email_user',
`password` = '$password_user',
`name` = '$name_user',
`created_at` = '$createdAt_user',
`updated_at` = '$updatedAt_user',
`mailer` = '$mailer_user',
`mail_host` = '$mailHost_user',
`mail_port` = '$mailPort_user',
`mail_username` = '$mailUsername_user',
`mail_password` = '$mailPassword_user',
`mail_encryption` = '$mailEncryption_user',
`mail_from_address` = '$mailFromAddress_user',
`mail_from_name` = '$mailFromName_user'  WHERE id = '$id_user';";
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