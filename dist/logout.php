<?php
session_start();

// Destroy the session to log out
session_destroy();

// Redirect to the home page after logging out
header('Location: index.php');
exit();
?>
