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

$select = "SELECT * FROM tab ";

$update = "UPDATE `tab` SET `Name`='Anwar',`Email`='anwar@gmail.com',`Password`='john22' WHERE Id=1";
$delete = " DELETE FROM tab WHERE Name='Ameer_ali' and Email='email@j.com' and Password='amjad' ";
$insert_data = "INSERT INTO `tab`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";

$result = mysqli_query($conn, $insert_data);
echo "<hr>";
if ($result) {
    echo "This is User Name = " . " " .  $name . "<br>" . "This is User Email = " . $email . "<br>" . "This is User Password = " . $password . "<br>" . "<hr>" . "Data Submited Sucessfully";
} else {
    echo "New User Data Not Submited";
}

// while ($select == "") {
//     echo "<table>";
//     echo "<tr>";
//     echo "<th>Name</th>";
//     echo "<th>Email</th>";
//     echo " </tr>";
//     echo "<tr>";
//     echo "<td>$name</td>";
//     echo "<td>$email</td>";
//     echo "</tr>";
//     echo "</table>";
// }

?>