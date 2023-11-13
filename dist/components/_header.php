<?php
require '../vendor/autoload.php';

?>

<!-- Header Section -->
<header class="bg-zinc-950 text-white py-4 relative">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Flag Symbols -->
        <div class="hidden sm:flex sm:items-center sm:absolute sm:top-0 sm:right-0 sm:mt-4 sm:mr-4 z-30">
            <!-- Wrap in a div with conditional visibility -->
            <a href="index_en.php" class="ml-2">
                <img src="./assets/images/english.png" alt="EN" class="w-4 h-auto mt-2"> <!-- Adjusted size -->
            </a>
            <a href="index_de.php" class="ml-2">
                <img src="./assets/images/german2.png" alt="DE" class="w-4 h-auto mt-2"> <!-- Adjusted size -->
            </a>
        </div>
        <!-- Branding and Hamburger Menu -->
        <a href="#" class="text-xl font-bold ml-4">FiveM Scripts</a>
        <!-- Hamburger menu button only visible on small screens -->
        <button id="menu-toggle" class="sm:hidden text-xl focus:outline-none focus:shadow-outline mr-4">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Full navigation menu for larger screens, hidden on small screens -->
        <nav class="hidden sm:flex sm:items-center sm:space-x-4">
            <a href="index_en.php" class="text-purple-700 font-bold">My Scripts</a>
            <a href="contact_en.php" class="hover:text-gray-400">Contact</a>
            <a href="impressum_en.php" class="hover:text-gray-400">Legal Disclosure</a>
            <a href="faq_en.php" class="hover:text-gray-400">F.A.Q</a>
            <a href="feedback_en.php" class="hover:text-gray-400">Give Feedback</a>
        </nav>
    </div>

    <!-- Responsive nav menu, hidden on medium and larger screens, shown when hamburger is clicked -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <a href="index_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">My Scripts</a>
        <a href="contact_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Contact</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Legal Disclosure</a>
        <a href="faq_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">F.A.Q</a>
        <a href="feedback_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Give Feedback</a>
    </div>
</header>

<script>
    // Get the button and the responsive menu element
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Add click event listener to the button
    menuToggle.addEventListener('click', function() {
        // Toggle the 'hidden' class on the mobile menu
        mobileMenu.classList.toggle('hidden');
    });
 
</script>