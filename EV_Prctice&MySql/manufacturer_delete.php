<?php $db = new mysqli("localhost:3310","root","","tclk60") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Manufacturer</h3>
    <?php 
    if(isset($_POST['submit'])){
        $id = $_POST['manu'];
        $db->query("DELETE FROM manufacturer WHERE id = '$id' ");
        if($db->affected_rows>0){
            echo "Successfully Deleted";
        }
    }
    ?>


    <?php
    $data =$db->query("SELECT * FROM manufacturer")  ?>
    <form action="" method="post">
        <select name="manu" id="">
            <option value="">Select One</option>
            <?php
            while($row = $data->fetch_object()) {
            ?>
            <option value="<?php echo $row->id?>"><?php echo $row->name ?></option>
            <?php } ?>
        </select> <br>
        <input type="submit" name="submit" value="DELETE">
        
    </form>
    <a href="product.php">Product List</a>

</body>
</html>