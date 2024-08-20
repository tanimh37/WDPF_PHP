<?php require_once("dbconfig.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>

<body>
    <table border="1">

        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Details</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>


        </tr>

        <?php
        $sql = "SELECT * FROM Products";
        $data = $db->query($sql); ?>

        <?php while ($row = $data->fetch_assoc()) { ?>
            <tr>
                <td> <?php echo $row['id'] ?></td>
                <td> <?php echo $row['Product_Name'] ?></td>
                <td> <?php echo $row['product_details'] ?></td>
                <td> <?php echo $row['Product_Price'] ?></td>
                <td> <?php echo $row['Product_Quantity'] ?></td>
                <td> <?php  ?> <a onclick="return confirm('Are you sure to delete')" href="product_delete.php?id=<?php echo $row['id'] ?>"><img src="dlt.png" alt="" width="20"></a></td>

            </tr>

        <?php
        } ?>

    </table>
    <br>
    <a href="product_entry.php">New Product</a>
</body>

</html>