<?php
    $cn=mysqli_connect("localhost","root", "")
        or die("Could not connect to the Server".mysqli_connect_error());
    mysqli_select_db($cn, "hotel")
        or die("Could not find the Database");
?>