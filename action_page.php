<?php

try {
    $conn = new mysqli("localhost", "root", "", "std");
} catch (Exception $ex) {
    echo $ex . "This is error";
    die("Connection failed");
}
echo "Database Connected Sucsessfully";

?>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$update = "UPDATE `tab` SET `Name`='Anwar',`Email`='anwar@gmail.com',`Password`='john22' WHERE Id=1";
$delete = " DELETE FROM tab WHERE Name='Ameer_ali' and Email='email@j.com' and Password='amjad' ";
$insert_data = "INSERT INTO `tab`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
$result = mysqli_query($conn, $delete);


?>