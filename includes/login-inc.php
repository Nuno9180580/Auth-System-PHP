<?php

if (isset($_POST["submit"])) {
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../register.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        
    }
} else {
    header("Location: ../index.php?error=accessforbidden");
    exit();
}
