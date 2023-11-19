<?php
// Show error's (debugging)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Load composer
require '../vendor/autoload.php';
// include_once 'functions/logging.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>FiveM - My Script Collection</title>
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
        
<body class="bg-zinc-950 font-sans">
<!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
<script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
<!-- Google Analytics -->
<script type="text/plain" data-cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-HY18KG1YDX"></script>
<script type="text/plain" data-cookie-consent="tracking">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HY18KG1YDX');
</script>
<!-- end of Google Analytics-->

<noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/">TermsFeed</a></noscript>
<!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->


    
<video autoplay loop muted playsinline id="background-video" class="min-w-full min-h-full fixed opacity-30">
    <source src="./assets/images/test.mp4" type="video/mp4">
    <object data="./assets/images/bg.png" type="image/png">
        Your browser does not support the video tag and cannot display the image.
    </object>
</video>


<?php
// Load in the Header
require './components/_header.php';
// Load in the Hero
require './components/_hero.php';
// Load in the Info section
require './components/_info.php';
// Load in the Slider
require './components/_slider.php';
// Load in the Products
require './components/_products.php';
// Load in the Footer
require './components/_footer.php';
?>
        
        <script type="text/javascript" charset="UTF-8">
        
                document.addEventListener('DOMContentLoaded', function () {
                    cookieconsent.run({
                        "notice_banner_type": "simple",
                        "consent_type": "express",
                        "palette": "dark",
                        "language": "en",
                        "page_load_consent_levels": ["strictly-necessary"],
                        "notice_banner_reject_button_hide": false,
                        "preferences_center_close_button_hide": false,
                        "page_refresh_confirmation_buttons": false
                    });

                    // Find the accept button in the cookie consent banner
                    // Note: The selector might change depending on the actual structure of the banner
                    var acceptButton = document.querySelector('.cc-nb-okagree'); // Update this selector based on your actual button

                    // Attach event listener to the accept button
                    if (acceptButton) {
                        acceptButton.addEventListener('click', function() {
                            triggerLogging();
                        });
                    }
                });

                // Function to trigger logging.php
                function triggerLogging() {
                    fetch('./functions/logging.php', {
                        method: 'GET',
                        credentials: 'same-origin'
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        console.log('Success:', data);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
                }

        </script>
    </body>
</html>