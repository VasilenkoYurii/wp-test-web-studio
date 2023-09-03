<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Студія WebStudio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.0.0/modern-normalize.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="./css/main.min.css" /> -->

    <?php 
    wp_head()   
    ?>

  </head>

  <body>
    <header class="page-header">
      <div class="conteiner page-header__conteiner">
        <nav class="logo-nav">
          <div class="logo-nav__mobile">
            <a href="./index.html" lang="en" class="logo"
              ><span class="logo__logo--first-words">Web</span>Studio</a
            >

            <button
              class="menu-toggle js-open-menu"
              aria-expanded="false"
              aria-controls="mobile-menu"
            >
              <svg
                width="40"
                height="40"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use class="icon-menu" href="./images/symbol-defs.svg#icon-menu"></use>
              </svg>
            </button>
          </div>

          <div class="menu-container js-menu-container" id="mobile-menu">
            <button class="menu-toggle js-close-menu">
              <svg
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
              >
                <use class="icon-cross" href="./images/symbol-defs.svg#icon-close"></use>
              </svg>
            </button>

            <ul class="mobile-menu">
              <li><a href="./index.html" class="link link--current">Студія</a></li>
              <li><a href="./portfolio.html" class="link">Портфоліо</a></li>
              <li><a href="" class="link">Контакти</a></li>
            </ul>

            <div class="mobile-container">
              <ul class="mobile-contacts">
                <li class="item">
                  <a href="mailto:info@devstudio.com" class="mobile-contacts__mail">
                    info@devstudio.com</a
                  >
                </li>
                <li class="item">
                  <a href="tel:+380961111111" class="mobile-contacts__tel"> +38 096 111 11 11</a>
                </li>
              </ul>

              <ul class="mobile-social">
                <li class="mobile-social__item">
                  <a href="" class="mobile-social__link">Instagram</a>
                </li>
                <li class="mobile-social__item">
                  <a href="" class="mobile-social__link">Twitter</a>
                </li>
                <li class="mobile-social__item">
                  <a href="" class="mobile-social__link">Facebook</a>
                </li>
                <li class="mobile-social__item">
                  <a href="" class="mobile-social__link">LinkedIn</a>
                </li>
              </ul>
            </div>
          </div>

          <ul class="site-nav">
            <li>
              <a href="./index.html" class="site-nav__link site-nav__link--current">Студія</a>
            </li>
            <li><a href="./portfolio.html" class="site-nav__link">Портфоліо</a></li>
            <li><a href="" class="site-nav__link">Контакти</a></li>
          </ul>
        </nav>

        <ul class="auth-nav">
          <li>
            <a href="mailto:info@devstudio.com" class="auth-nav__link auth-nav__link--envelope">
              <svg class="mail-icon" height="12" width="16">
                <use href="./images/symbol-defs.svg#icon-envelope"></use>
              </svg>
              info@devstudio.com</a
            >
          </li>
          <li>
            <a href="tel:+380961111111" class="auth-nav__link auth-nav__link--smartphone">
              <svg class="smartphone-icon" height="16" width="10">
                <use href="./images/symbol-defs.svg#icon-smartphone"></use>
              </svg>
              +38 096 111 11 11</a
            >
          </li>
        </ul>
      </div>
    </header>