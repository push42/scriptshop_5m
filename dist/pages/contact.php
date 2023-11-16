<?php
// Show error's (debugging)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Load in the Header
require '../components/_header.php';
// Load in the Hero
require '../components/_hero_contact.php';




// Define an associative array for package information
$package_info = [
    'no-package' => [
        'title' => 'No Package selected',
        'description' => 'A collection of essential ESX scripts to boost your server performance.',
        'price' => '50.00',
    ],
    'wasabi-package' => [
        'title' => 'Wasabi Package',
        'description' => 'A collection of essential ESX scripts to boost your server performance.',
        'price' => '50.00',
    ],
    'codem-package' => [
        'title' => 'CodeM Package',
        'description' => 'An advanced set of scripts for roleplaying scenarios.',
        'price' => '75.00',
    ],
    'okok-package' => [
        'title' => 'okok Package',
        'description' => 'A collection of high quality ESX scripts (some are also standalone) made by okok. All scripts shown below are included in this package.',
        'price' => '65.00',
    ],
    // more packages as needed
];

// Pass the package information to JavaScript
echo "<script>var packageInfo = " . json_encode($package_info) . ";</script>";


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact - My Script Collection</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="../assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/custom.css">
        <link rel="stylesheet" href="../assets/hero.css">
        <link rel="stylesheet" href="../assets/header.css">
        <link rel="stylesheet" href="../assets/contact.css">
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

    <!-- Contact Form Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center">Contact Form<span class="text-purple-700">.</span></h2>
            <p class="text-sm font-sans font-semibold text-center mb-6">This is a subheader</p>
            <form action="/path-to-your-form-handler" method="post" class="max-w-4xl mx-auto bg-zinc-900 rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                    <!-- Full Name -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="fullName" class="block mb-2">Your Name: <span class="required">*</span></label>
                        <input type="text" id="fullName" name="fullName" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="Your Name">
                    </div>

                    <!-- Package -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="productPackage" class="block mb-2">Package:</label>
                        <select id="productPackage" name="productPackage" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded">
                            <?php foreach ($package_info as $package => $info): ?>
                                <option value="<?php echo $package; ?>"><?php echo $info['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- CFX Username -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="cfxUsername" class="block mb-2">CFX Username: <span class="required">*</span></label>
                        <input type="text" id="cfxUsername" name="cfxUsername" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="CFX-Username for transfer">
                    </div>

                    <!-- Email -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="email" class="block mb-2">Email: <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="Email to concact you back">
                    </div>

                    <!-- Product ID -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="productId" class="block mb-2">Product ID(s):</label>
                        <input type="text" id="productId" name="productId" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="Product ID(s) of your interest">
                    </div>

                    <!-- Discord Nutzername -->
                    <div class="md:col-span-1 lg:col-span-1">
                        <label for="discordId" class="block mb-2">Discord:</label>
                        <input type="text" id="discordId" name="discordId" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="Your Discord ID (ex. Max#0011)">
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2 lg:col-span-3">
                        <label for="message" class="block mb-2">Message: <span class="required">*</span></label>
                        <textarea id="message" name="message" required class="w-full px-3 py-2 bg-zinc-700 border border-zinc-600 rounded" placeholder="Please enter your Message here.." rows="4"></textarea>
                    </div>
                </div>

                <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Send Message</button>
            </form>
        </div>
    </section>

<?php
// Load in the Footer
require '../components/_footer_contact.php';
?>


</body>
</html>