<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title><?php echo $page_title?> - Aliance production</title>
  </head>
<body>
  <?php include_once('mobile-menu.php'); ?>
  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>  
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>   
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="/contract.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="/trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>

    <div class="header-phone">
      <svg class="phone-svg" width="16" height="17">
        <use href="img/sprite.svg#Phone"></use>
      </svg> 
      <a href="tel:+74996861014" class="header-phone-link">
        +7 (499) 686-10-14
      </a>
    </div>
    <!-- /.header-phone -->

    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="16" height="15">
        <use href="img/sprite.svg#Phone"></use>
      </svg> 
      <span class="button-text">Получить консультацию</span>
    </button>

  </nav>
  <!-- /.navbar -->

  <section class="section <?= $header_style ?>">
    <div class="container accessory">
      <div class="seporator"></div>
          <h1 class="section-title about-title">
            <?php echo $page_title ?>
          </h1>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.php">Главная</a></li>
            <li class="breadcrumb-item"><?php echo $page_title?></li>
          </ul>
    </div>
  </section>
  <?php include_once('modal.php'); ?>
</body>