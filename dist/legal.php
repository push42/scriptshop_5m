<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Impressum</title>
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
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    </head>
<body class="bg-zinc-950 font-sans text-white">

<div id="app">
    <?php
    session_start();
    require './components/_header.php';
    ?>

    <!-- Legal Disclosure Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6">Legal Disclosure / Impressum<span class="text-purple-700">.</span></h2>
            <div class="bg-zinc-900 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Information in accordance with Section 5 TMG</h3>
                <p>{{ companyName }}</p>
                <p>{{ address }}</p>
                <p>{{ contactInfo }}</p>
            </div>
        </div>
    </section>

    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4">Disclaimer</h3>
                <p>{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>

    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4">Disclaimer</h3>
                <p>{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>

    <?php require './components/_footer.php'; ?>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            companyName: '[Your Name/Company Name]',
            address: '[Address]',
            contactInfo: '[Postal Code, City, Country]',
            phone: '[Your Phone Number]',
            email: 'your-email@example.com',
            website: 'www.yourwebsite.com',
            registrationInfo: '[Registration Details]',
            vatId: '[VAT ID]',
            disclaimerContent: '[Disclaimer Text]'
            // ... [other dynamic data] ...
        }
    });
</script>
</body>
</html>