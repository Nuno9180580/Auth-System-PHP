<?php
require_once 'includes/header.php';
?>

<div>
    <h1>Register</h1>
    <p>Already have an account? <a href="login.php">Login!</a></p>

    <form action="" method="GET">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confPassword" placeholder="Confirm Password">
        <button type="submit">REGISTER</button>
    </form>
</div>

<?php
require_once 'includes/footer.php';
?>