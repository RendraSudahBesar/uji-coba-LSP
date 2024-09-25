<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "stok2";

$kon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$kon){
    die("gagal". mysqli_errno());
}
?>