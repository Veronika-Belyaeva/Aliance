<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <svg class="close-icon" height="20" width="20">
        <use href="img/sprite.svg#close"></use>
      </svg> 
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях! 
    </p>
    <form action="handler.php" method="POST" class="modal-form">
    <div class="input-group-wrapper input-group-vertical">
      <div class="input-group modal-input-group">
        <input 
          id="modal-user-name" 
          type="text" 
          class="input modal-input"
          name="username"
          placeholder=" "
          maxLength="100"
          required
        >
        <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
      </div>
      <!-- /.input-group -->
      <div class="input-group modal-input-group">
        <input 
          id="modal-user-phone" 
          type="text" 
          class="input modal-input phone-mask"
          name="userphone"
          placeholder=" "
          maxLength="30"
          required
        >
        <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
      </div>
      <!-- /.input-group -->
      </div>
      <!-- /.input-group-wrapper -->
      <div class="modal-form-footer">
        <button type="submit" class="button modal-form-button">Отправить заявку</button>
        <div class="notify">
          <svg class="notify-icon" height="14" width="14">
            <use href="img/sprite.svg#shield"></use>
          </svg> 
          <p class="notify-text">
            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
          </p>
        </div>
      </div>
      <!-- /.modal-form-footer -->
    </form>
  </div>
</div>

<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <picture>
      <source type="image/webp" srcset="img/thanks_illu.webp">
      <source type="image/jpeg" srcset="img/thanks_illu.jpg">
      <img src="img/thanks_illu.jpg" alt="Thanks" class="thanks-image">
    </picture>
    <h2 class="modal-title">Спасибо за заявку!</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
      <svg class="close-icon" height="20" width="20">
        <use href="img/sprite.svg#close"></use>
      </svg> 
    </a>
    <p class="modal-text">
      Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <a href="/index.php" class="back">
      <button class="button button-thanks">
        Вернуться на главную
      </button>
    </a>
  </div>
</div>