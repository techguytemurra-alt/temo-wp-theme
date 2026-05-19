</main>
  </div>

  <?php wp_footer(); ?>

  <script>
    const themeBtn = document.querySelector('#theme-toggle');
    const currentTheme = localStorage.getItem('theme'); // ვამოწმებთ, ხომ არ გვიდევს საწყობში "theme"

    // 1. თუ საწყობში უკვე გვიდევს 'dark', ჩავრთოთ ეგრევე
    if (currentTheme === 'dark') {
      document.documentElement.setAttribute('data-theme', 'dark');
      themeBtn.innerHTML = '☀️';
    }

    themeBtn.addEventListener('click', () => {
      let theme = 'light'; // დეფაულტად იყოს ნათელი

      if (document.documentElement.getAttribute('data-theme') !== 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
        theme = 'dark';
        themeBtn.innerHTML = '☀️';
      } else {
        document.documentElement.setAttribute('data-theme', 'light');
        themeBtn.innerHTML = '🌙';
      }

      // 2. შევინახოთ არჩევანი საწყობში (localStorage)
      localStorage.setItem('theme', theme);
    });

    const scrollTopBtn = document.querySelector('#scroll-top');

    // 1. გამოვაჩინოთ ღილაკი მხოლოდ მაშინ, როცა 300px-ზე მეტს ჩამოვსქროლავთ
    window.onscroll = function() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollTopBtn.style.display = "block";
      } else {
        scrollTopBtn.style.display = "none";
      }
    };

    // 2. ზემოთ ასვლის ფუნქცია
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth' // ნაზი ასვლა
      });
    });
  </script>

</body>

</html>