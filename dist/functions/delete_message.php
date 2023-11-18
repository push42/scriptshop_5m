<?php
include '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['messageId'])) {
    $messageId = $_POST['messageId'];

    try {
        // Create a new PDO connection
        $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM contact_messages WHERE id = ?");
        $stmt->execute([$messageId]);

        if ($stmt->rowCount() > 0) {
            echo "Message deleted successfully.";
        } else {
            echo "No message found with that ID.";
        }
    } catch (PDOException $e) {
        // Handle any errors
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request";
}
?>
