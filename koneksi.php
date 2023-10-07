<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbarrozzaq";

$koneksi = new mysqli($server, $user, $password, $database);


if (!$koneksi){
    echo "koneksi gagal";
}



?>