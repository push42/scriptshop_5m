<?php
session_start();

// Destroy the session to log out
session_destroy();

// Redirect to the login page or home page after logging out
header('Location: login.php');
exit();
?>
