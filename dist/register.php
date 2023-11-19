<?php
include '../config/config.php';
// Load in the Header
require './components/_header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $avatarPath = null;

    // Handle avatar upload
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        if ($_FILES['avatar']['size'] <= 8000000) { // 8MB max
            $filename = uniqid() . "-" . $_FILES['avatar']['name'];
            $destination = 'uploads/' . $filename;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $destination)) {
                $avatarPath = $destination;
            }
        }
    }

    try {
        $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert data into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, password, email, avatar) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $password, $email, $avatarPath]);

        // Redirect or display success message
        // header("Location: success_page.php");
        header("Location: functions/account_status.php?status=success");
        exit;
    } catch (PDOException $e) {
        // Handle error
        header("Location: functions/account_status.php?status=error");
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Create account</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/hero.css">
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" type="image/png" href="./assets/images/favicon-16x16.png">
        <link rel="icon" sizes="32x32" type="image/png" href="./assets/images/favicon-32x32.png">
        <link rel="icon" sizes="96x96" type="image/png" href="./assets/images/favicon-96x96.png">
        
        <meta name="mobile-web-app-capable" content="yes">
        <meta property="og:title" content="My Script Collection">
        <meta property="og:description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/5/5a/FiveM-Logo.png">
        <meta property="og:url" content="https://www.thiesbergenthal.com">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="My Script Collection">
        <meta name="twitter:description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="twitter:image" content="https://upload.wikimedia.org/wikipedia/commons/5/5a/FiveM-Logo.png">
        
        <link rel="canonical" href="https://www.thiesbergenthal.de">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/9d1f4cdd15.js" crossorigin="anonymous"></script>
</head>


<body class="bg-zinc-950">
    <div class="container mx-auto px-4 mb-40">
        <h2 class="text-white text-3xl font-bold text-center my-10">Create Your Account</h2>
        <form action="register.php" method="post" enctype="multipart/form-data" class="max-w-md mx-auto bg-zinc-900 p-8 rounded shadow">
            <div class="w-full mb-4">
                <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="w-full mb-4">
                <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="w-full mb-4">
                <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="w-full mb-4">
                <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="file" name="avatar" accept="image/*">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
// Load in the Header
require './components/_footer.php';

?>