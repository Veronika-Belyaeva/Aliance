<style>
  .steps-button-prev,
  .steps-button-next {
    fill: <?= $color_button; ?>;
  }
  @media (max-width: 1199px) {
    .slider-buttons {
      border: 1px solid <?= $colorBorder; ?>;
    }
  }
</style>
<section class="section section-light">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">схема работы</h2>
      <div class="swiper steps-slider">
        <!-- Additional required wrapper -->
        <ol class="swiper-wrapper steps <?= $styleSteps?>">
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