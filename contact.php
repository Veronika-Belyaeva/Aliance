<?php 
$page_title = 'Контакты';
$header_style = 'bg-grey';
include_once('header-page.php'); ?>
    <div class="container">
      <div class="footer-top">
        <svg class="logo-svg footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>  
        <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
        <div class="footer-info">
          <svg class="address-icon" height="20" width="20">
            <use href="img/sprite.svg#mark"></use>
          </svg> 
          <address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
        </div>
        <div class="footer-info">
          <svg class="main-icon" height="20" width="20">
            <use href="img/sprite.svg#mail"></use>
          </svg> 
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" height="26" width="26">
              <use href="img/sprite.svg#vk"></use>
            </svg> 
          </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" height="26" width="26">
              <use href="img/sprite.svg#inst"></use>
            </svg> 
          </a>
        </div>
        <!-- /.footer-social -->
      </div>
      <!-- /.footer-top -->
    </div>
<?php include_once('footer.php'); ?>