
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Add a new hotel and room</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="txtCity" required></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td><input type="text" name="txtHotelName" required></td>
                </tr>
                <tr>
                    <td>Room</td>
                    <td><input type="text" name="txtRoom" required></td>
                </tr>
                <tr>
                    <td>Rate</td>
                    <td><input type="number" name="txtRate" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSubmit" value="Submit"></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </center>
    <p><a href="display.php">Display the available hotels</a></p>
    <?php
        if(isset($_POST['btnSubmit'])){
            if(trim($_POST['txtCity']) == "" || trim($_POST['txtHotelName']) == ""
                    || trim($_POST['txtRoom']) == "" || trim($_POST['txtRate']) == "")
                die("Please fill all fields");

            require_once("connection.php");
            $sql="insert into HotelRoom values('{$_REQUEST['txtCity']}', '{$_REQUEST['txtHotelName']}', 
                        '{$_REQUEST['txtRoom']}', {$_REQUEST['txtRate']})";

            mysqli_query($cn, $sql);
            if(mysqli_affected_rows($cn) > 0)
                echo "<p>A new record has been added.</p>";
            else
                echo "<p>Error.</p>";
            
                mysqli_close($cn);
        }
    ?>
</body>
</html>