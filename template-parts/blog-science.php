<section>
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title about-title">Исследовательский центр Aliance production</h2>
      <ul class="our-production-list">
        <li class="our-production-item">
          <p class="our-production-research-text <?= $styleText ?>">
            Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.</p>
        </li>
        <li class="clients-list-item">
          <p class="our-production-research-text none-text <?= $styleText ?>">
            С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
          </p>
        </li>
      </ul>
    </div>
          <!-- Slider main container -->
          <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="/blog-more.php" class="swiper-slide blog-card-about <?= $styleBlogSlider ?>">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo.jpg">
              <img src="img/blog/blog-photo.jpg" alt="blog" class="blog-card-image blog-about-photo">
            </picture>  
          </a>
          <a href="#" class="swiper-slide blog-card-about <?= $styleBlogSlider ?>">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo2.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo2.jpg">
              <img src="img/blog/blog-photo2.jpg" alt="blog" class="blog-card-image">
            </picture> 
          </a>
          <a href="/blog-more.php" class="swiper-slide blog-card-about <?= $styleBlogSlider ?>">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo.jpg">
              <img src="img/blog/blog-photo.jpg" alt="blog" class="blog-card-image">
            </picture>  
          </a>
          <a href="#" class="swiper-slide blog-card-about <?= $styleBlogSlider ?>">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo2.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo2.jpg">
              <img src="img/blog/blog-photo2.jpg" alt="blog" class="blog-card-image">
            </picture> 
          </a>
        </div>
        <div class="blog-slider-about-footer">
          <?php
            if(!empty($blog_button)) {
              echo '<a href="/blog.php" class="button-link">'. $blog_button . '</a>';
            }
          ?>
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
  </section>