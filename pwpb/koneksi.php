<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_crud";

$koneksi = mysqli_connect( $host , $username, $password, $database);

if (mysqli_connect_error()){
    echo "opps! koneksi database gagal : --> " . mysqli_connect_error();
}
?>