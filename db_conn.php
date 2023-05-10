<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db_name = "test";

$conn = mysqli_connect($server, $user, $pwd, $db_name);

if (!$conn){
    echo "connection failed";
}
