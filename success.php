<?php
include_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $select = "SELECT * FROM tab ";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
    echo "<h1>$row[name]<h1>";
    ?>

</body>

</html>