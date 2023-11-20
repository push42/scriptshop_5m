<!-- Add a class to your section for styling -->
<section class="hero-section relative h-96 sm:h-96 md:h-80 lg:h-62 bg-center">

    <!-- Content Container -->
    <div class="relative z-20 text-white py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-black mt-8 hero-title uppercase">My CFX-Libary<span class="text-purple-400">.</span></h1>
            <p class="mt-4 text-xl hero-subtitle font-sans font-semibold">Every script offered here was legally obtained by me. 100% Authentic, for more proof contact me!</p>
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