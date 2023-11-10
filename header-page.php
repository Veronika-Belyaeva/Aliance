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
        <a href="/politics.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="/contact.php" class="header-nav-link">Контакты</a>
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

  <section class="section-other <?= $header_style ?>">
    <div class="container accessory">
      <div class="seporator seporator-other"></div>
          <h1 class="section-title other-title <?= $styleTitle;?>">
            <?php echo $page_title ?>
          </h1>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.php">Главная</a></li>
            <?php
            if(!empty($breadcrumb_li)) {
              echo '<li class="breadcrumb-item"><a href="'. $breadcrumb_li .'">'. $breadcrumb_title . '</a></li>';
            }
          ?>
            <li class="breadcrumb-item"><?php echo $page_title?></li>
          </ul>
    </div>
  </section>
</body>