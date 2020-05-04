<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css" type="text/css">
</head>
<body>
    <?php include_once "php/header.php" ?>

    <table cellspacing=0 cellpadding=7>
        <tr>
            <th>Roll No.</th>
            <th>Name Of The Student</th>
            <th>Marks</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","","crud");
            $res = mysqli_query($conn,"select * from stu");
            while($row = mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>".$row['roll']."</td>";
                echo "<td>".$row['sname']."</td>";
                echo "<td>".$row['mks']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>