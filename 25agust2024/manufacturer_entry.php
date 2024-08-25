<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Manufacturer</h3>
<?php
if(isset($_POST['submit'])) {
    extract($_POST);
    $mysqli->query("CALL add_manufacturer('$name','$address','$contact')");
}
?>


    <form action="">
        <input type="text" name="name" placeholder="Enter Manufacturer name"> <br>
        <textarea name="address" placeholder="Enter address" id=""></textarea><br>
        <input type="text" name="cotact"> <br>
        <input type="submit" name="submit" id="" value="SUBMIT">
    </form>
</body>
</html>