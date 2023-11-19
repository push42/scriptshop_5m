<?php
require_once __DIR__ . '/../../config/config.php';

// Function to save user information to the database
function save_user_info($username, $browser, $os, $ip_address, $dnt_header, $local_storage, $session_storage, $cookies, $language, $referrer, $page_load_time) {
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO user_logs (username, browser, os, ip_address, dnt_header, local_storage, session_storage, cookies, language, referrer, page_load_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $browser, $os, $ip_address, $dnt_header, $local_storage, $session_storage, $cookies, $language, $referrer, $page_load_time]);

    $pdo = null;
}

// Gather user information
$username = ""; // Populating later
$browser = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Unknown';
$os = php_uname('s');
$ip_address = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP) ?? 'Unknown';
$dnt_header = isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] === '1' ? 1 : 0;
$local_storage = filter_input(INPUT_SERVER, 'HTTP_LOCAL_STORAGE', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Not Supported';
$session_storage = filter_input(INPUT_SERVER, 'HTTP_SESSION_STORAGE', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Not Supported';
$cookies = filter_input(INPUT_SERVER, 'HTTP_COOKIE', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Not found';
$language = filter_input(INPUT_SERVER, 'HTTP_ACCEPT_LANGUAGE', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Not found';
$referrer = filter_input(INPUT_SERVER, 'HTTP_REFERER', FILTER_SANITIZE_URL) ?? 'Not found';
$page_load_time = filter_input(INPUT_SERVER, 'REQUEST_TIME_FLOAT', FILTER_SANITIZE_NUMBER_FLOAT) ?? 'Unknown';

// Save user information to the database
save_user_info($username, $browser, $os, $ip_address, $dnt_header, $local_storage, $session_storage, $cookies, $language, $referrer, $page_load_time);

// Log user information to a file
$log_data = date('Y-m-d H:i:s') . " - Username: $username, Browser: $browser, OS: $os, IP Address: $ip_address, DNT Header: $dnt_header, Local Storage: $local_storage, Session Storage: $session_storage, Cookies: $cookies, Language: $language, Referrer: $referrer, Page Load Time: $page_load_time\n";
file_put_contents('user_logs.txt', $log_data, FILE_APPEND | LOCK_EX);

// Set a cookie for user visit
setcookie("UserVisit", date("Y-m-d H:i:s"), time() + (86400 * 30), "/"); // Expires in 30 days
?>