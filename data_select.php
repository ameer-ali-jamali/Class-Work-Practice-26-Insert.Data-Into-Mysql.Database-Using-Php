<?php
$select = "SELECT * FROM tab ";
$result = mysqli_query($conn, $select);
echo "<hr>";
while ($data = mysqli_fetch_assoc($result)) {
    echo "<table class='table table-striped table-dark table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>ID</th>";
    echo "<th scope='col'>NAME</th>";
    echo "<th scope='col'>EMAIL</th>";
    echo "<th scope='col'>PASSWORD</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th>$data[Id]</th>";
    echo "<td>[Name]</td>";
    echo "<td>[Email]</td>";
    echo "<td>[Password]</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}
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
</head>

<body>
    <?php
    ?>
</body>

</html>