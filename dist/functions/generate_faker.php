<?php
require_once '../../vendor/autoload.php'; // Adjust the path according to your directory structure
include '../../config/config.php';


$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Faker initialization
$faker = Faker\Factory::create();

// Generate and insert data
for ($i = 0; $i < 50; $i++) { // Adjust the number of entries as needed
    $fullName = $faker->name;
    $productPackage = $faker->word;
    $cfxUsername = $faker->userName;
    $email = $faker->email;
    $productId = $faker->randomNumber(5, true);
    $discordId = $faker->userName . '#' . $faker->numberBetween(1000, 9999);
    $message = $faker->sentence;
    $submitted_at = $faker->date('Y-m-d H:i:s');

    $sql = "INSERT INTO `contact_messages` (`fullName`, `productPackage`, `cfxUsername`, `email`, `productId`, `discordId`, `message`, `submitted_at`) VALUES ('$fullName', '$productPackage', '$cfxUsername', '$email', '$productId', '$discordId', '$message', '$submitted_at')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "Fake data inserted successfully.";

$conn->close();
?>
