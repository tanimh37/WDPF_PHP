<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Product Entry</h3>
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO products(id,Product_Name,product_details,Product_Price,Product_Quantity) VALUES (NULL ,'$pname', '$pdetails','$pprice','$pquantity')";
        require_once("dbconfig.php");
       $result= $db->query($sql);
        if ($db->affected_rows){
            echo "successfully Added" ;
        }
        else
        echo "Failed" ;
    }
    ?>


    <a href="all_products.php">Product List</a>

    <form action="" method="post">

        Product Name: <input type="text" name="pname" placeholder="Enter product name"> <br>
        Product Details: <textarea  id="" name="pdetails" placeholder="enter your product details"></textarea> <br>
        Product Price: <input type="number" name="pprice" placeholder="Enter product price"> <br>
        Product Quantity: <input type="number" name="pquantity" placeholder="Enter product quantity"> <br>

        <input type="submit" name="submit" value="ADD">

    </form>
</body>

</html>