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
    } else {
        echo "<script>
        alert('Please Fill Registration Form !!');
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body style="background-color:darkgray">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <form action="index.php" method="post">
                    <h1>Student Portal</h1>
                    <div class="form-group">
                        <label for="fname">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign-up</button>
                </form>
            </div>
            <div class="col-6">
                <?php
                include_once "data_select.php";
                ?>
            </div>
        </div>

    </div>

</body>

</html>