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
        <a href="#" class="header-nav-link">Собственные торговые марки</a>
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

    <button class="navbar-button button" data-toggle="modal">
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
        <div class="button add">Подробнее о компании</div>
      </div>
      <!-- /.header-content -->

      <!-- Основной блок слайдера -->
      <div class="swiper features-slider">
        <!-- Обертка слайдера -->
        <ul class="swiper-wrapper header-features">
          <!-- Слайды -->
          <li class="swiper-slide header-features-item">
            <svg width="33" height="39">
              <use href="img/sprite.svg#time"></use>
            </svg> 
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="33" height="39">
              <use href="img/sprite.svg#setificate"></use>
            </svg> 
            <p class="header-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="33" height="39">
              <use href="img/sprite.svg#control"></use>
            </svg> 
            <p class="header-features-text">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="33" height="39">
              <use href="img/sprite.svg#delivery"></use>
            </svg> 
            <p class="header-features-text">Возможны поставки по всей России</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="33" height="39">
              <use href="img/sprite.svg#speed"></use>
            </svg> 
            <p class="header-features-text">Оперативное производство</p>
          </li>
        </ul>

        <!-- Кнопки навигации вперед/назад -->
        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg width="30" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg> 
          </div>
          <div class="slider-button-next">
            <svg width="30" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg> 
          </div>
        </div>
        <!-- /.slider-buttons -->
      </div>
      <!-- /.header-features -->
    </div>
    <!-- /.container -->
    
  </header>

  <section class="section section-light">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">схема работы</h2>
      <div class="swiper steps-slider">
        <!-- Additional required wrapper -->
        <ol class="swiper-wrapper steps">
          <!-- Slides -->
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
          <a href="#" class="button-link">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение договора</h3>
            <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</p>
          </li>
        </ol>
      
        <!-- If we need navigation buttons -->
        <div class="steps-buttons primary-buttons-wrapper">
          <div class="steps-button-prev primary-button-prev">
            <svg width="30" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg> 
          </div>
          <div class="steps-button-next primary-button-next">
            <svg width="30" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg> 
          </div>
        </div>
        <!-- /.slider-buttons -->
      </div>

    </div>
    <!-- /.container -->
  </section>
  <section class="section production">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">Контрактное производство</h2>
      <div class="cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
          </div>
          <!-- /.card-content -->
          <img 
          src="img/avto-him.png" 
          alt="Автомобильная химия" 
          class="card-image"
          >
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
          </div>
          <img src="img/chemicals.png" alt="Бытовая химия" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/Disinfectants.png" alt="Дезинфицирующие средства" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
          </div>
          <img src="img/Disinfectants.png" alt="Пищевые аэрозоли" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/avto-him.png" alt="Косметическая продукция" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
          </div>
          <img src="img/chemicals.png" alt="Краски аэрозольные" class="card-image">
        </a>
      </div>
    </div>
  </section>
  <section class="trade-marks">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title-different">собственные торговые марки</h2>
      <h2 class="section-title-small">собственные марки</h2>
      <div class="marks">
        <a href="#" class="mark">
          <svg class="marks-image">
            <use href="img/sprite.svg#AGTECH"></use>
          </svg>
          <h3 class="mark-title">Автохимия AG-Tech</h3>
          <p class="mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
        </a>
        <a href="#" class="mark">
          <svg class="marks-image">
            <use href="img/sprite.svg#AP"></use>
          </svg>
          <h3 class="mark-title">Автохимия AP</h3>
          <p class="mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
        </a>
      </div>
    </div>
  </section>
  <section class="section founder">
    <img src="img/founder.jpg" alt="founder" class="founder-photo">
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="seporator"></div>
          <h2 class="section-title">Отношение к делу и к клиентам</h2>
          <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия. <br><br>А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
          <a href="#" class="button-link">Подробнее о компании</a>
        </div>
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
  </section>
  <section class="section clients">
    <div class="container">
      <div class="seporator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#car-cosm"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#shirt"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#boots"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#bricks"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg height="30" width="30" class="clients-list-icon">
                <use href="img/sprite.svg#more"></use>
              </svg>
              И многих других
            </li>
          </ul>
        </div>
        <div class="clients-logo-list">
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client.jpg" alt="" class="clients-logo"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.section clients -->
  <section class="section blog">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2>
      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo.jpg" alt="" class="blog-card-image">
            <div class="blog-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo2.jpg" alt="" class="blog-card-image">
            <div class="blog-content">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo2.jpg" alt="" class="blog-card-image">
            <div class="blog-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </div>
          </a>
        </div>
        <div class="blog-slider-footer">
          <a href="#" class="button-link">Весь блог</a>
          <!-- If we need navigation buttons -->
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="30" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg> 
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="30" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg> 
            </div>
          </div>
        </div>
        <!-- /.blog-slider-footer -->
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section blog -->
  <?php include_once('footer.php'); ?>
  <?php include_once('modal.php'); ?>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>