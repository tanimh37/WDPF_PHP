<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

    $category = $_POST['category'] ;

    switch ($category) {
    case "news":
    echo "What's happening around the world";
    break;
    case "weather":
    echo "Your weekly forecast";
    break;
    case "sports":
    echo "Latest sports highlights";
    echo "From your favorite teams";
    break;
    default:
    echo "Welcome to my web site";
    }
?>
    <form action="" method="post">

        <select name="category">


            <option value="default">Select Catagory</option>
            <option value="news">News</option>
            <option value="weather">Weather</option>
            <option value="soprts">Soprts</option>


        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>


