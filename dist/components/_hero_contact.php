<!-- Hero Section with Video Background -->
<section class="relative">
    <div class="video-container absolute inset-0 w-full h-full overflow-hidden z-0">
        <video autoplay loop muted playsinline class="max-w-full max-h-full w-full h-full object-cover">
            <source src="./assets/images/bg.mp4" type="video/mp4">
            <object src="./assets/images/bg.png" type="image/png"></object>
            Your browser does not support the video tag.
        </video>
        <!-- Telegram Chat Box -->
        <div class="discord-box hidden md:flex md:absolute md:left-8 md:top-28 bg-gradient-to-br from-zinc-950 to-black-custom border border-gray-600 text-white p-2 rounded-lg shadow-lg max-w-sm transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 z-10">
            <div class="flex-shrink-0 mr-4">
                <img src="./assets/images/Telegram.png" alt="Telegram Logo" class="w-12 h-12 object-cover rounded-md"> <!-- Discord logo image -->
            </div>
            <div class="flex-grow">
                <p class="text-lg font-bold font-mono text-purple-400">Telegram</p>
                <h4 class="text-lm text-gray-300 font-semibold text-center">push420</h4>
            </div>
        </div>
        <!-- Discord Chat Box -->
        <div class="discord-box hidden md:flex md:absolute md:right-8 md:top-28 bg-gradient-to-br from-zinc-950 to-black-custom border border-gray-600 text-white p-2 rounded-lg shadow-lg max-w-sm transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 z-10">
            <div class="flex-shrink-0 mr-4">
                <img src="./assets/images/blue_discord.gif" alt="Discord Logo" class="w-12 h-12 object-cover rounded-md mr-2.5"> <!-- Discord logo image -->
            </div>
            <div class="flex-grow">
                <p class="text-lg font-bold font-mono text-purple-400">Discord</p>
                <h4 class="text-lm text-gray-300 font-semibold text-center">push.42</h4>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 bg-opacity-50 text-white py-12 relative z-20 h-96 sm:h-96 md:h-80 lg:h-62">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-black mt-8 hero-title uppercase">Get in touch<span class="text-purple-400">.</span></h1>
            <p class="mt-4 text-xl hero-subtitle font-sans text-gray-100">Elevate your FiveM project with top-tier scripts at a discount.</p>
        </div>
    </div>
</section>

<script>
    // JavaScript for countdown timer
document.addEventListener('DOMContentLoaded', (event) => {
    const countdownElement = document.getElementById('countdown');
    const refreshTime = 48 * 60 * 60 * 1000; // 48 hours in milliseconds

    function setCountdown() {
      const now = new Date();
      const lastRefreshTime = new Date(localStorage.getItem('lastRefreshTime'));
      let timeLeft = refreshTime - (now - lastRefreshTime);

      if(timeLeft <= 0) {
        localStorage.setItem('lastRefreshTime', now.toISOString());
        timeLeft = refreshTime;
      }

      const countdown = new Date(timeLeft);
      const hours = String(countdown.getUTCHours()).padStart(2, '0');
      const minutes = String(countdown.getMinutes()).padStart(2, '0');
      const seconds = String(countdown.getSeconds()).padStart(2, '0');

      countdownElement.textContent = `${hours}h ${minutes}m ${seconds}s`;
    }

    if (!localStorage.getItem('lastRefreshTime')) {
      localStorage.setItem('lastRefreshTime', new Date().toISOString());
    }

    setCountdown();
    setInterval(setCountdown, 1000); // update every second
  });


  // JavaScript for uptime timer
document.addEventListener('DOMContentLoaded', (event) => {
    const uptimeElement = document.getElementById('time-since');
    const launchDate = new Date('11.11.2023');

    function updateUptime() {
      const now = new Date();
      const uptime = new Date(now - launchDate);
      const days = Math.floor(uptime / (24 * 60 * 60 * 1000));
      const hours = uptime.getUTCHours();
      const minutes = uptime.getMinutes();

      uptimeElement.textContent = `${days}d ${hours}h ${minutes}m`;
    }

    updateUptime();
    setInterval(updateUptime, 60000); // update every minute
  });

</script>