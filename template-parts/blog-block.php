<style>
  .blog-button-prev,
  .blog-button-next {
    fill: <?= $color_button; ?>;
  }
</style>
<section class="section blog">
    <div class="container">
      <?php
        if(!empty($block_title)) {
          echo '<div class="seporator"></div>';
          echo '<h2 class="section-title blog-title">'. $block_title . '</h2>';
        }
      ?>

      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="/blog-more.php" class="swiper-slide blog-card  blog-card-before">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo.jpg">
              <img src="img/blog/blog-photo.jpg" alt="blog" class="blog-card-image">
            </picture>  
            <div class="blog-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo2.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo2.jpg">
              <img src="img/blog/blog-photo2.jpg" alt="blog" class="blog-card-image">
            </picture> 
            <div class="blog-content">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </div>
          </a>
          <a href="#" class="swiper-slide blog-card blog-card-before">
            <picture>
              <source type="image/webp" srcset="img/blog/blog-photo2.webp">
              <source type="image/jpeg" srcset="img/blog/blog-photo2.jpg">
              <img src="img/blog/blog-photo2.jpg" alt="blog" class="blog-card-image">
            </picture>
            <div class="blog-content">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </div>
          </a>
        </div>
        <div class="blog-slider-footer <?= $styleFooter; ?>">
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
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section blog -->