<?php
use GeoIp2\Record\Location;

include '../config/config.php';
// Load in the Header
require './components/_header.php';

// Initialize variables for login errors or messages
$loginError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']);

    try {
        $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the user exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // User found and password correct
            // Proceed to log the user in (start session, set session variables, etc.)
            // Redirect to a different page or display a success message
            $_SESSION['user_id'] = $user['id']; // Set the session variable holding the user's ID
            $_SESSION['user_name'] = $user['username']; // Set the session variable, assuming $user['id'] holds the user's ID
            header("Location: functions/login_status.php?status=success");
        } else {
            // User not found or password incorrect
            $loginError = 'Invalid username or password.';
            header("Location: functions/login_status.php?status=error");
        }
    } catch (PDOException $e) {
        $loginError = 'Error during login. Please try again.';
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
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
            <h2 class="text-white text-3xl font-bold text-center my-10">Login to Your Account</h2>

            <!-- Display login errors if any -->
            <?php if ($loginError): ?>
                <div class="bg-red-500 text-white text-center p-3 rounded mb-4">
                    <?php echo $loginError; ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="login.php" method="post" class="max-w-md mx-auto bg-zinc-900 p-8 rounded shadow">
                <div class="w-full mb-4">
                    <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="w-full mb-4">
                    <input class="w-full px-4 py-2 bg-zinc-700 text-white border rounded-md focus:border-purple-500 focus:ring focus:ring-opacity-40 focus:ring-purple-300" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
// Load in the Footer
require './components/_footer.php';
?>
