<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_POST['submit'])){
            $n =$_POST['$number'];
            echo primeCheck($n);
        }

        function primeCheck($n){
            if ($n==1) {
                return $n . "is a  prime number" ;
            }
            else if ($n == 2) {
                return  $n . "Is a prime number";

            }
            else {
                for ( $x = 2; $x < $n; $x++) {
                    if ($n % $x == 0) {
                        return $n . " Is not a prime number";

                    }
                }
                return $n . "Is a prime number";
        }
    }
        ?>




    <form method="post">

    <input type="text" name="number"> <br>
    <input type="submit" name="submit" value="Check">


    </form>
</body>
</html>