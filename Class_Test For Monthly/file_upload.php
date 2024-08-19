
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['submit'])) {
    $info = $_FILES['photo'] ;
    $obj = new file($info);
    $obj->upload() ;
}
?>
<?php
        class file
        {
            public $fileinfo;
        
        
            public function __construct($x)
            {
                $this->fileinfo = ($x);
            }
        
            public function upload()
            {
                $info = $this->fileinfo;
                $name = $info['name'];
                $tempname = $info['tmp_name'];
                $filesize = $info['size'];
                $allowedsize = 512000;
                $allowedtypes = ["jpg", "png","pdf","docx"];
                $errors = array();
        
                    $fullname = pathinfo($name);
            $ext = strtolower($fullname['extension']);
        
                if ($filesize > $allowedsize) {
                    $errors[] = "File size must be 500 kb";
                }
        
                if (!in_array($ext, $allowedtypes)) {
                    $errors[] = "$ext is not allow";
                }
        
                if (count($errors) > 0) {
                    foreach ($errors as $err) {
                        echo $err . "<br>";
                    }
                } else {
                    if (move_uploaded_file($tempname, "upload/" . $name)) {
                        echo "uploaded complete";
                    }
                }
            }
        }
        

?>



    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>