<?php
    $servername = "localhost";
    $username = "root";
    $password = "4156";
    $db_name = "sports_db";
$conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>