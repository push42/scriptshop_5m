<?php
include '../../config/config.php';

session_start();

header('Content-Type: application/json'); // Set the content type as JSON

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch messages
    $stmt = $pdo->prepare("SELECT id, fullName, email, message, submitted_at, productPackage, cfxUsername, productId, discordId FROM contact_messages ORDER BY submitted_at DESC");
    $stmt->execute();
    
    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results); // Output the messages as JSON

} catch (PDOException $e) {
    // Handle the exception
    echo json_encode(['error' => $e->getMessage()]);
}
