<?php 
get_header('studio')
?>

    <main>
      <section class="hero">
        <div class="section hero__section">
          <h1 class="hero__title">Ефективні рішення для вашого бізнесу</h1>
          <button data-modal-open type="button" class="hero__button">Замовити послугу</button>
        </div>
      </section>

      <section class="section">
        <div class="conteiner">
          <h2 class="section-title-hidden">Особливості</h2>
          <ul class="features">
            <li class="features__item">
              <div class="features__icon-conteiner">
                <svg height="70" width="70">
                  <use href="./images/symbol-defs.svg#icon-antenna"></use>
                </svg>
              </div>
              <h3 class="features__title">Увага до деталей</h3>
              <p class="features__prg">
                Ідейні міркування, і навіть початок повсякденної роботи з формування позиції.
              </p>
            </li>

            <li class="features__item">
              <div class="features__icon-conteiner">
                <svg height="70" width="70">
                  <use href="./images/symbol-defs.svg#icon-clock"></use>
                </svg>
              </div>
              <h3 class="features__title">Пунктуальність</h3>
              <p class="features__prg">
                Завдання організації, особливо рамки і місце навчання кадрів тягне у себе.
              </p>
            </li>

            <li class="features__item">
              <div class="features__icon-conteiner">
                <svg height="70" width="70">
                  <use href="./images/symbol-defs.svg#icon-diagram"></use>
                </svg>
              </div>
              <h3 class="features__title">Планування</h3>
              <p class="features__prg">
                Так само консультація з широким активом значною мірою зумовлює.
              </p>
            </li>

            <li class="features__item">
              <div class="features__icon-conteiner">
                <svg height="70" width="70">
                  <use href="./images/symbol-defs.svg#icon-astronaut"></use>
                </svg>
              </div>
              <h3 class="features__title">Сучасні технології</h3>
              <p class="features__prg">
                Значимість цих проблем настільки очевидна, що реалізація планових завдань.
              </p>
            </li>
          </ul>
        </div>
      </section>

      <section class="section section--no-padding">
        <div class="conteiner">
          <h2 class="examples__title">Чим ми займаємося</h2>
          <ul class="examples__list">
            <li class="examples__item">
              <img
                srcset="./images/ex1.jpg 1x, ./images/ex1@2x.jpg 2x"
                src="./images/ex1.jpg"
                alt="клавіатура на столі"
                width="370"
                height="294"
                class="examples__img"
              />
              <p class="examples__prg">Десктопні додатки</p>
            </li>

            <li class="examples__item">
              <img
                srcset="./images/ex2.jpg 1x, ./images/ex2@2x.jpg 2x"
                src="./images/ex2.jpg"
                alt="дівчина за ноутбуком"
                width="370"
                height="294"
                class="examples__img"
              />
              <p class="examples__prg">Мобільні додатки</p>
            </li>

            <li class="examples__item">
              <img
                srcset="./images/ex3.jpg 1x, ./images/ex3@2x.jpg 2x"
                src="./images/ex3.jpg"
                alt="малюнок на планшеті"
                width="370"
                height="294"
                class="examples__img"
              />
              <p class="examples__prg">Дизайнерські рішення</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="section section--team">
        <div class="conteiner">
          <h2 class="team__title">Наша команда</h2>
          <ul class="team__list">
            <li class="human">
              <img
                srcset="./images/h1.jpg 1x, ./images/h1@2x.jpg 2x"
                src="./images/h1.jpg"
                alt="чоловік Ігор"
                class="human__img"
                width="100%"
              />
              <div class="human__bgr">
                <h3 class="human__title">Ігор Дем'яненко</h3>
                <p class="human__prg" lang="en">Product Designer</p>
                <ul class="human-social-networks">
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-linkedin"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="human">
              <img
                srcset="./images/h2.jpg 1x, ./images/h2@2x.jpg 2x"
                src="./images/h2.jpg"
                alt="жінка Ольга"
                class="human__img"
                width="100%"
              />
              <div class="human__bgr">
                <h3 class="human__title">Ольга Рєпіна</h3>
                <p class="human__prg" lang="en">Frontend Developer</p>
                <ul class="human-social-networks">
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-linkedin"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="human">
              <img
                srcset="./images/h3.jpg 1x, ./images/h3@2x.jpg 2x"
                src="./images/h3.jpg"
                alt="чоловік Микола"
                class="human__img"
                width="100%"
              />
              <div class="human__bgr">
                <h3 class="human__title">Микола Тарасов</h3>
                <p class="human__prg" lang="en">Marketing</p>
                <ul class="human-social-networks">
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-linkedin"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="human">
              <img
                srcset="./images/h4.jpg 1x, ./images/h4@2x.jpg 2x"
                src="./images/h4.jpg"
                alt="чоловік Михайло"
                class="human__img"
                width="100%"
              />
              <div class="human__bgr">
                <h3 class="human__title">Михайло Єрмаков</h3>
                <p class="human__prg" lang="en">UI Designer</p>
                <ul class="human-social-networks">
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="human-social-networks__link">
                      <svg class="human-social-networks__icon" height="20" width="20">
                        <use href="./images/symbol-defs.svg#icon-linkedin"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section">
        <div class="conteiner">
          <h2 class="company__title">Постійні клієнти</h2>
          <ul class="company__list">
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-one"></use>
                </svg>
              </a>
            </li>
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-two"></use>
                </svg>
              </a>
            </li>
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-three"></use>
                </svg>
              </a>
            </li>
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-fore"></use>
                </svg>
              </a>
            </li>
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-five"></use>
                </svg>
              </a>
            </li>
            <li class="company__item">
              <a href="" class="company__link">
                <svg class="company__icon" height="60" width="106">
                  <use href="./images/symbol-defs.svg#icon-logo-six"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>

<?php
get_footer()
?>