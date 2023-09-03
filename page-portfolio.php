<?php 
get_header('portfolio')
?>

<?php

/* Template Name: portfolio */

?>

<main>

<section>
    <h1> <?php the_title() ?> </h1>
    <h2> <?php echo get_post_meta(get_the_ID(), 'descr', true) ?> </h2>
</section>

      <section class="section">
        <div class="conteiner page-list__conteiner">
          <h1 class="section-title-hidden">Портфоліо</h1>
          <ul class="page-list">
            <li class="page-list__item">
              <button type="button" class="page-list__button">Веб-сайти</button>
            </li>
            <li class="page-list__item">
              <button type="button" class="page-list__button">Усі</button>
            </li>
            <li class="page-list__item">
              <button type="button" class="page-list__button">Додатки</button>
            </li>
            <li class="page-list__item">
              <button type="button" class="page-list__button">Дизайн</button>
            </li>
            <li class="page-list__item">
              <button type="button" class="page-list__button">Маркетинг</button>
            </li>
          </ul>

          <ul class="technology">
          <?php
          
            $posts = get_posts(array(
              'numberposts'      => -1,
              'category'         => 0,
              'orderby'          => 'date',
              'order'            => 'ASC',
              'include'          => array(),
              'exclude'          => array(),
              'meta_key'         => '',
              'meta_value'       => '',
              'post_type'        => 'portfolio',
              'suppress_filters' => true,
            ));

            foreach($posts as $post):
            setup_postdata($post);

            $image_id = get_post_thumbnail_id($post);
            log($image_id);
            $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            ?>

            <li class="technology__box">
            <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                    <img
                        srcset="<?php echo get_the_post_thumbnail_url($post, 'medium'); ?> 1x, <?php echo get_the_post_thumbnail_url($post, 'large'); ?> 2x"
                        src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>"
                        alt="<?php echo esc_attr($alt_text); ?>"
                        width="100%"
                        height="100%"
                        class="technology__img"
                    >
                    <p class="technology__overplay">
                        Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                        Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                        приватну особу.
                    </p>
                </div>
                <div class="technology__description">
                    <h2 class="technology__section-title"><?php the_title(); ?></h2>
                    <div class="technology__prg">
                        <?php
                            the_content();
                        ?>
                    </div>
                </div>
            </a>
            </li>

            <?php
        endforeach;
        wp_reset_postdata();
    ?>
</ul>

          <!-- <ul class="technology">
            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-1.jpg 1x, ./images/prtf-1@2x.jpg 2x"
                    src="./images/prtf-1.jpg"
                    alt="Веб сайт у ноутбуці"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>
                <div class="technology__description">
                  <h2 class="technology__section-title">Технокряк</h2>
                  <p class="technology__prg">Веб-сайт</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-2.jpg 1x, ./images/prtf-2@2x.jpg 2x"
                    src="./images/prtf-2.jpg"
                    alt="Баскетбол"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>
                <div class="technology__description">
                  <h2 class="technology__section-title">
                    Постер <span lang="en">New Orlean vs Golden Star</span>
                  </h2>
                  <p class="technology__prg">Дизайн</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-3.jpg 1x, ./images/prtf-3@2x.jpg 2x"
                    src="./images/prtf-3.jpg"
                    alt="Лого ресторану"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title">Ресторан <span lang="en">Seafood</span></h2>
                  <p class="technology__prg">Додаток</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-4.jpg 1x, ./images/prtf-4@2x.jpg 2x"
                    src="./images/prtf-4.jpg"
                    alt="Бездротові навушники"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title">Проєкт <span lang="en">Prime</span></h2>
                  <p class="technology__prg">Маркетинг</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-5.jpg 1x, ./images/prtf-5@2x.jpg 2x"
                    src="./images/prtf-5.jpg"
                    alt="Коробки"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title">Проєкт <span lang="en">Boxes</span></h2>
                  <p class="technology__prg">Додаток</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-6.jpg 1x, ./images/prtf-6@2x.jpg 2x"
                    src="./images/prtf-6.jpg"
                    alt="Моноблок"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title" lang="en">Inspiration has no Borders</h2>
                  <p class="technology__prg">Веб-сайт</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-7.jpg 1x, ./images/prtf-7@2x.jpg 2x"
                    src="./images/prtf-7.jpg"
                    alt="Відкритий журнал"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title">
                    Видання <span lang="en">Limited Edition</span>
                  </h2>
                  <p class="technology__prg">Дизайн</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-8.jpg 1x, ./images/prtf-8@2x.jpg 2x"
                    src="./images/prtf-8.jpg"
                    alt="Етикетка"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title">Проєкт LAB</h2>
                  <p class="technology__prg">Маркетинг</p>
                </div>
              </a>
            </li>

            <li class="technology__box">
              <a href="#" class="technology__link">
                <div class="technology__overplay-box">
                  <img
                    srcset="./images/prtf-9.jpg 1x, ./images/prtf-9@2x.jpg 2x"
                    src="./images/prtf-9.jpg"
                    alt="Друк на ноутбуці"
                    width="100%"
                    height="100%"
                    class="technology__img"
                  />
                  <p class="technology__overplay">
                    Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                    Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                    приватну особу.
                  </p>
                </div>

                <div class="technology__description">
                  <h2 class="technology__section-title" lang="en">Growing Business</h2>
                  <p class="technology__prg">Додаток</p>
                </div>
              </a>
            </li>
          </ul> -->
        </div>
      </section>
    </main>

<?php
get_footer()
?>