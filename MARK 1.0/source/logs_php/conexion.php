<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "informatica";
    $cn = mysqli_connect($servername, $username, $password, $database);
    if (!$cn) {
        ECHO "ERROR IN THE SERVER NOT CONNECT ";
    }
?>