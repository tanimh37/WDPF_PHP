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
