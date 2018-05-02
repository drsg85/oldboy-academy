<?php 
    /*
        Template Name: Home Page
    */
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа.">

    <!-- OG -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/hero-bg.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа.">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Oldboy Academy">

    <!-- Favicon -->
    <!-- TODO: make a good favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css">

    <title>Академия барберинга Oldboy</title>

    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- Hero -->
    <section class="hero">
        <div class="hero__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип"/>
            </a>
        </div>

        <div class="hero__header">
            <header class="hero-header">
                <div class="hero-header__caption">
                    <p class="hero-header__subtitle">Научим как надо!</p>
                    <h1 class="hero-header__title">Добро пожаловать<br>в&nbsp;Академию барберинга «Oldboy»</h1>
                    <p class="hero-header__text">Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа</p>
                </div>
                <div class="hero-header__contacts">
                    <p class="hero-header__address">Москва<br>Старокирочный переулок,&nbsp;2</p>
                    <p class="hero-header__phone">
                        <a href="tel:+79261000266">тел.: <strong>+7 926 1000-266</strong></a>
                    </p>
                </div>
            </header>
        </div>
        
        <div class="hero__slider">
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
                            $course_date = get_field('course_date');
                ?>

                <div class="slider__slide">
                    <div class="hero-form">
                        <header class="hero-form__header">
                            <h2 class="hero-form__title">
                                <strong><?php echo $course_name; ?></strong>
                            </h2>
                            <p class="hero-form__subtitle">
                                Старт группы <?php echo $course_date; ?>
                            </p>
                        </header>
                        <div class="hero-form__wrapper">
                            <form class="hero-form__form" action="https://formspree.io/info@oldboyacademy.com" method="POST">
                                <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" required />
                                <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" required />
                                <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" required />
                                <input class="hero-form__button" type="submit" value="Подать заявку" />
                            </form>
                        </div>
                        <div class="hero-form__warning">
                            Заполняя данную форму<br>вы&nbsp;принимаете условия<br>
                            <a href="<?php echo esc_url(home_url('/policy')); ?>">политики конфиденциальности</a>
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
                            <h2 class="hero-form__title">Стань моделью Академии Oldboy!</h2>
                            <p class="hero-form__subtitle">Заполни форму на бесплатную&nbsp;стрижку</p>
                        </header>
                        <div class="hero-form__wrapper">
                            <form class="hero-form__form" action="https://formspree.io/info@oldboyacademy.com" method="POST">
                                <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" required />
                                <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" required />
                                <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" required />
                                <input class="hero-form__button" type="submit" value="Записаться" />
                            </form>
                        </div>
                        <div class="hero-form__warning">
                            Заполняя данную форму<br> вы&nbsp;принимаете условия<br>
                            <a href="<?php echo esc_url(home_url('/policy')); ?>">политики конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about about--main" id="about">
        <div class="about__row">
            <div class="about__content about__content--left">
                <div class="about__logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой цветно логотип" />
                </div>
            </div>
            <div class="about__content about__content--right">
                <h2 class="about__title">Академия барберинга OldBoy —&nbsp;место, где рождаются настоящие мужские парикмахеры</h2>
                <p class="about__text">Развитие культуры барберинга вернуло мужчинам ощущения и эмоции, которые испытывали джентельмены на старинных черно-белых фотографиях. Традиции лучших цирюлен прошлого века возвращаются, а истинные барберы активно возрождают культуру брадобрейства в аскетичной атмосфере исключительно мужской парикмахерской.</p>
                <p class="about__text">Академия барберинга — школа, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа. Хотите узнать, как из бородатого мужчины сделать джентльмена? Тогда записывайтесь на наши курсы.</p>
            </div>
        </div>
    </section>

    <!-- Selling features -->
    <section class="selling-features" id="features">
        <article class="feature">
            <div class="feature__content">
                <header class="feature__header">
                    <h3 class="feature__title">Оптимальный баланс практики и&nbsp;теории</h3>
                    <div class="feature__icon">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/target.svg" alt="" />
                    </div>
                </header>
                <div class="feature__body">
                    <p class="feature__item">Опытные преподаватели с&nbsp;многолетним стажем</p>
                    <p class="feature__item">Ориентированность на&nbsp;работу с&nbsp;живыми моделями</p>
                    <p class="feature__item">Психология общения и&nbsp;работа с&nbsp;клиентом</p>
                </div>
            </div>
            <div class="feature__more">
                <!-- <a href="#">Подробнее</a> -->
            </div>
        </article>

        <article class="feature">
            <div class="feature__content">
                <header class="feature__header">
                    <h3 class="feature__title">Комфортные условия обучения в&nbsp;Академии</h3>
                    <div class="feature__icon">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/university.svg" alt="" />
                    </div>
                </header>
                <div class="feature__body">
                    <p class="feature__item">Современное оборудование и&nbsp;оснащенный зал</p>
                    <p class="feature__item">Удобное расположение хостела для&nbsp;проживания</p>
                </div>
            </div>
            <div class="feature__more">
                <!-- <a href="#">Подробнее</a> -->
            </div>
        </article>

        <article class="feature">
            <div class="feature__content">
                <header class="feature__header">
                    <h3 class="feature__title">Создание рабочих и&nbsp;творческих связей</h3>
                    <div class="feature__icon">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/features/razor.svg" alt="" />
                    </div>
                </header>
                <div class="feature__body">
                    <p class="feature__item">Помощь в&nbsp;трудоустройстве, рекомендации и&nbsp;поддержка</p>
                    <p class="feature__item">Создание команды профессионалов и&nbsp;их продвижение на&nbsp;барберинг арене</p>
                    <p class="feature__item">Особые условия и&nbsp;выгодные предложения партнеров</p>
                </div>
            </div>
            <div class="feature__more">
                <!-- <a href="#">Подробнее</a> -->
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
            <h2 class="courses__title">Наши курсы</h2>
            <p class="courses__text">Актуальные курсы, которые будут проходить в нашей Академии в&nbsp;ближайшее время</p>
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
                        $course_date            = get_field('course_date');
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
                                Старт:<br><?php echo $course_date; ?><br>
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
    <!-- TODO: Add Team section -->

    <!-- Contacts -->
    <section class="contacts" id="contacts">
        <div class="map" id="map"></div>
    </section>

    <!-- Popup -->
    <section class="popup">
        <div class="popup__window">
            <header class="popup__header">
                <div class="popup__close"></div>
            </header>
            <div class="popup__content">
                <h2 class="popup__title">Ваша заявка добавлена</h2>
                <div class="popup__text">Благодарим Вас за обращение в нашу Академию. <!--На Вашу электронную почту направлено письмо с информацией. --> Наш менеджер свяжется с Вами в ближайшее время.</div>
                <div class="popup__respect">С уважением, <br> Команда OldBoy Академии</div>
                <div class="popup__controls">
                    <a class="popup__accept" href="#">Хорошо</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/main.js?v='<?php echo rand(); ?>"></script>
    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/map.js?v='<?php echo rand(); ?>"></script>
</body>
</html>