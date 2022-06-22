<?php

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$_result = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email' And password='$pass'");


if (mysqli_num_rows($_result)) {
    session_start();
    $_SESSION['email'] = $email;
    echo "<script>alert('Login Successfull')</script>";
    echo "<script>location.href = 'index.php'</script>";
} elseif (($email == "isratadmin@gmail.com" && $pass == "12345")) {
    $_SESSION['email'] = $email;
    echo "<script>location.href = 'admin/home.php'</script>";
} else {
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
