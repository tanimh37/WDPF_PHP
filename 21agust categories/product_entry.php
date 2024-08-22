<?php require_once("dbconfig.php") ; ?>

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

      $sql =  "SELECT * FROM catagories" ;
      $data = $db->query($sql) ;





    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO products(id,Product_Name,product_details,Product_Price,Product_Quantity,product_categories) VALUES (NULL ,'$pname', '$pdetails','$pprice','$pquantity','$category')";
        
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
        Category :<br>
        <select name="category" id="">
        <option value="">Select One</option>
<?php 

while($row = $data->fetch_assoc()) { ?>
 <option value='<?php echo $row['cat_id']?>'><?php echo $row['cat_name']?></option>
 <?php
 }

?>

        </select><br>

        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>