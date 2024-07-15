<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number check</title>
</head>
<body>
    Ans-3
    <?php
if(isset($_POST['submit'])) {
        // print_r() ;

        $n =  $_POST['number'] ;

        echo primeCheck($n) ;
     }

        function primeCheck($n) {


            if ($n == 1) {
                return  $n . "Is not a prime number";
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
                return $n . " Is a prime number";

            }
        }




?>

    <form action="" method="post">
        <input type="text" name="number" placeholder="enter your chacking number"> 
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>