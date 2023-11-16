<?php
// Load in the Header
require '../components/_header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>F.A.Q - My Script Collection</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="../assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/custom.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/hero.css">
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

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    </head>


        
<body class="bg-zinc-950 font-sans">        

<div id="faq-app" class="container mx-auto px-4 pt-8 mt-14">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Frequently Asked Questions<span class="text-purple-700">.</span></h2>
    <div v-for="(item, index) in faqItems" :key="index" class="faq-item mb-4">
        <div class="faq-question cursor-pointer py-2 px-4 bg-zinc-800 text-white rounded-t-lg" @click="toggle(index)">
            <h3 class="font-semibold">{{ item.question }}</h3>
        </div>
        <div class="faq-answer py-2 px-4 bg-zinc-700 text-gray-300 rounded-b-lg" v-show="activeIndex === index">
            <p>{{ item.answer }}</p>
        </div>
    </div>
</div>



<script>
new Vue({
    el: '#faq-app',
    data: {
        activeIndex: null,
        faqItems: [
            { question: 'How do I purchase a script?', answer: 'You can purchase scripts by contacting me directly through Discord or Telegram.' },
            { question: 'What payment methods are accepted?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'Question 3?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'Question 4?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'Question 5?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'What payment methods are accepted?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'What payment methods are accepted?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            { question: 'What payment methods are accepted?', answer: 'We accept PayPal, Amazon, and direct bank transfers.' },
            // ... more questions ...
        ]
    },
    methods: {
        toggle(index) {
            this.activeIndex = this.activeIndex === index ? null : index;
        }
    }
});
</script>

<?php
// Load in the Footer
require '../components/_footer.php';
?>

</body>
</html>