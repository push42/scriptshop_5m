<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Impressum</title>
        <meta name="description" content="Explore a collection of my scripts for FiveM. Purchase premium scripts for a bit less.">
        <meta name="keywords" content="FiveM, scripts, gaming, premium scripts">
        <meta name="author" content="Thies Bergenthal">
        <!-- Tailwind CSS -->
        <link rel="stylesheet" href="assets/main.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/hero.css">
        <link rel="stylesheet" href="assets/css/proof.css">
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
<body class="bg-zinc-950 font-sans text-white">

<div id="app">
    <?php
    session_start();
    require './components/_header.php';
    ?>

    <!-- Legal Disclosure Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6">Legal Disclosure / Impressum<span class="text-purple-700">.</span></h2>
            <div class="bg-zinc-900 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700">Information in accordance with Section 5 TMG </br><span class="text-xs font-mono ml-2 lowercase text-gray-400"> - https://www.gesetze-im-internet.de/tmg/__5.html</span></h3>
                <p>{{ companyName }}</p>
                <p>{{ address }}</p>
                <p>{{ contactInfo }}</p>
                <p><i class="fa-regular fa-envelope mr-2"></i>{{ email }}</p>
                <p><i class="fa-solid fa-phone mr-2"></i>{{ phone }}</p>
            </div>
        </div>
    </section>

    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>Cookies & Google Analytics</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>

</div>

<div id="app2">
    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>THIRD-PARTY LINKS</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>
</div>


<div id="app3">
    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>THE DATA WE COLLECT ABOUT YOU</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>
</div>

<div id="app4">
    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>DATA SECURITY</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>
</div>

<div id="app5">
    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>DATA RETENTION</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>
</div>

<div id="app6">
    <!-- Disclaimer Section -->
    <section class="py-2">
        <div class="container mx-auto px-4">
            <div class="rounded-lg p-6 bg-zinc-900">
                <h3 class="text-xl font-semibold mb-4 uppercase text-purple-700"><i class="fa-solid fa-ellipsis text-gray-200 mr-2"></i>YOUR LEGAL RIGHTS</h3>
                <p class="text-gray-400 font-mono text-sm">{{ disclaimerContent }}</p>
            </div>
        </div>
    </section>
</div>
    <?php require './components/_footer.php'; ?>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            companyName: 'Thies Bergenthal / push.42',
            address: 'Friesenstraße 2',
            contactInfo: '26847, Detern (Lower-Saxony), Germany',
            phone: '04957/8979763',
            email: 'thiesmk2@gmail.com',
            website: 'www.thiesbergenthal.de',
            registrationInfo: '[Registration Details]',
            vatId: '[VAT ID]',
            disclaimerContent: `This website uses Google Analytics to track visitor information such as location (country, IP address, browser, etc.). These analytics cookies are activated only after obtaining your consent. If you decline cookies, they will not be used, and our site will operate without them, except for essential cookies from Google Fonts, FontAwesome CDN, and Swiper library, which are necessary for the website's functionality and performance.`
            // ... [other dynamic data] ...
        }
    });

    new Vue({
        el: '#app2',
        data: {
            disclaimerContent: `This website may include links to third-party websites, plug-ins and applications. Clicking on those links or enabling those connections may allow third parties to collect or share data about you. We do not control these third-party websites and are not responsible for their privacy statements. When you leave our website, we encourage you to read the privacy notice of every website you visit.`
            // ... [other dynamic data] ...
        }
    });

    new Vue({
        el: '#app3',
        data: {
            disclaimerContent: `Personal data, or personal information, means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data).
                                We may collect, use, store and transfer different kinds of personal data about you which we have grouped together follows:
                                Identity Data includes first name, last name, and username or similar identifier.
                                Contact Data includes billing address, delivery address, email address and telephone numbers.
                                Transaction Data includes details about payments to and from you and other details of products and services you have purchased from us.
                                Technical Data includes internet protocol (IP) address, your login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices you use to access this website.
                                Profile Data includes your username and password, purchases or orders made by you, and any account preferences.
                                Usage Data includes information about how you use our website, products and services.
                                Marketing and Communications Data includes your preferences in receiving marketing from us and our third parties and your communication preferences.
                                We also collect, use and share Aggregated Data such as statistical or demographic data for any purpose. Aggregated Data may be derived from your personal data but is not considered personal data in law as this data does not directly or indirectly reveal your identity. For example, we may aggregate your Usage Data to calculate the percentage of users accessing a specific website feature. However, if we combine or connect Aggregated Data with your personal data so that it can directly or indirectly identify you, we treat the combined data as personal data which will be used in accordance with this privacy notice.
                                We do not collect any Special Categories of Personal Data about you (this includes details about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, information about your health and genetic and biometric data). Nor do we collect any information about criminal convictions and offences.`
      // ... [other dynamic data] ...
        }
    });

    new Vue({
        el: '#app4',
        data: {
            disclaimerContent: `We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know. They will only process your personal data on our instructions and they are subject to a duty of confidentiality.
                                You can also help us to protect your personal data by adhering to the following security measures:
                                Do not confirm your bank or credit card details in an email. We will not ask for such personal data in this way, so any email claiming to be from us that does so is likely to be a fake. Please ignore it.
                                Keep your passwords private.
                                When creating a password, do not use words such as your name, date of birth or other personal data.
                                Change your password regularly.
                                We have put in place procedures to deal with any suspected personal data breach and will notify you and any applicable regulator of a breach where we are legally required to do so.`
    // ... [other dynamic data] ...
        }
    });

    new Vue({
        el: '#app5',
        data: {
            disclaimerContent: `We will only retain your personal data for as long as necessary to fulfil the purposes we collected it for, including for the purposes of satisfying any legal, accounting, or reporting requirements.
                                To determine the appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means, and the applicable legal requirements.
                                By law we have to keep basic information about our customers (including Contact, Identity, Financial and Transaction Data) for up to 10 years after they cease being customers for tax purposes.
                                In some circumstances you can ask us to delete your data: see Request erasure below for further information.
                                In some circumstances we may anonymise your personal data (so that it can no longer be associated with you) for research or statistical purposes in which case we may use this information indefinitely without further notice to you. `
    // ... [other dynamic data] ...
        }
    });

    new Vue({
        el: '#app6',
        data: {
            disclaimerContent: `You have the right to:
                                Request access to your personal data (commonly known as a "data subject access request"). This enables you to receive a copy of the personal data we hold about you and to check that we are lawfully processing it.
                                Request correction of the personal data that we hold about you. This enables you to have any incomplete or inaccurate data we hold about you corrected, though we may need to verify the accuracy of the new data you provide to us.
                                Request erasure of your personal data. This enables you to ask us to delete or remove personal data where there is no good reason for us continuing to process it. You also have the right to ask us to delete or remove your personal data where you have successfully exercised your right to object to processing (see below), where we may have processed your information unlawfully or where we are required to erase your personal data to comply with local law. Note, however, that we may not always be able to comply with your request of erasure for specific legal reasons which will be notified to you, if applicable, at the time of your request.
                                Object to processing of your personal data where we are relying on a legitimate interest (or those of a third party) and there is something about your particular situation which makes you want to object to processing on this ground as you feel it impacts on your fundamental rights and freedoms. You also have the right to object where we are processing your personal data for direct marketing purposes. In some cases, we may demonstrate that we have compelling legitimate grounds to process your information which override your rights and freedoms.
                                Request restriction of processing of your personal data. This enables you to ask us to suspend the processing of your personal data in the following scenarios: (a) if you want us to establish the data's accuracy; (b) where our use of the data is unlawful but you do not want us to erase it; (c) where you need us to hold the data even if we no longer require it as you need it to establish, exercise or defend legal claims; or (d) you have objected to our use of your data but we need to verify whether we have overriding legitimate grounds to use it.
                                Request the transfer of your personal data to you or to a third party. We will provide to you, or a third party you have chosen, your personal data in a structured, commonly used, machine-readable format. Note that this right only applies to automated information which you initially provided consent for us to use or where we used the information to perform a contract with you.
                                Withdraw consent at any time where we are relying on consent to process your personal data. However, this will not affect the lawfulness of any processing carried out before you withdraw your consent. If you withdraw your consent, we may not be able to provide certain products or services to you. We will advise you if this is the case at the time you withdraw your consent. `
    // ... [other dynamic data] ...
        }
    });
</script>
</body>
</html>