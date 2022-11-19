<?php
try {
    $conn = new mysqli("localhost", "root", "", "std");
} catch (Exception $ex) {
    echo $ex . "This is error";
    die("Connection failed");
}

function hash_pass($originalPassword)
{
    return md5($originalPassword);
}

// Signup Data To Database  ...
// if (isset($_POST['submit'])) {
//     if ($_POST == true) {
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $md5_pass = hash_pass($_POST['pass']);
//         $md5_re_pass = hash_pass($_POST['re_pass']);
//         if ($name && $email && $md5_pass == true && $md5_pass == $md5_re_pass) {
//             $query = "INSERT INTO `tab`(`name`, `email`, `password`, `re_password`) VALUES ('$name','$email','$md5_pass','$md5_re_pass')";
//             $result = mysqli_query($conn, $query);
//             die("<script>
//             alert('Your Data Submited Successfully !!');
//             window.location = 'index.php';
//             </script>");
//         } else if ($name && $email && $pass == true && $pass != $re_pass) {
//             die("<script>
//             alert('Your Password Didnt Match Please Re Enter Password!!');
//             window.location = 'index.php';
//             </script>");
//         }
//     }
// }

// Update Data From Database ...

if (isset($_POST['update'])) {
    if ($_POST == true) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $md5_pass = hash_pass($_POST['pass']);
        $query = "UPDATE tab SET name='$name' WHERE  email='$email' and password='$md5_pass'";
        $re = mysqli_query($conn, $query);
        echo "<script>
            alert('Your Name Updated Success fully >>>> $name !!');
            window.location = 'index.php';
            </script>";
    }
}

//     if($email== and $md5_pass==)
//     $sql = "SELECT * FROM tab WHERE email='$email' and password='$md5_pass'";
//     $result = mysqli_query($conn, $sql);
//     if ($result == true) {
//         $query = "UPDATE tab SET name='$name' WHERE  email='$email' and password='$md5_pass'";
//         $re = mysqli_query($conn, $query);
//         echo "<script>
//     alert('Your Name Updated Success fully >>>> $name !!');
//     window.location = 'index.php';
//     </script>";
//         die();
//     }
// } else {
//     echo "<script>
//     alert('Please Fill The Form !!');
//     window.location = 'index.php';
//     </script>";
//     die();
// }
//     }
// }
//         if ($name && $email && $md5_pass == true) {
//             if ($sql != false) {
//               
//                 if ($result != false) {
//                     echo "<script>
//                    alert('Your Name Updated Success fully >>>> $name !!');
//                    window.location = 'index.php';
//                    </script>";
//                     die();
//                 }
//                 if ($result == false) {
//                     die("<script>
//                 alert('Some Error Please Try Again !!');
//                 window.location = 'index.php';
//                 </script>");
//                 }
//             }
//         }
//     } else if ($_POST == false) {
//         die("<script>
//         alert('No Data Fund !!');
//         window.location = 'index.php';
//         </script>");
//     }
// }


// Delete Data From Database ...
// if (isset($_POST['delete'])) {
//     if ($_POST == true) {
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $md5_pass = hash_pass($_POST['pass']);
//         if ($name && $email && $md5_pass == true) {
//             $delete = "DELETE FROM tab WHERE name='$name' and email='$email' and  password='$md5_pass'";
//             $result = mysqli_query($conn, $delete);
//             if ($result > 0) {
//                 die("<script>
//             alert('Your Data Deleted Success fully !!');
//             window.location = 'index.php';
//             </script>");
//             }
//             if ($result < 1) {
//                 die("<script>
//             alert('Some Error Try Again Later !!');
//             window.location = 'index.php';
//             </script>");
//             }
//         }
//     } else if ($_POST == false) {
//         die("<script>
//         alert('No Data Fund !!');
//         window.location = 'index.php';
//         </script>");
//     }
// }








?>
<?php

?>