<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Account creation</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="../assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/custom.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/hero.css">
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" type="image/png" href="../assets/images/favicon-16x16.png">
        <link rel="icon" sizes="32x32" type="image/png" href="../assets/images/favicon-32x32.png">
        <link rel="icon" sizes="96x96" type="image/png" href="../assets/images/favicon-96x96.png">
        
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



<body class="bg-zinc-950 text-white">

<?php
session_start();
require '../components/_header.php';
?>

<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <?php 
        if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <h1 class="text-3xl font-bold text-green-400 mb-4">Account Created Successfully!</h1>
            <p class="text-lg">Welcome to our community. You can now log in with your new account.</p>
        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
            <h1 class="text-3xl font-bold text-red-400 mb-4">Account Creation Failed!</h1>
            <p class="text-lg">Unfortunately, we were unable to create your account. Please try again.</p>
        <?php else: ?>
            <h1 class="text-3xl font-bold text-gray-400 mb-4">Unexpected Page</h1>
            <p class="text-lg">It seems you've reached this page by mistake.</p>
        <?php endif; ?>
        <a href="../index.php" class="mt-6 inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Go Back Home</a>
        <a href="../register.php" class="mt-6 ml-4 inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Try Again</a>
    </div>
</div>

<?php require '../components/_footer.php'; ?>

</body>
</html>