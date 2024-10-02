<?php // la conexión a Northwind
include_once 'php/connection.php';
$con = connection();
?>
<?php // la query
$sqlQuery = "Select productName, productID, unitsInStock from products";
$result = $con->query($sqlQuery);
?>
<!--la tabla en html con estilo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Units in Stock</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['productID'] ?></td>
                <td><?= $row['productName'] ?></td>
                <td><?= $row['unitsInStock'] ?></td>
            </tr>
        <?php endwhile; ?>
        <?php $con->close(); ?>
    </table>
</body>
</html>


