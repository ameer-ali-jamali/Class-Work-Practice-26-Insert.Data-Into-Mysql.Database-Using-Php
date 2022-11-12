<?php
include_once "connection.php";
?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// $select = "SELECT * FROM tab ";
$insert = "INSERT INTO `tab`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
$update = "UPDATE `tab` SET `Name`='Anwar',`Email`='anwar@gmail.com',`Password`='john22' WHERE Id=1";
$delete = " DELETE FROM tab WHERE Name='Ameer_ali' and Email='email@j.com' and Password='amjad' ";

$result = mysqli_query($conn, $insert);
echo "<hr>";


// while ($data = mysqli_fetch_assoc($result)) {
//     echo "<hr>" . $data['Id'], $data['Name'] . $data['Email'] . $data['Password'];
// }



?>