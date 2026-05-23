</main> </div> <?php wp_footer(); ?>

  <script>
    const themeBtn = document.querySelector('#theme-toggle');
    const currentTheme = localStorage.getItem('theme');

    if (currentTheme === 'dark') {
      document.documentElement.setAttribute('data-theme', 'dark');
      themeBtn.innerHTML = '☀️';
    }

    themeBtn.addEventListener('click', () => {
      let theme = 'light';
      if (document.documentElement.getAttribute('data-theme') !== 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
        theme = 'dark';
        themeBtn.innerHTML = '☀️';
      } else {
        document.documentElement.setAttribute('data-theme', 'light');
        themeBtn.innerHTML = '🌙';
      }
      localStorage.setItem('theme', theme);
    });

    const scrollTopBtn = document.querySelector('#scroll-top');

    window.onscroll = function() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollTopBtn.style.display = "block";
      } else {
        scrollTopBtn.style.display = "none";
      }
    };

    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>

</body>
</html>