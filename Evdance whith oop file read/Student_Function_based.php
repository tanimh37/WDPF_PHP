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
    $stid = $_REQUEST['stid'] ;

      echo show_result($stid);}
    // echo"<pre>" ;

    // print_r($datas) ;

    function show_result($stid) {
        $datas = file('result.txt');
   

    foreach ($datas as $data) {
        $line = explode("|", $data) ;
        list($id , $name , $score ,$result) = $line ;
        if($id==$stid){
            $output = "ID: " . $id . "Name: " . $name . "Score: " . $score . "Result" . $result;
          
        }
        
    }
    echo $output;
    }

?>




    <form action="" method="post">
        <select name="stid" id="">
            <option value="1">Saif</option>
            <option value="2">Zamil</option>
            <option value="3">Tanim</option>

        </select>

        <input type="submit" name="submit" id="" value="Show Result">
    </form>
</body>
</html>