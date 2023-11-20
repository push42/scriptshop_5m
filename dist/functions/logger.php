<?php

function logFailedLogin($pdo, $username) {
    $ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address of the user

    $stmt = $pdo->prepare("INSERT INTO failed_logins (username, ip_address) VALUES (?, ?)");
    $stmt->execute([$username, $ip_address]);
}


?>