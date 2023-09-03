
    <footer class="page-footer">
      <div class="conteiner page-footer__container">
        <div class="page-footer__tablet-box">
          <div class="page-footer__contact">
            <div class="footer-logo-box">
              <a href="./index.html" lang="en" class="footer-logo-box__logo"
                ><span class="footer-logo-box__logo-first-words">Web</span>Studio</a
              >
            </div>

            <address class="footer-address">
              <ul>
                <li class="footer-address__item">
                  <a
                    class="footer-address__link-place"
                    href="https://goo.gl/maps/CPtrU1FHBa2aNyZL9"
                    target="_blank"
                    rel="noopener noreferrer nofollow"
                    >м. Київ, пр-т Лесі Українки, 26</a
                  >
                </li>
                <li class="footer-address__item">
                  <a href="mailto:info@devstudio.com" class="footer-addres__link"
                    >info@devstudio.com</a
                  >
                </li>
                <li class="footer-address__item">
                  <a href="tel:+380961111111" class="footer-addres__link">+38 096 111 11 11</a>
                </li>
              </ul>
            </address>
          </div>

          <div class="footer-social-media">
            <p class="footer-social-media__prg">Приєднуйтесь</p>

            <ul class="footer-social-media__list">
              <li>
                <a href="#" class="footer-social-media__link">
                  <svg class="footer-social-media__icon" height="20" width="20">
                    <use href="./images/symbol-defs.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer-social-media__link">
                  <svg class="footer-social-media__icon" height="20" width="20">
                    <use href="./images/symbol-defs.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer-social-media__link">
                  <svg class="footer-social-media__icon" height="20" width="20">
                    <use href="./images/symbol-defs.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer-social-media__link">
                  <svg class="footer-social-media__icon" height="20" width="20">
                    <use href="./images/symbol-defs.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-form-box">
          <form class="footer-form">
            <label for="email" class="footer-form__label">Підпишіться на розсилку</label>
            <div class="footer-form__string-box">
              <input
                class="footer-form__email"
                type="email"
                name="email"
                id="email"
                placeholder="E-mail"
                autocomplete="off"
              />
              <button type="submit" class="footer-form__button">
                Підписатися
                <svg class="footer-form__icon-send" height="24" width="24">
                  <use href="./images/icons.svg#icon-icon-send"></use>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </footer>

    <div data-modal class="backdrop is-hidden">
      <div class="modal">
        <button data-modal-close class="modal__exit-box">
          <svg class="modal__exit-icon" height="18" width="18">
            <use href="./images/symbol-defs.svg#icon-close-black"></use>
          </svg>
        </button>

        <p class="modal__title">Залиште свої дані, ми вам передзвонимо</p>

        <form>
          <label class="modal__label">
            Ім'я
            <div class="modal__input-box">
              <input type="text" name="name" class="modal__input" />
              <svg class="modal__input-icon" height="18" width="18">
                <use href="./images/icons.svg#icon-person-black"></use>
              </svg>
            </div>
          </label>

          <label class="modal__label">
            Телефон
            <div class="modal__input-box">
              <input type="tel" name="tel" class="modal__input" />
              <svg class="modal__input-icon" height="18" width="18">
                <use href="./images/icons.svg#icon-phone-black"></use>
              </svg>
            </div>
          </label>

          <label class="modal__label">
            Пошта
            <div class="modal__input-box">
              <input type="email" name="email" class="modal__input" />
              <svg class="modal__input-icon" height="18" width="18">
                <use href="./images/icons.svg#icon-email-black"></use>
              </svg>
            </div>
          </label>

          <label class="modal__label">
            Коментар
            <textarea
              class="modal__feedback"
              name="feedback"
              placeholder="Введіть текст"
            ></textarea>
          </label>

          <label class="modal__checkbox-label">
            <div class="modal__checkbox-input-box">
              <input
                class="modal__checkbox-input"
                type="checkbox"
                name="topic"
                value="Погоджуюся з розсилкою та приймаю"
              />
              <svg class="modal__checkbox-icon" width="16" height="15">
                <use href="./images/icons.svg#icon-check"></use>
              </svg>
              <p class="modal__checkbox-prg">
                Погоджуюся з розсилкою та приймаю<a href="#" class="modal__checkbox-link"
                  >Умови договору</a
                >
              </p>
            </div>
          </label>

          <button type="submit" class="modal__submit-button-modal">Відправити</button>
        </form>
      </div>
    </div>

    <!-- <script src="./assets/js/modal.js"></script>
    <script src="./assets/js/mobile-menu.js"></script> -->

    
    <?php 
    wp_footer();
    ?>

  </body>
</html>
