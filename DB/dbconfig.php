<?php
    $hostname="127.0.0.1";
    $username="root";
    $passwod="";
    $dbname="cargo";

    $conn= new mysqli($hostname,$username,$passwod,$dbname);
    if ($conn->connect_error) {
        die("Database connection error " . $conn->connect_error);
    }


?>