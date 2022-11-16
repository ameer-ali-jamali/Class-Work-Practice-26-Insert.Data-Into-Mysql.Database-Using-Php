<?php
try {
    $conn = new mysqli("localhost", "root", "", "std");
} catch (Exception $ex) {
    echo $ex . "This is error";
    die("Connection failed");
}

//Note ..One time one code will work correctly
//Exp; If you want to login you will coment register ,button code and other login button codes ... 
// I will solve this problem as soon as possilbe after this all buttons works in one time..

if (isset($_POST['submit'])) {
    if ($_POST == true) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['pass'], true);
        $re_password = md5($_POST['re_pass'], true);
        if ($name && $email && $password ==  true && $password == $re_password) {
            $insert = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$password','$re_password')";
            $result = mysqli_query($conn, $insert);
            echo "<script>
                 alert('Your Data Submited Successfully !!');
             </script>";
            exit();
        } else if ($name && $email && $password == true && $password != $re_password) {
            echo "<script>
                 alert('Your Password Didnt Match Please Re Enter Password!!');
             </script>";
            exit();
        }
    }
}


// if (isset($_POST['login'])) {
//     // if ($_POST == true) {
//     $email = $_POST['email'];
//     $pass = md5($_POST['pass'], true);
//     if ($email and $pass == true) {
//         $sql = "SELECT * FROM tab WHERE email='$email' AND password='$pass'";
//         $result = mysqli_query($conn, $sql);

//         $row = mysqli_fetch_assoc($result);
//         if ($row['email'] === $email && $row['password'] === $pass) {
//             echo "Logged in!";

//             $_SESSION['user_name'] = $row['user_name'];

//             $_SESSION['name'] = $row['name'];

//             $_SESSION['id'] = $row['id'];

//             header("Location: home.php");

//             exit();
//         }
//     }
//     exit();
// }
//         if ($result) {
//             echo $login;
//             //     echo "<script>
//             //     alert('Login Successfully !!');
//             // </script>";
//         } else if ($result == false) {
//             echo "<script>
//                 alert(' Email or Password Wrong!!');
//             </script>";
//         }
//     } else if ($email == false) {
//         echo "<script>
//             alert('Please Input Email !!');
//         </script>";
//     }
// }






?>
<?php

?>