<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S</title>
</head>
<body>
    <?php 
 $results = ["Saif"=>50,"Tanim"=>80,"Abdullah"=>20,"Joys"=>80];
    ?>
     <table border="2">
        <tr>

            <th>Student name</th>
            <th>Obtanined score</th>

        </tr>

        <?php
        foreach ($results as $name => $score) {
            echo "<tr>";
            echo "<td> $name</td>";
            echo "<td>$score</td>";
            echo "</tr>";
        }


        ?>

        <tr>
            <td colspan="2">
                <?php $maxscore = max($results);
                $student = array_search($maxscore, $results);
                echo "Maximum score $maxscore obtainde by $student";


                ?>

            </td>
        </tr>

    </table>
</body>

</html>
</body>
</html>