<?php

if (isset($_POST['create'])) {
    include "../db_conn.php";
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

    $user_data = 'name=' . $name . ' email=' . $email . ' age=' . $age;
    // echo ($user_data);
    if (empty($name)) {
        header("Location: ../index.php?error=Name is required&$user_data");
    } else if (empty($email)) {
        header("Location: ../index.php?error=Email is required&$user_data");
    } else if (empty($age)) {
        header("Location: ../index.php?error=Age is required&$user_data");
    } else {
        $q = "INSERT INTO user_info(name, email, age) VALUES ('$name', '$email', '$age')";
        $res = mysqli_query($conn, $q);
        if ($res) {
            header("Location: ../read.php?success=successfully created");
            echo "data submitted !";
        } else {
            header("Location: ../index.php?error=unknown error occurred&$user_data");
            echo "data not submitted !";
        }
    }
}