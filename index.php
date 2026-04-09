<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
  <div class="layout-wrapper">
    <header class="header-menu">
      <div class="menu-brand">
        <h1 class="text-1">Temo.Dev</h1>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <footer class="sidebar-footer">
        <p>&copy; <?php echo date('Y'); ?> ჩემი პორტფოლიო | Build with M3 Pro</p>
      </footer>
      <button id="theme-toggle" class="theme-switch">🌙</button>
      <button id="scroll-top" class="scroll-btn">↑</button>
    </header>

    <main class="content-area">
      <section id="hero" class="hero-container">
        <div class="hero-grid-container">
          <div class="hero-main-box">
            <div class="hero-content">
              <span class="badge">Professional Portfolio</span>
              <h1>Building Digital <br /><span class="highlight">Infrastructure.</span></h1>
              <p>IT Specialist & Photographer based in Batumi. Specializing in Linux systems, Network security, and Visual storytelling.</p>
              <div class="hero-btns">
                <a href="https://wa.me/995571132091" target="_blank" class="btn-main">Hire Me Now</a>
                <a href="#contact" class="btn-outline">Contact Me</a>
              </div>
            </div>
          </div>

          <div class="hero-small-column">
            <div class="small-card card-photography">
              <div class="card-overlay">
                <span class="icon">📸</span>
                <h3>Creative Visuals</h3>
                <p>Storytelling through lens</p>
              </div>
            </div>
            <div class="small-card card-networking">
              <div class="card-overlay">
                <span class="icon">🛡️</span>
                <h3>IT Systems</h3>
                <p>Secure & Fast Infrastructure</p>
              </div>
            </div>
            <div class="small-card card-consultation">
              <span class="icon">💬</span>
              <h3>Consultation</h3>
              <p>Free IT Audit</p>
            </div>
          </div>

          <aside class="hero-sidebar">
            <h3>Live Status</h3>
            <ul class="sidebar-status">
              <li><span class="dot green"></span> Available for Projects</li>
              <li><span class="dot blue"></span> Currently in Batumi</li>
              <li><span class="dot orange"></span> M3 Pro Powered</li>
            </ul>
            <div class="sidebar-stats">
              <div class="stat-item"><strong>3+</strong> Years Exp.</div>
              <div class="stat-item"><strong>50+</strong> Projects</div>
            </div>
          </aside>
        </div>
      </section>

      <div class="marquee">
        <div class="marquee-content">
          <span>IT STRATEGY • CLOUD SYSTEMS • VISUAL STORYTELLING • </span>
          <span>IT STRATEGY • CLOUD SYSTEMS • VISUAL STORYTELLING • </span>
        </div>
      </div>

      <div class="dark-section-wrapper">
      <section id="skills" class="skills-section">
        <div class="container">
          <h2 class="section-title">Technical Toolkit</h2>
          <div class="skills-grid">
            <div class="skill-card">
              <span class="skill-icon">🖥️</span>
              <h3>OS Administration</h3>
              <p>macOS, Windows, Linux (Fedora, Ubuntu)</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">🌐</span>
              <h3>Networking</h3>
              <p>DHCP/Static IP, CLI (nmcli, iproute2)</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">🚀</span>
              <h3>Web Development</h3>
              <p>HTML5, CSS3, JavaScript, WordPress</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">⚙️</span>
              <h3>Systems & Support</h3>
              <p>Infrastructure Stability, System Security</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">🛡️</span>
              <h3>Cybersecurity</h3>
              <p>Firewall, VPN, System Hardening</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">🔧</span>
              <h3>Hardware Specialist</h3>
              <p>Repair & Performance Tuning</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">☁️</span>
              <h3>Cloud Concepts</h3>
              <p>Docker, VirtualBox, Cloud Solutions</p>
            </div>
            <div class="skill-card">
              <span class="skill-icon">📸</span>
              <h3>Digital Imaging</h3>
              <p>Lightroom, Technical Photography</p>
            </div>
          </div>
        </div>
      </section>
    </div>


<div class="dark-section-wrapper1">
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Professional Services</h2>
            <div class="services-grid">
                <?php 
                // ვამოწმებთ, არის თუ არა რამე ჩაგდებული ვიჯეტების ზონაში
                if ( is_active_sidebar( 'services-widgets' ) ) : 
                    dynamic_sidebar( 'services-widgets' ); 
                else : 
                    // ეს გამოჩნდება მხოლოდ მაშინ, თუ ადმინ პანელი ცარიელია
                    echo '<p style="color:white; text-align:center;">დაამატე სერვისები: Appearance > Widgets > Services Area</p>';
                endif; 
                ?>
            </div>
        </div>
    </section>
</div>

   <div class="main-content-row">
        <section id="about" class="about-container">
          <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  the_content();
              endwhile;
          else :
              echo '<p>კონტენტი ვერ მოიძებნა.</p>';
          endif;
          ?>
        </section>

        <section id="contact" class="personal-card-container">
            <div class="profile-image-box">
               <img src="<?php echo get_template_directory_uri(); ?>/your-photo.jpg" alt="Temo IT" class="profile-pic" />
            </div>
            
            <div class="contact-details">
                <h2>Let's Get in Touch</h2>
                <ul class="contact-list">
                  <li><strong>📍 Location:</strong> Batumi, Georgia</li>
                  <li><strong>📧 Email:</strong> temolatsaba@gmail.com</li>
                </ul>
                <div class="social-links">
                  <a href="#" class="social-btn">LinkedIn</a>
                  <a href="https://wa.me/995571132091" class="social-btn wa">WhatsApp</a>
                </div>
            </div>
        </section> 
      </div> 
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