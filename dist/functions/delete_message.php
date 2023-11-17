<?php
include '../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['messageId'])) {
    $messageId = $_POST['messageId'];

    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM contact_messages WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $messageId); // "i" indicates the type is "integer"
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "Message deleted successfully.";
        } else {
            echo "No message found with that ID.";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
