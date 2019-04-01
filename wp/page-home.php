<?php 
    /*
        Template Name: Home Page
    */

    // seo
    $seo_title                          = get_field('seo_title');
    $seo_description                    = get_field('seo_description');
    $seo_index                          = get_field('seo_index');
    $modal_image                        = get_field('modal-image');
?>

<!doctype html>
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
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/hero-bg.jpg">
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
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css?v=12">

    <title><?php echo $seo_title; ?> </title>

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
                    <p class="hero-header__address"><?php echo the_field('contacts-address', 5); ?></p>
                    <p class="hero-header__phone">
                        <a href="tel:<?php echo the_field('contacts-phone-link', 5); ?>">тел.: <strong>+7 966 111-11-27</strong></a>
                    </p>
                </div>
            </header>
            <div class="hero__events">
                <a class="hero-event" href="#">
                    <header class="hero-event__header">
                        <h2 class="hero-event__title">Мастер-класс «Удлинённые стрижки»</h2>
                        <p class="hero-event__subtitle">Авторский мастер-класс от Александра Менко</p>
                        <p class="hero-event__date">25.03.2019</p>
                        <div class="hero-event__button button">Подробнее</div>
                    </header>
                    <div class="hero-event__overlay"></div>
                    <div class="hero-event__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/events/event.jpg" alt="Мастер класс в Академии Олдбой"></div>
                </a>
                <a class="hero-event" href="#">
                    <header class="hero-event__header">
                        <h2 class="hero-event__title">Курс «Барбер с нуля»</h2>
                        <p class="hero-event__subtitle">Курс «Барбер с нуля от Эрика Хачатряна»</p>
                        <p class="hero-event__date">15.04.2019</p>
                        <div class="hero-event__button button">Подробнее</div>
                    </header>
                    <div class="hero-event__overlay"></div>
                    <div class="hero-event__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/events/event1.jpg" alt="Мастер класс в Академии Олдбой"></div>
                </a>
                <a class="hero-event" href="#">
                    <header class="hero-event__header">
                        <h2 class="hero-event__title">Мастер-класс по моделированию бороды</h2>
                        <p class="hero-event__subtitle">Авторский мастер-класс от Сэра Ножницы</p>
                        <p class="hero-event__date">03.05.2019</p>
                        <div class="hero-event__button button">Подробнее</div>
                    </header>
                    <div class="hero-event__overlay"></div>
                    <div class="hero-event__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/events/event2.jpg" alt="Мастер класс в Академии Олдбой"></div>
                </a>
                <a class="hero-event" href="#">
                    <header class="hero-event__header">
                        <h2 class="hero-event__title">Мастер-класс «Королевское бритьё»</h2>
                        <p class="hero-event__subtitle">Обучение технике «Королевское бритьё» от Николая Горбачёва</p>
                        <p class="hero-event__date">11.06.2019</p>
                        <div class="hero-event__button button">Подробнее</div>
                    </header>
                    <div class="hero-event__overlay"></div>
                    <div class="hero-event__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/events/event3.jpg" alt="Мастер класс в Академии Олдбой"></div>
                </a>
            </div>
        </div>

        <!-- <div class="hero__modal">
            <div class="overlay" id="overlay">
                <section class="modal">
                    <div class="modal__elements"> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/kompleks-mk-hair-tattoo-crop"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/menko_nd.jpg" alt="Мастер класс от Александра Мэнко в Академии Олдбой"></a></div> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/mk-longhair"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/menko-long.jpg" alt="Мастер класс от Александра Мэнко в Академии Олдбой"></a></div> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/mk-boroda"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/nozhnici.jpg" alt="Мастер класс от Сэра Ножницы в Академии Олдбой"></a></div> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/barber-s-nulya/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/hachatryan.jpg" alt="Курс от Эрика Хачатряна в Академии Олдбой"></a></div> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/mk-korolevskoe-britie"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/gorb_nd.jpg" alt="Мастер класс от Николая Горбачёва в Академии Олдбой"></a></div> -->
                        <!-- <div class="element"><a href="https://oldboyacademy.com/programma-fundamental"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/modal/fund-nd.jpg" alt="Мастер класс от Степана Акеньтьева в Академии Олдбой"></a></div> -->
                    <!-- </div>
                <button class="close" title="закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
                </section>
            </div>
        </div> -->
        
        <!-- <div class="hero__slider">
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
                                Дата старта: <?php echo $course_date; ?>
                            </p>
                        </header>
                        <div class="hero-form__wrapper">
                            <form class="hero-form__form" action="https://formspree.io/info@oldboyacademy.com" method="POST">
                                <input class="hero-form__input" type="text" name="Курс" value="<?php echo $course_name; ?>" hidden>
                                <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" required>
                                <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" required>
                                <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" required>
                                <input class="hero-form__button" type="submit" value="Подать заявку">
                            </form>
                        </div>
                        <div class="hero-form__warning">
                            Заполняя данную форму<br>вы&nbsp;принимаете условия<br>
                            <a href="<?php echo esc_url(home_url('/policy/')); ?>">политики конфиденциальности</a>
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
                                <input class="hero-form__input" type="text" name="Форма" value="Запись на стрижку" hidden>
                                <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" required>
                                <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" required>
                                <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" required>
                                <input class="hero-form__button" type="submit" value="Записаться">
                            </form>
                        </div>
                        <div class="hero-form__warning">
                            Заполняя данную форму<br> вы&nbsp;принимаете условия<br>
                            <a href="<?php echo esc_url(home_url('/policy/')); ?>">политики конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- About -->
    <section class="about about--main" id="about">
        <div class="about__row">
            <div class="about__content about__content--left">
                <div class="about__logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой цветной логотип" />
                </div>
            </div>
            <div class="about__content about__content--right">
                <h2 class="about__title">Академия барберинга OldBoy —&nbsp;место, где рождаются настоящие мужские парикмахеры</h2>
                <p class="about__text">Развитие культуры барберинга вернуло мужчинам ощущения и эмоции, которые испытывали джентльмены на старинных черно-белых фотографиях. Традиции лучших цирюлен прошлого века возвращаются, а истинные барберы активно возрождают культуру брадобрейства в аскетичной атмосфере исключительно мужской парикмахерской.</p>
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
                    <p class="feature__item">Создание команды профессионалов и&nbsp;их продвижение в&nbsp;барберинге</p>
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
            <h2 class="gallery__title">Добро<br>пожаловать<br>в&nbsp;семью OldBoy</h2>
            <p class="gallery__subtitle">Галерея работ наших<br>мастеров и учеников</p>
            <div class="gallery__more">
                <a class="button" href="<?php echo esc_url(home_url("/gallery/")); ?>">Галерея Академии</a>
            </div>
        </header>
    </section>

    <!-- Courses -->
    <section class="courses" id="courses">
        <header class="courses__header section-header">
            <h2 class="section-header__title section-header__title--light">Наши курсы</h2>
            <p class="section-header__text section-header__text--light">Актуальные курсы, которые будут проходить в нашей Академии в&nbsp;ближайшее время</p>
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
                        $course_seo_name        = get_field('course_seo_name');
                        $course_date            = get_field('course_date');
                        $course_duration        = get_field('course_duration');
                        $course_skills_level    = get_field('course_skills');
                        $course_format          = get_field('course_format');
                        $course_ribbon_blue     = get_field('course_ribbon_blue');
                        $course_ribbon_red      = get_field('course_ribbon_red');
            ?>

                <article class="course">
                    <header class="course__header" style="background-image: url(<?php echo $course_img;?>);">
                        <h3 class="course__title"><?php echo $course_name; ?></h3>
                        <p class="course__subtitle"><?php echo $course_seo_name; ?></p>
                        <!-- <div class="course__image">
                            <img src="<?php echo $course_img; ?>" alt="Академия Олдбой курс по барберингу" />
                        </div> -->

                        <div class="course__ribbons">
                            <?php
                                if ($course_ribbon_blue != "") {
                            ?>
                                    <p class="course__ribbon course__ribbon--blue">
                                        <?php echo $course_ribbon_blue; ?>
                                    </p>
                            <?php
                                }
                            ?>

                            <?php
                                if ($course_ribbon_red != "") {
                            ?>
                                    <p class="course__ribbon course__ribbon--red">
                                        <?php echo $course_ribbon_red; ?>
                                    </p>
                            <?php
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
                                Дата старта:<br><?php echo $course_date; ?><br>
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
        <header class="team__header section-header">
            <h2 class="section-header__title">Команда Академии</h2>
            <p class="section-header__text">В команде академии работают профессионалы своего дела с многолетним опытом работы в индустрии барберинга, многие из которых обучались своему мастерству у именитых профессионалов в России и зарубежом.</p>
        </header>

        <div class="team__content">

        <?php
            $args = array(
                'category_name' => 'team'
            );

            query_posts($args);

            if(have_posts()) {
                $counter = 0;
                while (have_posts()) {
                    the_post();

                    // vars
                    $member_name            = get_field('member-name');
                    $member_exp             = get_field('member-exp');
                    $member_short           = get_field('member-short');
                    $member_full_exp        = get_field('member-full-exp');
                    $member_achievements    = get_field('member-achievements');
                    $member_photo           = get_field('member-photo');
                    $counter++;
        ?>

            <article class="member <?php echo ($counter % 2)?'member--right':'member--left' ?>">
                <div class="member__info">
                    <header class="member__header">
                        <h2 class="member__name">
                            <?php echo $member_name; ?>
                        </h2>
                        <p class="member__subtitle">
                            Стаж <?php echo $member_exp; ?>
                        </p>
                        <div class="member__badge">тренер<br>oldboy</div>
                        <?php echo $member_full_exp; ?>
                    </header>
                    <p class="member__description">
                        <?php echo $member_short; ?>
                    </p>
                </div>

                <div class="member__more"></div>

                <div class="member__photo">
                    <img src="<?php echo $member_photo; ?>" alt="<?php echo $member_name; ?>" />
                </div>
            </article>

        <?php
                }
            }
        ?>
                <!-- 
            <article class="member member--right">
                <div class="member__info">
                    <header class="member__header">
                        <h2 class="member__name">Юрий Артюх</h2>
                        <p class="member__subtitle">Стаж 10 лет</p>
                        <div class="member__badge">oldboy
                            <br>master</div>
                        <p class="member__description">Ведущий барбер, брэнд менеджер сети Oldboy Barbershop, обучающий тренер. В активе есть опыт работ в колористике,
                            мужские классические формы и барберинг. Является региональным технологом, консультантом American
                            Crew. Юрий уверен: качество стрижки, качество обслуживания и знания профессиональной продукции —&nbsp;залог
                            успеха мастера любого уровня.</p>
                        <div class="member__exp">
                            <strong>7 лет</strong>
                            <br>
                            <span>преподавательский стаж</span>
                            <br>
                        </div>
                        <div class="member__exp">
                            <strong>10 лет</strong>
                            <br>
                            <span>Стаж в качестве барбера</span>
                        </div>
                    </header>
                    <footer class="member__footer">
                        <p class="member__subtitle">Конкурсы и награды</p>
                        <article class="member__feature">
                            <ul class="member__achivements-list">
                                <li class="member__achivements-item">Региональный технолог</li>
                                <li class="member__achivements-item">Финалист
                                    <br>Russian Hair Awards</li>
                                <li class="member__achivements-item">Победитель
                                    <br>Barber Connect
                                    <br>в номинации Fast Shave</li>
                            </ul>
                            <div class="member__photo">
                                <img src="./img/members/master1.png" alt="мастер" />
                            </div>
                        </article>
                        <div class="member__more"></div>
                    </footer>
                </div>
            </article>
             -->
        </div>
    </section>

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