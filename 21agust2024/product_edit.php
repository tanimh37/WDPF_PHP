<?php require_once("dbconfig.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Product Edit</h3>

    <?php

    $id = $_REQUEST['id'];

    // print_r($row);

    if (isset($_POST['update'])) {
        extract($_POST);
        $sql = "UPDATE products set Product_Name ='$pname', product_details= '$pdetails' , Product_Price='$pprice' , Product_Quantity='$pquantity' WHERE id='$id'";
        require_once("dbconfig.php");
        $result = $db->query($sql);
        if ($db->affected_rows) {
            echo "successfully Added";
        } else {
            echo "Failed";
        }
    }
    $sql = "SELECT * FROM products WHERE id ='$id'";
    $data = $db->query($sql);
    $row = $data->fetch_object();
    ?>


    <a href="all_products.php">Product List</a>

    <form action="" method="post">

        Product Name: <input type="text" name="pname" placeholder="Enter product name" value="<?php echo $row->Product_Name; ?>"> <br>
        Product Details: <textarea id="" name="pdetails" placeholder="enter your product details"><?php echo $row->product_details; ?></textarea> <br>
        Product Price: <input type="number" name="pprice" placeholder="Enter product price" value="<?php echo $row->Product_Price; ?>"> <br>
        Product Quantity: <input type="number" name="pquantity" placeholder="Enter product quantity" value="<?php echo $row->Product_Quantity; ?>"> <br>

        <input type="submit" name="update" value="UPDATE"> <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">

    </form>
</body>

</html>