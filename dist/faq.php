<?php
// Load in the Header
require './components/_header.php';
require './components/_hero_faq.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>F.A.Q</title>
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
            { question: 'How do I purchase a script?', answer: 'You can purchase scripts by contacting me directly through Discord, Telegram or the Contact form.' },
            { question: 'What payment methods do you accept?', answer: 'I only accept PayPal (Friends), Amazon or direct bank transfers.' },
            { question: 'Can I get a refund if Im not satisfied with a script?', answer: 'No. Scripts are only able to be transferred once so no refund possible.' },
            { question: 'Are your scripts compatible with the latest version of FiveM?', answer: 'Yes.' },
            { question: 'Can I preview a script before purchasing?', answer: 'Yes, some stores got a showcase-server for their scripts. I could also setup a server with the preferred script to show it works beforehand if needed.' },
            { question: 'Do I receive updates for a script I purchased?', answer: 'Yes. Your script inside the CFX-Keymaster libary automatically recieves updates from the developer.' },
            { question: 'What server requirements are needed for your scripts?', answer: 'Our Server did run on ESX, however many scripts are compatible with more frameworks, take a look at the Tags on the scripts page.' },
            { question: 'How do i get the scripts?', answer: 'You need to have a CFX-Keymaster account, they will get transferred to you there, transferring the ownership to you (this is also where you will get notified about updates from scripts you own & can download them). You will also get the TEBEX-ID from my original purchase if you need to provide it for seeking support in their discord.' },
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
require './components/_footer.php';
?>

</body>
</html>