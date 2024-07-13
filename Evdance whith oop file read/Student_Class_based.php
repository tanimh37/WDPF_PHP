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
    $obj = new Student('result.txt');
    $obj->show_result($stide);

}
    // echo"<pre>" ;

    // print_r($datas) ;

    class Student {

        public $datasi;
        //public $arrayData;
        
        public function __construct($file) {
            $this->datasi = file($file);
            //$this->datasi = $file ;
            //$this->arrayData = file($this->datasi) ;
        }

        public function show_result($tanim) {
    
    foreach ($this->datasi as $data) {
        $line = explode("|", $data) ;
        list($id , $name , $score ,$result) = $line ;
        if($id==$tanim){
            $output = "ID : " .  $id ."<br>" . " Name : " . $name . "<br>" . " Score : " . $score . "<br>" . " Result  : " . $result;
          
        }
        
    }
    echo $output;
    }
}
?>




    <form action="" method="post">
        <select name="sti" id="">
            <option value="12">Saif</option>
            <option value="21">Zamil</option>
            <option value="3">Tanim</option>

        </select>

        <input type="submit" name="submit" id="" value="Show Result">
    </form>
</body>
</html>