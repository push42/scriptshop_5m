<?php
// PHP Array holding product information
require '_productlist.php';

// Assign product IDs with leading zeros using array_map
$products = array_map(function($product, $index) {
    $product['productid'] = str_pad($index + 1, 4, '0', STR_PAD_LEFT);
    return $product;
}, $products, array_keys($products));



// array for package information
$package_info = [
    'wasabi-package' => [
        'description' => 'A collection of essential ESX scripts to boost your server performance.',
        'price' => '50.00',
    ],
    'codem-package' => [
        'description' => 'An advanced set of scripts for roleplaying scenarios.',
        'price' => '75.00',
    ],
    'okok-package' => [
        'description' => 'A collection of high quality ESX scripts (some are also standalone) made by okok. All scripts shown below are included in this package.',
        'price' => '65.00',
    ],
    // more packages as needed
];

// Pass the package information to JavaScript
echo "<script>var packageInfo = " . json_encode($package_info) . ";</script>";



?>
<style>
    .hidden-modal {
  display: none;
}
</style>



<!-- Search - Dropdown -->
<div class="container mx-auto px-4 pt-8 mb-8">
    <div class="flex justify-center items-center space-x-4">
        <input type="text" id="searchInput" onkeyup="filterProducts()" placeholder="Search for products..." class="px-4 py-2 rounded-lg border-2 bg-zinc-950 text-gray-200 border-zinc-500">
        <select id="packageFilter" onchange="filterProducts()" class="px-4 py-2 rounded-lg border-2 bg-zinc-950 text-gray-200 border-zinc-500">
            <option value="">Sort after packages</option>
            <option value="">Show All</option>
            <option value="mlo-package">MLO'S</option>
            <option value="okok-package">okok Package</option>
            <option value="wasabi-package">Wasabi Package</option>
            <option value="codem-package">CodeM Package</option>
        </select>
    </div>
</div>


<!-- Package Info Display -->
<div id="packageDisplay" class="container mx-auto px-4 pt-8 mb-8 text-center hidden">
    <p id="packageDescription" class="text-lg text-gray-200"></p>
    <p id="packagePrice" class="text-xl text-purple-600"></p>
</div>



<!-- Product Display Section -->
<section class="bg-zinc-950 py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <?php foreach ($products as $index => $product): ?>
            <!-- Product Card -->
            <div class="product-card bg-dark-theme rounded-lg overflow-hidden shadow-lg" data-package="<?php echo $product['package']; ?>" data-tags="<?php echo implode(', ', $product['tags']); ?>">
                <img src="<?php echo $product['image']; ?>" alt="Product Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-200"><?php echo $product['name']; ?></h3>
                    <p class="text-sm text-gray-500">Product ID: <?php echo $product['productid']; ?></p>
                    <div class="my-1">
                        <?php foreach ($product['tags'] as $tag): ?>
                        <span class="inline-block bg-gray-100 text-gray-800 text-xs px-2 rounded font-mono font-bold"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <p class="text-gray-500 text-sm mb-4"><?php echo $product['description']; ?></p>
                    <a href="<?php echo $product['website']; ?>" class="text-purple-600 hover:text-indigo-800 text-sm">Visit Website</a>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-500 line-through">€<?php echo $product['originalPrice']; ?></span>
                        <span class="text-lg text-purple-600">€<?php echo $product['salePrice']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- JavaScript for modal handling -->
<script>
// Function to open a modal using the product's unique ID
function openModal(productId) {
    // First, close any already open modals
    closeAllModals();

    // Then, show the requested modal
    var modalId = 'modal-' + productId; // Create a string for the modal's ID
    var modal = document.getElementById(modalId);
    modal.classList.remove('hidden-modal'); // Remove the 'hidden-modal' class to show the modal
}

// Function to close a specific modal using the product's unique ID
function closeModal(productId) {
    var modalId = 'modal-' + productId; // Create a string for the modal's ID
    var modal = document.getElementById(modalId);
    modal.classList.add('hidden-modal'); // Add the 'hidden-modal' class to hide the modal
}

// Function to close all modals
function closeAllModals() {
    var modals = document.querySelectorAll('.modal'); // Get all modals by their class
    modals.forEach(function(modal) {
        modal.classList.add('hidden-modal'); // Add the 'hidden-modal' class to hide them
    });
}







// Function for searchbar and dropdown menu
function filterProducts() {
    var searchInput, filter, packageFilter, cards, card, i, title, productPackage;

    searchInput = document.getElementById('searchInput').value.toUpperCase();
    packageFilter = document.getElementById('packageFilter').value;
    cards = document.getElementsByClassName('product-card');
    var packageDisplay = document.getElementById('packageDisplay');
    var packageDescription = document.getElementById('packageDescription');
    var packagePrice = document.getElementById('packagePrice');

    // Hide package info by default
    packageDisplay.classList.add('hidden');

    for (i = 0; i < cards.length; i++) {
        card = cards[i];
        title = card.getElementsByTagName('h3')[0].textContent.toUpperCase();
        productPackage = card.getAttribute('data-package');

        if (title.includes(searchInput) && (packageFilter === "" || productPackage === packageFilter)) {
            card.style.display = "";
        } else {
            card.style.display = "none";
        }
    }

    // If a package is selected, show the package info
    if (packageFilter !== "" && packageInfo[packageFilter]) {
        packageDescription.textContent = packageInfo[packageFilter].description;
        packagePrice.textContent = 'Price: €' + packageInfo[packageFilter].price;
        packageDisplay.classList.remove('hidden'); // Show package info
    }
}

</script>


