<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if (isset($_REQUEST['submit'])) {
    $stide = $_REQUEST['sti'] ;
    $obj = new Product('result.txt');
    $obj->show_result($stide);

}


    class Product {

        public $datasi;

        
        public function __construct($file) {
            $this->datasi = file($file);

        }

        public function show_result($tanim) {
    
    foreach ($this->datasi as $data) {
        $line = explode("|", $data) ;
        list($id , $name , $score ) = $line ;
        if($id==$tanim){
            $output = "Product-Id : " .  $id ."<br>" . " Name : " . $name . "<br>" . " Product Price : " . $score ;
          
        }
        
    }
    echo $output;
    }
}
?>




    <form action="" method="post">
        <select name="sti" id="">
            <option value="10">Mascara</option>
            <option value="11">Eye-liner</option>
            <option value="12">Foundation</option>
            <option value="13">Dove-Sampoo</option>

        </select>

        <input type="submit" name="submit" id="" value="Show Result">
    </form>
</body>
</html>