<?php
include "db_conn.php";

$q = "SELECT * FROM user_info";
$data = mysqli_query($conn, $q);

// var_dump($data);