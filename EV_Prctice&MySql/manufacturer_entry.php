<?php $db = new mysqli("localhost:3306","root","","tclk60") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if($db->query("CALL add_manufacturer('$name','$address','$contact')")){
            echo "Successfully added";
        } else {
            echo "Failed to add";
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your manufacturer name"> <br>
        <textarea name="address" id="" placeholder="Inter address"></textarea><br>
        <input type="text" name="contact" placeholder="Please enter cell number" > <br>
        <input type="submit" name="submit" value="ADD">
    </form>
    <a href="manufacturer_delete.php">Manufacturer List</a>
</body>
</html>