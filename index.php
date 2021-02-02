    <?php
    require_once 'includes/header.php';

    if (isset($_SESSION['sessionId'])) {
        echo "You are logged in!";
    } else {
        echo "HOME";
    }

    require_once 'includes/footer.php';
    ?>