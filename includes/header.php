<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc.php';

$loginLayout = "";
$logoutLayout = "";
if (isset($_SESSION['sessionId'])) {
    $loginLayout = "style='display:none;'";
    $logoutLayout = "style='display:block;'";
} else {
    $loginLayout = "style='display:block;'";
    $logoutLayout = "style='display:none;'";
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTH SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div <?php echo $loginLayout; ?>>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                </ul>
            </div>
            <div <?php echo $logoutLayout; ?>>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </header>