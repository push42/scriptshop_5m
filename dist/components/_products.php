<?php
// PHP Array holding product information
require '_productlist.php';

// Assign product IDs with leading zeros using array_map
$products = array_map(function($product, $index) {
    $product['productid'] = str_pad($index + 1, 4, '0', STR_PAD_LEFT);
    return $product;
}, $products, array_keys($products));

// Total Products
$totalProducts = count($products);

// array for package information
$package_info = [
    'wasabi-package' => [
        'description' => 'The Wasabi Package features a curated selection of essential ESX scripts designed to enhance server performance and player experience. Ideal for servers seeking reliability and efficiency.',
        'price' => '50.00',
    ],
    'codem-package' => [
        'description' => 'The CodeM Package offers an advanced suite of premium scripts, perfect for creating immersive roleplaying scenarios. This package is tailored for servers looking for depth and sophistication in their gameplay.',
        'price' => '125.00',
    ],
    'okok-package' => [
        'description' => 'The okok Package presents a versatile array of high-quality ESX scripts, including some standalone options, crafted by okok. It is a comprehensive solution for servers aiming for top-notch functionality and variety.',
        'price' => '65.00',
    ],
    'pickle-package' => [
        'description' => 'The Pickle Package brings together a diverse mix of ESX + QBCORE scripts, along with standalone options, offering a balanced blend of performance and innovation. A great choice for servers seeking variety and quality.',
        'price' => '60.00',
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
            <option value="pickle-package">Pickle Package</option>
        </select>
        <button class="ml-2 border-2 border-gray-600 rounded-lg px-4 p-2 text-purple-400 font-bold" id="currencyToggle"><i class="fa-solid fa-money-bill-transfer mr-2 text-gray-200"></i>Convert Prices to USD / EURO</button>
    </div>
</div>


<!-- Package Info Display -->
<div id="packageDisplay" class="container mx-auto px-4 pt-8 mb-8 text-center hidden">
    <p id="packageDescription" class="text-lg text-gray-200"></p>
    <p id="packagePrice" class="text-xl text-purple-600"></p>
</div>


<!-- Product Display Section -->
<section class="bg-zinc-950 py-20" id="product-dsection">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <?php foreach ($products as $index => $product): ?>
            <!-- Product Card -->
            <div class="relative product-card bg-dark-theme rounded-lg overflow-hidden shadow-lg" data-package="<?php echo $product['package']; ?>" data-tags="<?php echo implode(', ', $product['tags']); ?>">
                <!-- Contact Icon -->
                <a href="contact.php" class="absolute top-2 right-2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white hover:text-indigo-800 rounded-full p-2">
                    <i class="fa-solid fa-envelope"></i>
                </a>
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
                        <span class="price text-purple-600 text-lg text-bold" data-original-price="<?php echo $product['salePrice']; ?>">€<?php echo $product['salePrice']; ?></span>
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

// Function for conversation of currency
let currentCurrency = 'EUR'; // Default currency

// Function to get the current exchange rate from Euro to USD
async function getExchangeRate() {
    const apiKey = '2a687c0aeb5debc50fd05c21'; // Replace with your ExchangeRate-API key, its FREE
    const response = await fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/EUR`);
    const data = await response.json();
    return data.conversion_rates.USD; // Return the EUR to USD conversion rate
}

// Function to convert product prices and update the display
async function toggleCurrency() {
    const exchangeRate = await getExchangeRate();
    const productPrices = document.querySelectorAll('.product-card .price');

    productPrices.forEach(priceElement => {
        let price = parseFloat(priceElement.dataset.originalPrice);

        if (currentCurrency === 'EUR') {
            const usdPrice = (price * exchangeRate).toFixed(2);
            priceElement.innerText = `$${usdPrice}`;
        } else {
            priceElement.innerText = `€${price.toFixed(2)}`;
        }
    });

    currentCurrency = (currentCurrency === 'EUR') ? 'USD' : 'EUR'; // Toggle the current currency
}

// Example usage
document.getElementById('currencyToggle').addEventListener('click', toggleCurrency);


</script>


