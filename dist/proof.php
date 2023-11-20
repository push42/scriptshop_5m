<?php
// Load in the Header
require './components/_header.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Proof - My Script Collection</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/hero.css">
        <link rel="stylesheet" href="assets/css/proof.css">
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

    <body class="bg-zinc-950 text-white font-sans">
    <div class="container mx-auto p-8">
        <div class="items-center justify-center min-h-screen grid md:grid-cols-2">
            
            
            <!-- Video Section -->
            <div class="w-full max-w-4xl bg-black rounded overflow-hidden shadow-lg mb-10">
                <video controls autoplay muted class="w-full">
                    <source src="assets/images/products/proof/proof_video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <!-- Description Section -->
            <div class="bg-zinc-800 p-6 rounded-lg shadow-lg text-center">
                <h1 class="text-4xl font-bold mb-6 text-center text-purple-600">Script Ownership Proof</h1>
                <p class="text-lg mb-4">Need more proof? I am ready to provide screen sharing or any other form of verification. Authenticity is always priority.</p>
                <a href="contact.php" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Contact Me</a>
            </div>
        </div>
    </div>

    <?php
    // Load in the Footer
    require './components/_footer.php';
    ?>
</body>
</html>