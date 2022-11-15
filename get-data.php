<?php
$select = "SELECT * FROM tab ";
$result = mysqli_query($conn, $select);

echo "<table class='table table-sm table-top table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>Id</th>";
echo "<th scope='col'>Name</th>";
echo "<th scope='col'>Email</th>";
echo "<th scope='col'>Password</th>";
echo "<th scope='col'>Re_Password</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<th>$data[id]</th>";
    echo "<td>$data[name]</td>";
    echo "<td>$data[email]</td>";
    echo "<td>$data[password]</td>";
    echo "<td>$data[re_password]</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
<?php

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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    ?>
</body>

</html>