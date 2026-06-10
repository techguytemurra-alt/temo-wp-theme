<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="layout-wrapper">
    <header class="header-menu">
      
      <div class="menu-brand">
        <a href="<?php echo home_url('/'); ?>" class="logo-link">
          <h1 class="text-1">Temo.Dev</h1>
        </a>
      </div>

      <nav class="main-nav">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
          <li><a href="<?php echo home_url('/#skills'); ?>">Skills</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>">Services</a></li>
          <li><a href="<?php echo home_url('/#order'); ?>" class="nav-order-btn">Order Now</a></li>
          <li><a href="<?php echo home_url('/#about'); ?>">About Me</a></li>
          <li><a href="<?php echo home_url('/#contact'); ?>">Contact</a></li>
        </ul>
      </nav>

      <div class="special-menu-links">
        <a href="<?php echo site_url('/services-list'); ?>" class="spec-link">
          <span class="spec-icon">📋</span>
          <div class="spec-text">
            <span class="spec-title">სერვისები</span>
            <span class="spec-desc">სრული ჩამონათვალი</span>
          </div>
        </a>

        <a href="<?php echo home_url('/price-list/'); ?>" class="spec-link">
          <span class="spec-icon">💰</span>
          <div class="spec-text">
            <span class="spec-title">ფასები</span>
            <span class="spec-desc">ღირებულებები</span>
          </div>
        </a>
      </div>

      <div class="language-switcher" style="padding: 15px 10px; margin: 10px 0; border-top: 1px solid rgba(255,255,255,0.1);">
        <div id="google_translate_element"></div>
      </div>

      <footer class="sidebar-footer">
        <p>&copy; <?php echo date('Y'); ?> ჩემი პორტფოლიო | Build with M3 Pro</p>
      </footer>

      <button id="theme-toggle" class="theme-switch">🌙</button>
      <button id="scroll-top" class="scroll-btn">↑</button>
    </header>

    <main class="content-area">

  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'auto',
      includedLanguages: 'ka,en',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      multilanguage: true,
      autoDisplay: false
    }, 'google_translate_element');
  }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <div class="floating-demo-toast" style="position: fixed; top: 20px; right: 20px; background: rgba(15, 15, 15, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(217, 83, 79, 0.3); padding: 10px 14px; border-radius: 6px; display: flex; align-items: center; gap: 10px; z-index: 99999; box-shadow: 0 4px 15px rgba(0,0,0,0.5); pointer-events: none;">
    <span style="width: 7px; height: 7px; background-color: #d9534f; border-radius: 50%; display: inline-block; box-shadow: 0 0 0 0 rgba(217, 83, 79, 0.7); animation: toastPulse 1.5s infinite;"></span>
    <div style="font-family: 'Poppins', sans-serif;">
      <strong style="color: #d9534f; font-size: 0.7rem; display: inline-block; margin-right: 5px; letter-spacing: 0.5px;">DEMO MODE:</strong>
      <span style="color: rgba(255,255,255,0.7); font-size: 0.7rem;">აქტიური დეველოპმენტი.</span>
    </div>
    <style>
      @keyframes toastPulse {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(217, 83, 79, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 5px rgba(217, 83, 79, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(217, 83, 79, 0); }
      }
      /* მობილურებზე გადადის ეკრანის ბოლოში, რომ ხედვა არ ჩაკეტოს */
      @media (max-width: 768px) {
        .floating-demo-toast { 
          top: auto !important;
          right: 20px !important; 
          left: 20px !important; 
          bottom: 15px !important; 
          justify-content: center;
        }
      }
    </style>
  </div>