<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <script>
    /*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-setclasses !*/
    !function(n,e,s){function o(n){var e=r.className,s=Modernizr._config.classPrefix||"";if(c&&(e=e.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+s+"no-js(\\s|$)");e=e.replace(o,"$1"+s+"js$2")}Modernizr._config.enableClasses&&(e+=" "+s+n.join(" "+s),c?r.className.baseVal=e:r.className=e)}function a(n,e){return typeof n===e}function i(){var n,e,s,o,i,l,r;for(var c in f)if(f.hasOwnProperty(c)){if(n=[],e=f[c],e.name&&(n.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(s=0;s<e.options.aliases.length;s++)n.push(e.options.aliases[s].toLowerCase());for(o=a(e.fn,"function")?e.fn():e.fn,i=0;i<n.length;i++)l=n[i],r=l.split("."),1===r.length?Modernizr[r[0]]=o:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=o),t.push((o?"":"no-")+r.join("-"))}}var t=[],f=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,e){var s=this;setTimeout(function(){e(s[n])},0)},addTest:function(n,e,s){f.push({name:n,fn:e,options:s})},addAsyncTest:function(n){f.push({name:null,fn:n})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var r=e.documentElement,c="svg"===r.nodeName.toLowerCase();i(),o(t),delete l.addTest,delete l.addAsyncTest;for(var u=0;u<Modernizr._q.length;u++)Modernizr._q[u]();n.Modernizr=Modernizr}(window,document);
  </script>
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
</body>


<section class="section">
  <div class="error-wrapper">
    <p class="error-num">404</p>
    <p class="not-found-text">Страница не найдена</p>
    <p class="repeat">
      Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
    </p>
    <a href="/index.php" class="back">
      <button class="button button-error">
        Вернуться на главную
      </button>
    </a>
    
  </div>
</section>








<footer class="footer">
<hr color="#EBEBF0" class="footer-seporator">
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
            <svg class="footer-social-icon" height="23" width="23">
              <use href="img/sprite.svg#vk"></use>
            </svg> 
          </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" height="23" width="23">
              <use href="img/sprite.svg#inst"></use>
            </svg> 
          </a>
        </div>
        <!-- /.footer-social -->
      </div>
      <!-- /.footer-top -->
    </div>
    <hr color="#EBEBF0" class="footer-seporator">
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="/product_avtohim.php" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="/product_ag-tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper footer-menu2-wrapper">
          <ul class="footer-menu-list footer-menu2-list">
            <li class="footer-menu-item">
              <a href="/about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="/contact.php" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->
    <hr color="#EBEBF0" class="footer-seporator">
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.</p>
            <a href="/politics.php" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- /.footer-legal -->
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <span class="made-in none-made-in">Дизайн и разработка:</span>
          <svg class="footer-social-icon ruso-icon" height="11" width="40">
            <use href="img/sprite.svg#RUSO"></use>
          </svg> 
        </div>
        <!-- /.footer-author -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>


  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>
