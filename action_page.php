<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php


try {
    $conn = new mysqli("localhost", "root", "", "std");
} catch (Exception $ex) {
    echo $ex . "This is error";
    // die("Connection failed");
} finally {
    echo "Finally";
}
echo "Connected Sucsessfull";

?>

<?php

$email = $_GET['email'];
$password = $_GET['password'];
echo $email . $password;

// $insert_data = "INSERT INTO `tab`(`Name`, `Email`, `Password`) VALUES ('$namee','$emailll','$passwordd')";
// $result = mysqli_query($conn, $insert_data);
// if (!$result == "") {
//     echo "Error";
// } else ("Data Submited Succesfully");


?>