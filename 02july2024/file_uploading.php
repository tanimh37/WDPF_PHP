<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

if (isset($_POST['submit'])) {
    // print_r($_POST) ;
    // echo"<hr>";
    // print_r($_FILES) ;

    $temp = $_FILES['photo']['tmp_name'];

    $filename = $_FILES['photo']['name']; //saiful.jpg
    $filedata = pathinfo($filename);

    $file_ext = strtolower($filedata['extension']);
    $allowed_ext =["jpg" , "jepg" , "png"] ;
    $filesize = $_FILES['photo']['size'];
    $allowedsize = 307200;
    $path = "photos/" . $filename;
    $errors = [];

    if ($filesize > $allowedsize) {
        $errors[] = "within 300 KB is allowed";
    }

    if(!in_array($file_ext, $allowed_ext)) {
        $errors[] = "allowed file types jpg , png , jpeg ";
    }

    if (count($errors) > 0) {
        foreach ($errors as $err) {
            echo $err . "<br>";
        }
    } else {
        $status = move_uploaded_file($temp, $path);
        if ($status) echo "Successfully Uploaded";
    }
}

?>



</body>

<form action="" method="post" enctype="multipart/form-data">
    <label form="name">Name:</label><br>
    <input type="text" name="name"> <br>
    <label form="email">Email:</label><br>
    <input type="text" name="email"> <br>
    <input type="file" name="photo"> <br>
    <input type="submit" name="submit" value="send">


</form>
</body>

</html>