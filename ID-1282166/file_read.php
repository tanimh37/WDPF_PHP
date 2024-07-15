<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans-2</h1>

<?php 
if (isset($_REQUEST['submit'])) {
    $stide = $_REQUEST['sti'] ;
    $obj = new Student('result.txt');
    $obj->show_result($stide);

}


    class Student {

        public $datasi;
  
        
        public function __construct($file) {
            $this->datasi = file($file);

        }

        public function show_result($tanim) {
    
    foreach ($this->datasi as $data) {
        $line = explode("|", $data) ;
        list($id , $name , $score ) = $line ;
        if($id==$tanim){
            $output = "ID : " .  $id ."<br>" . " Name : " . $name . "<br>" . " Batch : " . $score ;
          
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