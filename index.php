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
  <title>Aliance production</title>
</head>
<body class="front-page">
  <?php include_once('mobile-menu.php'); ?>
  <nav class="navbar">
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
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <div class="button add" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
      </div>
      <!-- /.header-content -->

      <?php 
      $colorText = 'header-features';
      $color_button = '#fff';
      $colorBorder = 'rgba(235, 235, 240, 0.20)';
      include_once('./template-parts/features-block.php'); ?>
    </div>
    <!-- /.container -->
    
  </header>

  <?php $color_button = '#fff';
  include_once('./template-parts/step-block.php'); ?>
  <?php $block_title = "Контрактное производство";
   include_once('./template-parts/section-production.php')?>
  <?php $block_title = "Собственные торговые марки"; 
  include_once('./template-parts/trademarks-block.php') ?>
  <?php include_once('./template-parts/founder-block.php'); ?>
  <?php include_once('./template-parts/clients-block.php');?>
  <!-- /.section clients -->
  <?php $block_title = "Блог экспертов в области производства";
  $blog_button = "Весь блог";
  include_once('./template-parts/blog-block.php');?>
  <?php include_once('footer.php'); ?>
  <?php include_once('modal.php'); ?>
</body>
</html>