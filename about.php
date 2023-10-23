<?php 
$page_title = 'О компании';
$header_style = 'bg-grey';
include_once('header-page.php'); ?>
<section class="section about">
  <picture>
    <source type="image/webp" srcset="img/about.webp">
    <source type="image/jpeg" srcset="img/about.png">
    <img src="img/about.png" alt="about production" class="about-photo">
  </picture>
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="about-content">
          <div class="seporator"></div>
          <h2 class="section-title about-title">мы - эксперты в области производства химии</h2>
          <p class="about-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
        </div>
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
  </section>
<?php
$container = 'container';
$colorText = 'header-features-ag-tech';
$colorBorder = 'rgba(235, 235, 240, 1)';
$color_button = '#292D33';
include_once('./template-parts/features-block.php'); ?>

<section class="section section-other">
    <div class="container">
      <div class="seporator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title">Наше производство</h2>
          <p class="our-production-text">
            Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий. <br><br>
            Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
          </p>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомобильная химия
            </li>
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#home"></use>
              </svg>
              Бытовая химия
            </li>
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#dis"></use>
              </svg>
              Дезинфицирующие средства
            </li>
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#more"></use>
              </svg>
              Пищевые аэрозоли
            </li>
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметическая продукция
            </li>
            <li class="clients-list-item">
              <svg height="25" width="25" class="clients-list-icon">
                <use href="img/sprite.svg#brush"></use>
              </svg>
              Краски аэрозольные
            </li>
          </ul>
        </div>
        <picture>
          <source type="image/webp" srcset="img/Our_production.webp">
          <source type="image/jpeg" srcset="img/Our_production.png">
          <img src="img/Our_production.png" alt="our production" class="our_production-photo">
        </picture>
      </div>
    </div>
  </section>


<?php include_once('./template-parts/founder-block.php'); ?>
<?php include_once('./template-parts/clients-block.php'); ?>
<?php include_once('footer.php'); ?>
