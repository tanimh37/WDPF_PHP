<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Maximum Number And Minimum Number</h1>
    <?php
    if (isset($_POST['submit'])) {
        $numbers = $_POST["numbers"];
         $numArray =  explode(",", $numbers);

        $max  = $numArray[0];
        $min = $numArray[0];


        for ($i = 0; $i < count($numArray); $i++) {
            if ($numArray[$i] > $max) {
                $max = $numArray[$i];
            }

            if ($numArray[$i] < $min) {
                $min = $numArray[$i];
            }
        }
        echo "Maximum Number : $max" . "<br>Minimum Number : $min";
    }


    ?>

    <form action="" method="post">

        <input type="text" name="numbers" placeholder="enter multi letter"> <br>
        <input type="submit" name="submit" value="submit">


    </form>
</body>

</html>