<?php
include '../../config/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Create PDO connection
        $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO contact_messages (fullName, productPackage, cfxUsername, email, productId, discordId, message) VALUES (:fullName, :productPackage, :cfxUsername, :email, :productId, :discordId, :message)");

        // Bind parameters to statement
        $stmt->bindParam(':fullName', $_POST['fullName']);
        $stmt->bindParam(':productPackage', $_POST['productPackage']);
        $stmt->bindParam(':cfxUsername', $_POST['cfxUsername']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':productId', $_POST['productId']);
        $stmt->bindParam(':discordId', $_POST['discordId']);
        $stmt->bindParam(':message', $_POST['message']);

        // Execute the statement
        $stmt->execute();

        // Redirect after successful insertion
        header("Location: ../contact_submit.php?status=success");
        exit;
    } catch (PDOException $e) {
        // Redirect or handle the error appropriately
        header("Location: ../contact_submit.php?status=error");
        exit;
    } finally {
        // Close the connection
        $pdo = null;
    }
}
?>
