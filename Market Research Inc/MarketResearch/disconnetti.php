  <?php
session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $_SESSION = array();
        
        session_destroy();
        
        header("Location: home.php");
        exit;
    }
    ?>