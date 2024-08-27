<?php $mysqli = new mysqli("localhost:3310","root", "","classicmodels") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search page</title>
</head>
<body>
    <h3>Search Products</h3>


    <form action="" method="get">
        <input type="text" name="term" placeholder="Search Here"> <br>
        <input type="submit" name="search" value="SEARCH">
    </form>
    <?php 
    if(isset($_GET['search'])) {
        $search = $_GET['term'];
       $result= $mysqli->query("SELECT productCode,productName,buyPrice FROM products WHERE productName LIKE '%$search%'");

        $records = $result->num_rows;
        echo "with the keyword $search we have found number of $records";
    }

    while($row =  $result->fetch_object()) {
        echo "product Code:" . $row->productCode . "Product Name:" . $row->productName . "Product Price" . $row->buyPrice . "<hr>";
     }
    ?>

</html>