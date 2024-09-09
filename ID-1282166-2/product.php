<?php $db = new mysqli("localhost:3306","root","","class_exam") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans to the qs no - 3 </h2>
    <h3>Products Above -> 5000</h3>
    <?php 
    $data = $db->query("SELECT * FROM products_above_5000_price");

      ?>
      <table border="1">
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Manufacture_id</th>
        </tr>
       <?php while($row=$data->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row['id']?> </td>
            <td><?php echo $row['name']?> </td>
            <td><?php echo $row['price']?> </td>
            <td><?php echo $row['manufacturer_id']?> </td>



        </tr>
<?php
       } 
?>
      </table>
</body>
</html>