<?php

?>

<!-- Improved Header Section -->
<header class="bg-zinc-950 text-gray-100 py-5 relative">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Branding -->
        <a href="#" class="text-2xl font-semibold ml-4 flex items-center">
            <i class="fas fa-code mr-2"></i> FiveM Scripts
        </a>

        <!-- Hamburger Menu Button (Small Screens) -->
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none focus:ring focus:ring-purple-500 mr-4">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Menu (Large Screens) -->
        <nav class="hidden md:flex md:items-center md:gap-6">
            <a href="index.php" class="text-lg text-purple-600 hover:text-purple-400 font-medium">My Scripts</a>
            <a href="proof.php" class="hover:text-gray-300">Proof</a>
            <a href="contact.php" class="hover:text-gray-300">Contact</a>
            <a href="legal.php" class="hover:text-gray-300">Legal Disclosure</a>
            <a href="faq.php" class="hover:text-gray-300">F.A.Q</a>
        </nav>
    </div>

    <!-- Responsive nav menu, hidden on medium and larger screens, shown when hamburger is clicked -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <a href="index.php" class="block px-4 py-2 text-sm hover:bg-gray-800">My Scripts</a>
        <a href="proof.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Proof</a>
        <a href="contact.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Contact</a>
        <a href="legal.php" class="block px-4 py-2 text-sm hover:bg-gray-800">Legal Disclosure</a>
        <a href="faq.php" class="block px-4 py-2 text-sm hover:bg-gray-800">F.A.Q</a>
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