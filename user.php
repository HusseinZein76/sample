<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="hotelroom.php">Add a new hotel room</a></p>
    <p>The available users are: </p>
    <table border="1" width="100%">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php
            require_once("connection.php");
            $sql= "select * from user";
            $res= mysqli_query($cn, $sql)
                or die("Could not find the table");
            while($row=mysqli_fetch_array($res))
                echo "<tr><td>{$row['Id']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td></tr>";
            
            mysqli_free_result($res);
            mysqli_close($cn);

         ?>
    </table>
</body>
</html>