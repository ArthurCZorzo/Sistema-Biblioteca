<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "library";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connection failed".$conn->error);
?>