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
    $password = $_POST['pass'];
    $re_password = $_POST['re_pass'];
    if ($name == true and $email == true and $password == true and $re_password == $password) {
        $insert = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$password','$re_password')";
        $result = mysqli_query($conn, $insert);
        echo "<script>
                 alert('Thankyou Your Data Submited Successfully !!');
                 window.location = 'index.php';
             </script>";
    } else if ($name == true and $email == true and $password == true and $re_password != $password) {
        $insert = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$password','$re_password')";
        $result = mysqli_query($conn, $insert);
        echo "<script>
                 alert('Your Password Didnt Match Please Re Enter Password!!');
                 window.location = 'index.php';
             </script>";
    } else if ($_POST == false) {
        echo "<script>
        alert('Please Fill Registration Form !!')
    </script>";
    }
}
?>
<?php

?>