<!-- Основной блок слайдера -->
<style>
  .header-features-item {
    border: 1px solid <?= $colorBorder; ?>;
  }
  .slider-button-prev,
  .slider-button-next {
    fill: <?= $color_button; ?>;
  }
  @media (max-width: 1199px) {
    .slider-buttons {
      border: 1px solid <?= $colorBorder; ?>;
    }
  }
</style>
<div class="<?= $container;?>">
  <div class="swiper features-slider">
        <!-- Обертка слайдера -->
        <ul class="swiper-wrapper <?= $colorText;?>">
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
</div>