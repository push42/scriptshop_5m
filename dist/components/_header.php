<?php

?>

<!-- Header Section -->
<header class="bg-zinc-950 text-white py-4 relative">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Branding and Hamburger Menu -->
        <a href="#" class="text-xl font-bold ml-4">FiveM Scripts</a>
        <!-- Hamburger menu button only visible on small screens -->
        <button id="menu-toggle" class="sm:hidden text-xl focus:outline-none focus:shadow-outline mr-4">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Full navigation menu for larger screens, hidden on small screens -->
        <nav class="hidden sm:flex sm:items-center sm:space-x-4">
            <a href="index_en.php" class="text-purple-700 font-bold">My Scripts</a>
            <a href="contact.php" class="hover:text-gray-400">Contact</a>
            <a href="impressum_en.php" class="hover:text-gray-400">Legal Disclosure</a>
            <a href="faq_en.php" class="hover:text-gray-400">F.A.Q</a>
            <a href="feedback_en.php" class="hover:text-gray-400">Give Feedback</a>
        </nav>
    </div>

    <!-- Responsive nav menu, hidden on medium and larger screens, shown when hamburger is clicked -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <a href="index_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">My Scripts</a>
        <a href="contact.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Contact</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-800">Legal Disclosure</a>
        <a href="faq_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">F.A.Q</a>
        <a href="feedback_en.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Give Feedback</a>
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