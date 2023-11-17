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

    <style>
    .message-card {
        position: relative;
        background-color: #2d3748; /* Adjusted for better visibility */
        border: 2px solid #4a5568;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        min-height: 250px; /* Set a minimum height for consistency */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* This will push the buttons to the bottom */
    }
    .message-card:hover {
        background-color: #1b111f;
    }
    .read { 
        opacity: 0.45; 
    }
    .new-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #8b5cf6;
        color: white;
        padding: 5px;
        border-radius: 50%;
        font-size: 0.75rem;
        font-weight: bold;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

</head>
<body class="bg-zinc-950 text-white font-sans">

<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-8 text-purple-600">Inbox</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php
        include '../config/config.php';

        $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, fullName, email, message, submitted_at, productPackage, cfxUsername, productId, discordId FROM contact_messages ORDER BY submitted_at DESC";
        $result = $conn->query($sql);

        $currentDate = date("Y-m-d");

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $submittedDate = explode(" ", $row['submitted_at'])[0];
            $isNew = ($submittedDate === $currentDate);

                echo "<div class='message-card p-4 rounded-lg border border-gray-700 hover:shadow-md bg-black-custom' id='message-".$row['id']."'>";
                if ($isNew) {
                    echo "<div class='new-badge'>NEW</div>";
                }
                echo "<h3 class='text-lg font-semibold text-purple-600'>" . htmlspecialchars($row['fullName']) . " <span class='text-xs text-gray-400'>- " . htmlspecialchars($row['submitted_at']) . "</span></h3>";
                echo "<a href='mailto:" . htmlspecialchars($row['email']) . "' class='text-gray-300 font-mono'>" . htmlspecialchars($row['email']) . "</a>";
                echo "<p class='text-xs text-gray-300 font-mono'><i class='fa-solid fa-box-open text-purple-400'></i> Package: " . htmlspecialchars($row['productPackage']) . "</p>";
                echo "<p class='text-xs text-gray-300 font-mono'><i class='fa-solid fa-circle-user text-purple-400'></i> CFX Username: " . " <span class='text-xs text-purple-400'>" . htmlspecialchars($row['cfxUsername']) . "</span></p>";
                echo "<p class='text-xs text-gray-300 font-mono'><i class='fa-solid fa-rectangle-list text-purple-400'></i> Product ID: " . " <span class='text-xs text-purple-400'>" . htmlspecialchars($row['productId']) . "</span></p>";
                echo "<p class='text-xs text-gray-300 font-mono'><i class='fa-brands fa-discord text-purple-400'></i> Discord ID: " . " <span class='text-xs text-purple-400'>" . htmlspecialchars($row['discordId']) . "</span></p>";
                echo "<p class='text-gray-300 mt-2 mb-4'>" . htmlspecialchars($row['message']) . "</p>";
                echo "<button onclick='toggleRead(\"message-".$row['id']."\")' class='text-sm text-gray-300'><i class='fa-regular fa-bookmark mr-1 text-purple-600'></i> Mark as Read/Unread</button>";
                echo "<button onclick='deleteMessage(\"message-".$row['id']."\")' class='text-sm text-gray-300 ml-2'><i class='fa-solid fa-trash mr-1 text-red-600'></i> Delete</button>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-center text-gray-400'>No messages found.</p>";
        } 

        $conn->close();
        ?>
    </div>
</div>


<script>
    function toggleRead(messageId) {
        var element = document.getElementById(messageId);
        element.classList.toggle('read');
    }

    function deleteMessage(messageId) {
        var confirmed = confirm("Are you sure you want to delete this message?");
        if (!confirmed) {
            return;
        }

        var id = messageId.replace('message-', ''); // Extract ID

        var formData = new FormData();
        formData.append('messageId', id);

        fetch('functions/delete_message.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            document.getElementById(messageId).remove(); // Remove from DOM if successful
        })
        .catch(error => console.error('Error:', error));
    }
</script>


</body>
</html>