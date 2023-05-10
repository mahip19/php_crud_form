<?php

if (isset($_GET['id'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // echo $_GET['id'];
    $id = validate($_GET['id']);
    // $id = $_GET['id'];
    $q = "DELETE FROM user_info WHERE id=$id";
    // echo $q;
    $result = mysqli_query($conn, $q);

    $result = true;
    if ($result) {
        echo 'deleted ';
        header("Location: ../read.php");
    } else {
        echo "id = " . $id;
        header("Location: ../read.php?unknown_error");
    }
} else {
    echo 'no id in get';
    // header("Location: ../read.php");
}