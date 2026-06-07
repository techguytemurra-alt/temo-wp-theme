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