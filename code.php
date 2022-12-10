<?php
include_once "conn.php";

function hash_pass($originalPassword)
{
    return md5($originalPassword);
}

// Signup Data To Database  ...

if (isset($_POST['submit'])) {
    if ($_POST == true) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $md5_pass = hash_pass($_POST['pass']);
        $md5_re_pass = hash_pass($_POST['re_pass']);
        if ($name && $email && $md5_pass == true && $md5_pass == $md5_re_pass) {
            $query = "INSERT INTO `tab`(`name`, `email`, `pass`, `re_pass`) VALUES ('$name','$email','$md5_pass','$md5_re_pass')";
            try {
                $result = mysqli_query($conn, $query);
            } catch (Exception $ex) {
                die("<script>
                alert('This Email Already Exists Please Try Other Email ) !!');
                window.location = 'index.php';
                </script>");
            }
            if ($result != false) {
                die("<script>
            alert('Your Data Submited Successfully  => ( $name = $email = Password ( ********* ) ) !!');
            window.location = 'index.php';
            </script>");
            } else {
                die("<script>
                alert('This Email Already Exists Please Try Other Email ) !!');
                window.location = 'index.php';
                </script>");
            }
        } else if ($name && $email && $md5_pass == true && $pass != $md5_re_pass || $md5_re_pass != $md5_pass) {
            die("<script>
            alert('Your Password Coudnt Macth => ( $md5_pass == $md5_re_pass )!!');
            window.location = 'index.php';
            </script>");
        } else {
            die("<script>
            alert('Please Fill Registration => ( $name = $email = $md5_pass ) !!');
            window.location = 'index.php';
            </script>");
        }
    }
}

// Login ...
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    if ($email and $md5_pass == true) {
        $sql = "SELECT * FROM `tab` WHERE email='$email' AND pass='$md5_pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if ($row != null) {
            die("<script>
                alert(' Wellcome =>  $row[name] ');
                window.location = 'success.html';
                </script>");
        } else {
            echo "<script>
            alert('Incorrect Email or Password !!');
            window.location = 'index.php';
            </script>";
        }
    } else {
        die("<script>
        alert('!! Empty Value  => ($email = $md5_pass) !!');
        window.location = 'index.php';
        </script>");
    }
}


// Update Data From Database ...

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $md5_pass = hash_pass($_POST['pass']);
    if ($name and $email and $md5_pass == true) {
        $sql = "SELECT * FROM `tab` WHERE email='$email' AND pass='$md5_pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        if ($row != null) {
            $query = "UPDATE tab SET name='$name' WHERE  email='$email' ";
            $re = mysqli_query($conn, $query);
            echo "<script>
                alert('Your Name Updated Success fully => ( $name ) !!');
                window.location = 'index.php';
                </script>";
            die();
        } else {
            echo "<script>
            alert('Incorrect Email or Password !!');
            window.location = 'index.php';
            </script>";
        }
    } else {
        die("<script>
        alert('Please Fill Update Form  => ( $name = $email = $md5_pass ) !!');
        window.location = 'index.php';
        </script>");
    }
}


// Delete Data From Database ...

if (isset($_POST['delete'])) {
    if ($_POST == true) {
        $email = $_POST['email'];
        $md5_pass = hash_pass($_POST['pass']);
        if ($email && $md5_pass == true) {
            $sql = "SELECT * FROM `tab` WHERE email='$email' AND pass='$md5_pass'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            if ($row == true) {
                $query =  "DELETE FROM tab WHERE email='$email' AND pass='$md5_pass' ";
                $re = mysqli_query($conn, $query);
                die("<script>
                alert('Your Data Deleted Success fully');
                window.location = 'index.php';
                </script>");
            } else {
                die("<script>
            alert('Incorrect Email or Password !!');
            window.location = 'index.php';
            </script>");
            }
        }
    } else {
        die("<script>
    alert('Empty Value');
    window.location = 'index.php';
    </script>");
    }
}



?>
<?php

?>