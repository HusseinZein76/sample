<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>The available users are: </p>
    <table border="1" width="100%">
        <tr>
            <th>City</th>
            <th>Hotel Name</th>
            <th>Room</th>
            <th>Rate</th>
        </tr>
        <?php
            require_once("connection.php");
            $sql="select * from HotelRoom";
            $res=mysqli_query($cn, $sql)
                or die("Could not find the table");
            while($row=mysqli_fetch_array($res))
                 echo "<tr><td>{$row['City']}</td><td>{$row['HotelName']}</td>
                         <td>{$row['Room']}</td><td>{$row['Rate']}</td></tr>";

        mysqli_free_result($res);
        mysqli_close($cn);
        ?>
</table>
</body>
</html>