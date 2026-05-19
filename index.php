<?php get_header(); ?>

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
              if (is_active_sidebar('services-widgets')) :
                // ვიწყებთ ბუფერიზაციას, რომ კონტენტს მანიპულაცია გავუკეთოთ
                dynamic_sidebar('services-widgets');
              else :
                echo '<p style="color:white; text-align:center;">დაამატე სერვისები: Appearance > Widgets > Services Area</p>';
              endif;
              ?>
            </div>
          </div>
        </section>
      </div>

      <div class="order-section-wrapper">
        <section id="order" class="container">
          <div class="order-flex-container">

            <div class="order-form-content">
              <?php
              if (is_active_sidebar('order-form-widgets')) :
                dynamic_sidebar('order-form-widgets');
              else :
                echo '<p style="text-align:center;">დაამატე ორდერის ფორმა: Appearance > Widgets > Order Form Area</p>';
              endif;
              ?>
            </div>

            <div class="vegas-order-sidebar">
              <span>O</span>
              <span>R</span>
              <span>D</span>
              <span>E</span>
              <span>R</span>
              <span class="highlight-letter">N</span>
              <span class="highlight-letter">O</span>
              <span class="highlight-letter">W</span>
            </div>

          </div>
        </section>
      </div>

      <div class="main-content-row">
        <section id="about" class="about-container">
          <?php
          // რადგან გვერდი პირდაპირ მთავარზე ზის, ID-ით წამოვიღოთ ყველაზე საიმედოდ
          $about_query = new WP_Query(array(
              'page_id' => get_option('page_on_front') // ავტომატურად იღებს მთავარ გვერდს
          ));

          if ( $about_query->have_posts() ) :
              while ( $about_query->have_posts() ) : $about_query->the_post();
                  the_content();
              endwhile;
              wp_reset_postdata();
          else :
              echo '<p style="text-align:center; color:white;">About ინფორმაცია ვერ მოიძებნა. შეამოწმე Settings > Reading.</p>';
          endif;
          ?>
        </section>

        <section id="contact" class="personal-card-container">
          <?php
          if (is_active_sidebar('contact-widgets')) :
            dynamic_sidebar('contact-widgets');
          else :
            echo '<p style="color:white; text-align:center;">დაამატე ბლოკები: Appearance > Widgets > Contact Area</p>';
          endif;
          ?>
        </section>
      </div>

<?php get_footer(); ?>