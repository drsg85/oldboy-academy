<?php 
/*
    Template Name: Home Page
*/
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" />
    <title>Oldboy Academy</title>
</head>

<body>
    <!-- Header -->
    <header class="page-header">
        <div class="page-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип"/>
            </a>
        </div>

        <nav class="main-nav">
            <div class="main-nav__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип монохром"/>
                </a>
            </div>
            <ul class="main-nav__list">
                <li class="main-nav__item">
                    <a class="main-nav__link" href="#about">Об Академии</a>
                </li>
                <li class="main-nav__item">
                    <a class="main-nav__link" href="#features">Преимущества</a>
                </li>
                <li class="main-nav__item">
                    <a class="main-nav__link" href="#courses">Наши Курсы</a>
                </li>
                <!-- <li class="main-nav__item">
                    <a class="main-nav__link" href="#team">Команда</a>
                </li> -->
                <li class="main-nav__item">
                    <a class="main-nav__link" href="#contacts">Контакты</a>
                </li>
            </ul>

            <div class="main-nav__social">
                <div class="masson">
                    <div class="masson__logo">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/masson.png" alt="" />
                    </div>
                    <div class="masson__social">
                        <a class="icon-vkontakte" href="#"></a>
                        <a class="icon-instagram" href="#"></a>
                    </div>
                    <a class="masson__tag" href="#">#
                        <em>OldboyAcademy</em>
                    </a>
                </div>
            </div>
        </nav>

        <div class="page-header__phone">
            <a href="tel:+79114567890">+7 911 456-78-90</a>
        </div>
        <div class="menu-icon">
            <div class="menu-icon__middle"></div>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <aside class="hero-aside">
            <div class="hero-aside__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип монохром"/>
                </a>
            </div>
            <div class="hero-aside__wrapper">
                <h1 class="hero-aside__title">Добро
                    <br>пожаловать
                    <br>в&nbsp;Академию
                    <br>
                    <strong>«OldBoy»</strong>
                </h1>
                <div class="hero-aside__footnote">
                    <h2 class="hero-aside__subtitle">Школа барберинга</h2>
                    <p class="hero-aside__description">Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа</p>
                </div>
            </div>
        </aside>
        <div class="hero__social">
            <div class="masson masson--hero">
                <div class="masson__logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/masson.png" alt="" />
                </div>
                <div class="masson__social">
                    <a class="icon-vkontakte" href=""></a>
                    <a class="icon-instagram" href=""></a>
                </div>
            </div>
        </div>
        <div class="slider" id="header-slider">
            <?php
                $args = array(
                    'category_name' => 'courses'
                );

                query_posts($args);
                $counter = 0;

                if (have_posts()) {
                    while (have_posts() && ($counter < 3)) {
                        the_post();
                        $counter++;
                        // vars
                        $course_name = get_field('course_name');
                        $course_date = new DateTime(get_field('course_date'));
            ?>

            <div class="slider__slide">
                <div class="hero-form">
                    <header class="hero-form__header">
                        <h2 class="hero-form__title">
                            <strong><?php echo $course_name; ?></strong>
                        </h2>
                        <p class="hero-form__subtitle">
                            Старт группы<br>
                            <?php echo '$course_date;' ?>
                        </p>
                    </header>
                    <div class="hero-form__wrapper">
                        <form class="hero-form__form" action="">
                            <input class="hero-form__input" type="text" name="name" placeholder="Имя" />
                            <input class="hero-form__input" type="text" name="phone" placeholder="Телефон" />
                            <input class="hero-form__input" type="email" name="email" placeholder="Электронная почта" />
                            <input class="hero-form__button" type="submit" value="Записаться" />
                        </form>
                        <div class="hero-form__warning">Заполняя данную форму
                            <br> вы&nbsp;принимаете условия
                            <br>
                            <a href="#">политики конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                    }
                }
            ?>

            <div class="slider__slide">
                <div class="hero-form">
                    <header class="hero-form__header">
                        <h2 class="hero-form__title">Стань моделью!</h2>
                        <p class="hero-form__subtitle">Запись на бесплатную стрижку</p>
                    </header>
                    <div class="hero-form__wrapper">
                        <form class="hero-form__form" action="">
                            <input class="hero-form__input" type="text" name="name" placeholder="Имя" />
                            <input class="hero-form__input" type="text" name="phone" placeholder="Телефон" />
                            <input class="hero-form__button" type="submit" value="Записаться" />
                        </form>
                        <div class="hero-form__warning">Заполняя данную форму
                            <br> вы&nbsp;принимаете условия
                            <br>
                            <a href="http://">политики конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about__row">
            <div class="about__logo">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой цветно логотип" />
            </div>
            <div class="about__content about__content--right">
                <h2 class="about__title">
                    <?php echo get_theme_mod('Заголовок', 'OldBoy Academy'); ?>
                </h2>
                <p class="about__text">
                    <?php echo get_theme_mod('Текст для секции верхняя часть', 'OldBoyAcademy'); ?>
                </p>
                <p class="about__text">
                    <?php echo get_theme_mod('Текст для секции нижняя часть', 'OldBoyAcademy'); ?>
                </p>
                <div class="about__more">
                    <a class="button" href="#">Подробнее об Академии</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Selling features -->
    <section class="selling-features" id="features">
        <article class="feature feature--active">
            <header class="feature__header">
                <h3 class="feature__title">
                    <?php echo get_theme_mod('title_of_balance', 'OldBoyAcademy'); ?>
                </h3>
                <div class="feature__icon">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/target.svg" alt="" />
                </div>
            </header>
            <div class="feature__body">
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_1', 'OldboyAcademy'); ?>
                </p>
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_2', 'OldboyAcademy'); ?>
                </p>
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_3', 'OldboyAcademy'); ?>
                </p>
            </div>
            <div class="feature__more feature__more--balance">
                <a href="#">Подробнее</a>
            </div>
            <div class="feature__background feature__background--balance">
                <div class="feature__deco">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/brain.svg" alt="" />
                </div>
            </div>
        </article>
        <article class="feature">
            <header class="feature__header">
                <h3 class="feature__title">
                    <?php echo get_theme_mod('title_of_conditions', 'OldBoyAcademy'); ?>
                </h3>
                <div class="feature__icon">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/university.svg" alt="" />
                </div>
            </header>
            <div class="feature__body">
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_4', 'OldBoyAcademy'); ?>
                </p>
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_5', 'OldBoyAcademy'); ?>
                </p>
            </div>
            <div class="feature__more feature__more--comfort">
                <a href="#">Подробнее</a>
            </div>
            <div class="feature__background feature__background--comfort">
                <div class="feature__deco">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/barber-chair.svg" alt="" />
                </div>
            </div>
        </article>
        <article class="feature">
            <header class="feature__header">
                <h3 class="feature__title">
                    <?php echo get_theme_mod('title_of_network', 'OldBoyAcademy'); ?>
                </h3>
                <div class="feature__icon">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/razor.svg" alt="" />
                </div>
            </header>
            <div class="feature__body">
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_6','OldBoyAcademy'); ?>
                </p>
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_7','OldBoyAcademy'); ?>
                </p>
                <p class="feature__item">
                    <?php echo get_theme_mod('feature_text_8','OldBoyAcademy'); ?>
                </p>
            </div>
            <div class="feature__more feature__more--connections">
                <a href="#">Подробнее</a>
            </div>
            <div class="feature__background feature__background--connections">
                <div class="feature__deco">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/scissors.svg" alt="" />
                </div>
            </div>
        </article>
    </section>

    <!-- Gallery -->
    <section class="gallery">
        <div class="gallery__preview"></div>
        <header class="gallery__header">
            <h2 class="gallery__title">Добро
                <br>пожаловать
                <br>в&nbsp;семью OldBoy</h2>
        </header>
    </section>

    <!-- Courses -->
    <section class="courses" id="courses">
        <header class="courses__header">
            <h2 class="courses__title">Наши<br>курсы</h2>
        </header>

        <div class="courses__content">
            <?php
                $args = array(
                    'category_name' => 'courses'
                );

                query_posts($args);

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        // vars
                        $course_img             = get_field('course_img');
                        $course_name            = get_field('course_name');
                        $course_date            = new DateTime(get_field('course_date'));
                        $course_duration        = get_field('course_duration');
                        $course_skills_level    = get_field('course_skills');
                        $course_format          = get_field('course_format');
                        $course_ribbon          = get_field('course_ribbon');
            ?>

                <article class="course">
                    <header class="course__header">
                        <h3 class="course__title"><?php echo $course_name; ?></h3>
                        <div class="course__image">
                            <img src="<?php echo $course_img; ?>" alt="Академия Олдбой курс по барберингу" />
                        </div>

                        <div class="course__ribbons">
                            <?php
                                switch($course_ribbon) {
                                    case 'new':
                                ?>
                                    <p class="course__ribbon course__ribbon--blue">новый<br>курс</p>
                                <?php
                                    break;
                                    case 'special_price':
                                ?>
                                    <p class="course__ribbon course__ribbon--red">специальная<br>цена</p>
                                <?php
                                    break;
                                    case 'all':
                                ?>
                                    <p class="course__ribbon course__ribbon--blue">новый<br>курс</p>
                                    <p class="course__ribbon course__ribbon--red">специальная<br>цена</p>
                                <?php
                                    break;
                                }
                                ?>
                        </div>
                    </header>

                    <div class="course__content">
                        <div class="course__info">
                            <div class="course__info-icon">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/calendar.svg" alt="" />
                            </div>
                            <div class="course__info-text">
                                Старт: <?php echo date_i18n(('j F Y')); ?><br>
                            </div>
                        </div>
                        <div class="course__info">
                            <div class="course__info-icon">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/time-biggest.svg" alt="" />
                            </div>
                            <div class="course__info-text">
                                Длительность:<br><?php echo $course_duration; ?>
                            </div>
                        </div>
                        <div class="course__info">
                            <div class="course__info-icon">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/level-noob.svg" alt="" />
                            </div>
                            <div class="course__info-text">
                                Уровень навыков:<br><?php echo $course_skills_level; ?>
                            </div>
                        </div>
                        <div class="course__info">
                            <div class="course__info-icon">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/group.svg" alt="" />
                            </div>
                            <div class="course__info-text course__info-text--last">
                                Формат:<br><?php echo $course_format; ?>
                            </div>
                        </div>
                    </div>
                    <div class="course__more">
                        <a class="button button--block" href="<?php the_permalink(); ?>">Подробнее о&nbsp;курсе</a>
                    </div>
                </article>
            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- Team -->
    <section class="team" id="team">
        <header class="team__header">
            <h2 class="team__title">Команда
                <br>Академии</h2>
        </header>
        <div class="team__content">
            <?php
        $args = array(
          'category_name' => 'team'
        );
        query_posts($args);

        if(have_posts()) {
          while(have_posts()) {
            the_post();
            
            // vars
            $member_img = get_field('member_img');
            $member_name = get_field('member_name');
            $member_description = get_field('member_description');

      ?>
                <article class="member member--first">
                    <header class="member__header">
                        <div class="member__photo">
                            <img src="<?php echo $member_img; ?>" alt="" />
                        </div>
                        <h3 class="member__name">
                            <?php echo $member_name; ?>
                        </h3>
                    </header>
                    <div class="member__content">
                        <p class="member__about">О мастере:</p>
                        <p class="member__text">
                            <?php echo $member_description; ?>
                        </p>
                    </div>
                </article>
                <?php
          }
        }
        ?>
        </div>
        <div class="team__navigation"></div>
        <div class="team__about">
            <div class="team__about-sub">О нашей команде:</div>
            <div class="team__text">
                <?php echo get_theme_mod('team_text','OldBoyAcademy')?>
            </div>
            <div class="team__more">
                <a class="button" href="#">Подробнее о команде</a>
            </div>
        </div>
    </section>

    <!-- Contacts -->
    <section class="contacts" id="contacts">
        <div class="map" id="map"></div>
        <article class="contacts-box">
            <header class="contacts-box__header">
                <h2 class="contacts-box__title">Контакты</h2>
                <p class="contacts-box__text">По всем интересующим вас вопросам просим вас связаться с нашим менеджером.</p>
            </header>
            <div class="contacts-box__body">
                <div class="contact">
                    <div class="contact__icon icon-phone"></div>
                    <div class="contact__name">Телефон</div>
                    <div class="contact__value">
                        <a href="tel:+79114567890">+7 911 456-78-90</a>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact__icon icon-mail-alt"></div>
                    <div class="contact__name">e-mail</div>
                    <div class="contact__value">
                        <a href="mailto: academy@oldboy.com">academy@oldboy.com</a>
                    </div>
                </div>
            </div>
            <footer class="contacts-box__footer">
                <div class="contacts-box__logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип" />
                </div>
            </footer>
        </article>
    </section>

    <!-- Popup -->
    <section class="popup">
        <div class="popup__window">
            <header class="popup__header">
                <div class="popup__close"></div>
            </header>
            <div class="popup__content">
                <h2 class="popup__title">Ваша заявка добавлена</h2>
                <div class="popup__text">Благодарим Вас за обращение в нашу Академию. На Вашу электронную почту направлено письмо с информацией. Наш
                    менеджер свяжется с Вами в ближайшее время.</div>
                <div class="popup__respect">С уважением,
                    <br> Команда OldBoy Академии</div>
                <div class="popup__controls">
                    <a href="#">Хорошо</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="page-footer__wrapper">
            <div class="page-footer__social">
                <a class="icon-vkontakte" href=""></a>
                <a class="icon-instagram" href=""></a>
            </div>
            <nav class="page-footer__menu">
                <ul>
                    <li>
                        <a href="#about">Об Академии</a>
                    </li>
                    <li>
                        <a href="#features">Преимущества</a>
                    </li>
                    <li>
                        <a href="#courses">Наши Курсы</a>
                    </li>
                    <!-- <li>
                        <a href="#team">Команда</a>
                    </li> -->
                    <li>
                        <a href="#contacts">Контакты</a>
                    </li>
                </ul>
            </nav>
            <div class="page-footer__copy">&copy;Академия Олдбой. 2018
                <br>Все права сохранены.</div>
        </div>
    </footer>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/menu.js?v='<?php echo rand(); ?>"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/app.js?v='<?php echo rand(); ?>"></script>
    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/map.js?v='<?php echo rand(); ?>"></script>
</body>

</html>