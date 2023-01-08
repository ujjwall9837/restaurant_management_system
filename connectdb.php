<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rms";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn){
        die("404! Error");
    }
?>
