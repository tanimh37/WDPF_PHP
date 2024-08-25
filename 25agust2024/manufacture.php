<?php $mysqli = new mysqli("localhost:3310","root","","evidence_exam"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (isset($_POST['submit'])) {
   $id = $_POST['company'];

   $mysqli->query("DELETE FROM manufacturer WHERE id = '$id'");
   if($mysqli->affected_rows) {
    echo "<h1>Successfully Deleted</h1>";
   }
}

?>


    <?php 
    $result=$mysqli->query("SELECT * FROM manufacturer");
    ?>


    <form action="" method="post">
    <select name="company" id="">
    <option value="">Select One</option>
    <?php 
    while($row = $result->fetch_object()) { ?>
    <option value="<?php echo $row->id; ?>"> <?php echo $row->name; ?></option>

        <?php
    }
    ?>
    
    </select>
<input type="submit" name="submit" value="DELETE">
    </form>
    <br>
    <a href="products.php">All Manufactue</a>
</body>
</html>