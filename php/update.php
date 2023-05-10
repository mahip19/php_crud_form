<?php

if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = trim($_GET['id']);

    $q = "SELECT * FROM user_info WHERE id=$id";
    $res = mysqli_query($conn, $q);


    $res_data = $res ? mysqli_fetch_assoc($res) : 0;

    if ($res_data > 0) {
        $row = mysqli_fetch_assoc($res);
        // print_r($res_data);
    } else {
        echo 'some error';
        header("Location: read.php?error=asadas");
    }
} else if (isset($_POST['edit'])) {
    include "../db_conn.php";
    // var_dump($_POST);
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    // echo $id . " " . $name . " " . $email . " " . $age;
    if ($name == "" || $age == "" || $email == "") {
        // echo "emptyu argu" . "<br>";
        // var_dump($res_data);
        header("Location: ../update.php?error=empty_arguments");
    } else {
        $q = "UPDATE user_info SET name='$name', email='$email', age='$age' WHERE id='$id' ";
        $res_data = mysqli_query($conn, $q);

        if ($res_data) {
            header("Location: ../read.php?successfull");
            // var_dump($res_data);
        } else {
            // echo "this is res_data " . var_dump($res_data);
            // echo "<br>";
            header("Location: ../update.php?error=ASDASD");
        }
    }
} else {
    // header("Location: read.php");
    // var_dump($_POST);
    print_r($_POST);
}