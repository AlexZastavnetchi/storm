<?php
include_once 'configuration.php';

$conn = mysqli_connect($host, $user, $pass, $db);
if($conn === false){
    die("Conectare nereusita.". mysqli_connect_error());
}
?>
