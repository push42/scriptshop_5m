<?php
include '../../config/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $productPackage = $conn->real_escape_string($_POST['productPackage']);
    $cfxUsername = $conn->real_escape_string($_POST['cfxUsername']);
    $email = $conn->real_escape_string($_POST['email']);
    $productId = $conn->real_escape_string($_POST['productId']);
    $discordId = $conn->real_escape_string($_POST['discordId']);
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data
    $sql = "INSERT INTO contact_messages (fullName, productPackage, cfxUsername, email, productId, discordId, message)
            VALUES ('$fullName', '$productPackage', '$cfxUsername', '$email', '$productId', '$discordId', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../contact_submit.php?status=success");
        exit;
    } else {
        header("Location: ../contact_submit.php?status=error");
        exit;
    }
}
?>
