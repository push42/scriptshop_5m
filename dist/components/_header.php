<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact - My Script Collection</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/hero.css">
        <link rel="stylesheet" href="assets/header.css">
        <link rel="stylesheet" href="assets/contact.css">
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" type="image/png" href="assets/images/favicon-16x16.png">
        <link rel="icon" sizes="32x32" type="image/png" href="assets/images/favicon-32x32.png">
        <link rel="icon" sizes="96x96" type="image/png" href="assets/images/favicon-96x96.png">
        
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
<!-- Improved Header Section -->
<header class="bg-zinc-950 text-gray-100 py-5 relative">

    <div class="container mx-auto flex items-center justify-between">
        <!-- Branding -->
        <a href="index.php" class="text-2xl font-semibold ml-4 flex items-center">
            <i class="fas fa-code mr-2"></i> FiveM Scripts
        </a>

        <!-- Hamburger Menu Button (Small Screens) -->
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none focus:ring focus:ring-purple-500 mr-4">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Menu (Large Screens) -->
        <nav class="hidden md:flex md:items-center md:gap-6">
            <a href="index.php" class="text-lg hover:text-purple-400 font-semibold">My Scripts</a>
            <a href="contact.php" class="hover:text-purple-400 font-semibold">Contact</a>
            <a href="faq.php" class="hover:text-purple-400 font-semibold">F.A.Q</a>
            <a href="proof.php" class="hover:text-purple-400 font-semibold">Ownership Proof</a>
            <a href="#" id="open_preferences_center" class="hover:text-purple-400 font-semibold">Cookie Settings</a>
            <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php" class="hover:text-purple-400 font-semibold">Logout</a>
            <?php endif; ?>
        </nav>
    </div>

    <!-- Responsive nav menu, hidden on medium and larger screens, shown when hamburger is clicked -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <a href="index.php" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">My Scripts</a>
        <a href="contact.php" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">Contact</a>
        <a href="faq.php" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">F.A.Q</a>
        <a href="proof.php" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">Ownership Proof</a>
        <a href="#" id="open_preferences_center" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">Cookie Settings</a>
        <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php" class="block px-4 py-2 text-sm hover:bg-gray-800 font-semibold">Logout</a>
        <?php endif; ?>
    </div>
</header>


<script>
    // Burger-Menu Script
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
 
</script>