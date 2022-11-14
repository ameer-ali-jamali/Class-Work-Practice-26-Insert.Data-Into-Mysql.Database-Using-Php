<?php
try {
    $conn = new mysqli("localhost", "root", "", "std");
} catch (Exception $ex) {
    echo $ex . "This is error";
    die("Connection failed");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($name == true and $email == true and $password == true) {
        $insert = "INSERT INTO `tab`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
        $result = mysqli_query($conn, $insert);
        echo "<script>
        alert('Thankyou Your Data Submited Successfully !!');
        window.location = 'index.php';
    </script>";
    } elseif ($_POST == true) {
        echo "<script>
        alert('Please Fill Registration Form !!');
    </script>";
    }
}
?>
<?php

?>