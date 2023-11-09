<?php 
$page_title = 'Контакты';
$header_style = 'bg-grey';
include_once('header-page.php'); ?>

<div class="container">
  <div class="contact">
    <a href="tel:+74996861014" class="contact-phone">+7 (499) 686-10-14</a>
    <div class="contact-address">
      <svg class="address-icon contact-icon contact-address-icon" height="20" width="20">
        <use href="img/sprite.svg#mark"></use>
      </svg> 
      <address class="contact-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
    </div>
    <div class="contact-mail">
      <svg class="main-icon contact-icon" height="25" width="25">
        <use href="img/sprite.svg#mail"></use>
      </svg> 
      <a href="mailto:a.dragunov@tdaliance.ru" class="contact-info-address">a.dragunov@tdaliance.ru</a>
    </div>
    <div class="contact-social">
      <a href="#" class="footer-social-link">
        <svg class="contact-social-icon" height="26" width="26">
          <use href="img/sprite.svg#vk"></use>
        </svg> 
      </a>
      <a href="#" class="footer-social-link">
        <svg class="contact-social-icon" height="26" width="26">
          <use href="img/sprite.svg#inst"></use>
        </svg> 
      </a>
    </div>
    <!-- /.footer-social -->
  </div>
  <!-- /.footer-top -->
  <picture>
    <source type="image/webp" srcset="img/map.webp">
    <source type="image/jpeg" srcset="img/map.png">
    <img src="img/map.png" alt="blog" class="map-image">
  </picture>
</div>
<?php include_once('footer.php'); ?>