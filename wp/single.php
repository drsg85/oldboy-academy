<?php
    /*
        Template Name: Course Page
    */

    // seo
    $seo_title                          = get_field('seo_title');
    $seo_description                    = get_field('seo_description');
    $seo_index                          = get_field('seo_index');

    // vars
    $course_img                         = get_field('course_img');
    $course_description_img             = get_field('course_description_img');
    $course_back                        = get_field('course_back');
    $course_name                        = get_field('course_name');
    $course_seo_name                    = get_field('course_seo_name');
    $course_date                        = get_field('course_date');
    $course_duration                    = get_field('course_duration');
    $course_skills_level                = get_field('course_skills');
    $course_format                      = get_field('course_format');
    $course_ribbon_blue                 = get_field('course_ribbon_blue');
    $course_ribbon_red                  = get_field('course_ribbon_red');
    $course_short_description           = get_field('course_short_description');
    $course_progamm_plan                = get_field('course_progamm_plan');
    $course_learning_result             = get_field('course_learning_result');
    $course_audience                    = get_field('course_audience');
    $course_cost                        = get_field('course_cost');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO -->
    <?php include(locate_template('seo.php')); ?>

    <!-- OG -->
    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/gallery-preview.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="<?php echo $seo_description; ?>">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Oldboy Academy">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("stylesheet_directory"); ?>/apple-touch-icon.png?v=9BykMdv90b">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-32x32.png?v=9BykMdv90b">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-16x16.png?v=9BykMdv90b">
    <link rel="manifest" href="<?php bloginfo("stylesheet_directory"); ?>/site.webmanifest?v=9BykMdv90b">
    <link rel="mask-icon" href="<?php bloginfo("stylesheet_directory"); ?>/safari-pinned-tab.svg?v=9BykMdv90b" color="#d5a353">
    <link rel="shortcut icon" href="<?php bloginfo("stylesheet_directory"); ?>/favicon.ico?v=9BykMdv90b">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#222222">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css?v=11">
    <?php 
        if ($course_back != "") {
    ?>
        <style>
            @media(min-width: 900px) {
                .hero {
                    background-image: url("<?php echo $course_back; ?>");
                }
            }
        </style>
    <?php
        }
    ?>

    <title><?php echo $seo_title; ?></title>

    <!-- Counters -->
    <!-- <?php //get_template_part('counters'); ?> -->

    <?php wp_head(); ?>
</head>



<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K439Z9X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- Hero -->
    <section class="hero hero--course">
        <div class="hero__content">
            <header class="hero-header hero-header--block">
                <div class="hero-header__caption">
                    <p class="hero-header__subtitle">Курсы Академии «Oldboy»</p>
                    <p class="hero-header__title"><?php echo $course_name; ?></p>
                    <h1 class="hero-header__subtitle"><?php echo $course_seo_name; ?></h1>
                    <div class="hero-header__badges">
                        <?php
                            if ($course_ribbon_blue != "") {
                            ?>
                                    <p class="hero-header__ribbon hero-header__ribbon--blue">
                                        <?php echo $course_ribbon_blue; ?>
                                    </p>
                            <?php
                                }
                            ?>

                            <?php
                                if ($course_ribbon_red != "") {
                            ?>
                                    <p class="hero-header__ribbon hero-header__ribbon--red">
                                        <?php echo $course_ribbon_red; ?>
                                    </p>
                            <?php
                                }
                            ?>
                    </div>
                </div>

                <div class="hero-header__features">
                    <p class="hero-header__subtitle hero-header__subtitle--gold">Описание структуры курса</p>
                    <div class="hero-course__short-info">
                        <div class="hero-course__info-column">
                            <div class="hero-course__info-block">
                                <div class="hero-course__info-icon">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/calendar.svg" alt="Calendar icon">
                                </div>
                                <div class="hero-course__info-text">
                                    <strong>Дата старта:</strong><br><?php echo $course_date; ?>
                                </div>
                            </div>

                            <div class="hero-course__info-block">
                                <div class="hero-course__info-icon">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/time-biggest.svg" alt="Sandglass icon">
                                </div>
                                <div class="hero-course__info-text">
                                    <strong>Длительность:</strong><br><?php echo $course_duration; ?>
                                </div>
                            </div>
                        </div>

                        <div class="hero-course__info-column">
                            <div class="hero-course__info-block">
                                <div class="hero-course__info-icon">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/level-noob.svg" alt="Scissors icon">
                                </div>
                                <div class="hero-course__info-text">
                                    <strong>Уровень навыков:</strong><br><?php echo $course_skills_level; ?>
                                </div>
                            </div>

                            <div class="hero-course__info-block">
                                <div class="hero-course__info-icon">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/group.svg" alt="Group icon">
                                </div>
                                <div class="hero-course__info-text">
                                    <strong>Формат:</strong><br><?php echo $course_format; ?>
                                </div>
                            </div>
                        </div>

                        <div class="hero-course__price">
                            <p class="hero-course__price-title">Стоимость обучения:</p>
                            <p class="hero-course__price-value"><?php echo $course_cost; ?> ₽</p>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <aside class="hero__aside">
            <div class="hero-form">
                <header class="hero-form__header">
                    <h2 class="hero-form__title">Заполни форму <br>для записи на курс</h2>
                    <p class="hero-form__subtitle"><?php echo $course_name; ?></p>
                </header>
                
                <div class="hero-form__wrapper">
                    <form class="hero-form__form" action="https://formspree.io/info@oldboyacademy.com" method="POST">
                        <input class="hero-form__input" type="text" name="Курс" value="<?php echo $course_name; ?>" hidden>
                        <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" required/>
                        <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" required/>
                        <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" required/>
                        <input class="hero-form__button" type="submit" value="Записаться на курс"/>
                    </form>
                </div>
                
                <div class="hero-form__warning">
                    Заполняя данную форму<br> вы&nbsp;принимаете условия<br>
                    <a href="<?php echo esc_url(home_url('/policy/')); ?>">политики конфиденциальности</a>
                </div>
            </div>
        </aside>
    </section>

    <!-- Short description -->
    <section class="about">
        <div class="about__row">
        <div class="about__content about__content--left">
            <h2 class="about__title">Краткое описание курса:</h2>
            <?php echo $course_short_description;?>
        </div>
        <div class="about__content about__content--right">
            <!-- <div class="about__image"><img src="<?php echo $course_description_img; ?>" alt=""/></div> -->
        </div>
    </section>

    <!-- Main points and features -->
    <section class="about about--yellow about--white-border-before about--white-border-after">
        <div class="about__deco-logo"></div>
        <div class="about__row">
        <div class="about__content about__content--left">
            <h2 class="about__title">Что будет на данном курсе:</h2>
            <?php echo $course_progamm_plan; ?>
        </div>
        <div class="about__content about__content--right">
            <div class="about__features">
            <article class="selling-feature">
                <h3 class="selling-feature__title">Сбалансированный <br>учебный курс</h3>
                <p class="selling-feature__text">Теоретический и практический материал курса оптимально дополняют друг друга</p>
            </article>
            <article class="selling-feature">
                <h3 class="selling-feature__title">Комфортные условия <br>и оснащение</h3>
                <p class="selling-feature__text">Предоставляем нашим студентам лучшее профессиональное оборудование</p>
            </article>
            <article class="selling-feature">
                <h3 class="selling-feature__title">Помощь <br>в трудоустройстве</h3>
                <p class="selling-feature__text">Лучших выпускников мы трудоустроим в барбершопах наших партнёров</p>
            </article>
            </div>
        </div>
        </div>
    </section>

    <!-- What you gonna learn -->
    <section class="about">
        <div class="about__row">
            <div class="about__content about__content--left">
                <h2 class="about__title">Чему вы научитесь на курсе:</h2>
                <?php echo $course_learning_result; ?>
            </div>
            <div class="about__content about__content--right">
                <div class="about__image"><img src="<?php echo $course_description_img; ?>" alt=""/></div>
            </div>
        </div>
    </section>

    <!-- Who suits -->
    <section class="about about--yellow about--white-border-before about--white-border-after">
        <div class="about__deco"></div>
        <div class="about__row">
        <div class="about__content about__content--left">
            <h2 class="about__title">Кому подойдёт курс:</h2>
            <?php echo $course_audience; ?>
        </div>
        </div>
    </section>

    <!-- Member -->
    <!-- TODO: add lead master section -->

    <!-- Got questions? -->
    <section class="about about--white-border-before">
        <div class="about__row">
            <div class="about__content about__content--left">
                <article class="text-promo">
                <h3 class="text-promo__title">Есть вопросы? <br>Напиши нам</h3>
                <p class="text-promo__text">Всё еще остались вопросы о том, как попасть в нашу Академию? Никаких проблем, мы готовы ответить на все твои вопросы, просто напиши нам или позвони.</p>
                <!-- <div class="text-promo__more"><a class="button" href="#">Контакты</a></div> -->
                </article>
            </div>
        </div>
    </section>

    <!-- Popup -->
    <section class="popup">
        <div class="popup__window">
            <header class="popup__header">
                <div class="popup__close"></div>
            </header>
            <div class="popup__content">
                <h2 class="popup__title">Ваша заявка добавлена</h2>
                <div class="popup__text">Благодарим Вас за обращение в нашу Академию. Наш менеджер свяжется с Вами в ближайшее время.</div>
                <div class="popup__respect">С уважением,<br> Команда OldBoy Академии</div>
                <div class="popup__controls">
                    <a class="popup__accept" href="#">Хорошо</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/course.js?v='<?php echo rand(); ?>"></script>
</body>

</html>
