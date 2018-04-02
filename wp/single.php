<?php
    /*
        Template Name: Course Page
    */

    
    // vars
    $course_img                         = get_field('course_img');
    $course_description_img             = get_field('course_description_img');
    $course_name                        = get_field('course_name');
    $course_date                        = get_field('course_date');
    $course_duration                    = get_field('course_duration');
    $course_skills_level                = get_field('course_skills');
    $course_format                      = get_field('course_format');
    $course_ribbon                      = get_field('course_ribbon');
    $course_short_description           = get_field('course_short_description');
    $course_progamm_plan                = get_field('course_progamm_plan');
    $course_learning_result             = get_field('course_learning_result');
    $course_audience                    = get_field('course_audience');
    $course_cost                        = get_field('course_cost');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png">
    
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <title>Oldboy Academy</title>

    <?php wp_head(); ?>
</head>



<body>
<header class="page-header">
    <div class="page-header__logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип"/>
    </a>
    </div>
    <nav class="main-nav main-nav--side-menu">
    <div class="main-nav__logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип"/>
    </a>
    </div>
    <ul class="main-nav__list">
        <li class="main-nav__item"><a class="main-nav__link" href="<?php echo esc_url(home_url('/#about')); ?>">Об Академии</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="<?php echo esc_url(home_url('/#features')); ?>">Преимущества</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="<?php echo esc_url(home_url('/#courses')); ?>">Наши Курсы</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="<?php echo esc_url(home_url('/#contacts')); ?>">Контакты</a></li>
    </ul>
    <div class="main-nav__social">
        <div class="masson">
        <div class="masson__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/masson.png" alt=""/></div>
        <!-- <div class="masson__social"><a class="icon-vkontakte" href="#"></a><a class="icon-instagram" href="#"></a></div><a class="masson__tag" href="#">#<em>OldboyAcademy</em></a> -->
        </div>
    </div>
    </nav>
    <div class="page-header__phone page-header__phone--inner"><a href="tel:+79261000266">+7 926 100-02-66</a></div>
    <div class="menu-icon menu-icon--inner">
    <div class="menu-icon__middle"></div>
    </div>
</header>
<section class="hero hero--course">

    <div class="hero__content">
    <article class="hero-course">
        <div class="hero-course__main">
        <header class="hero-course__header">
            <h3 class="hero-course__title"><?php echo $course_name; ?></h3>
            <div class="hero-course__image"><img src="<?php echo $course_img; ?>" alt="Академия Олдбой курс по барберингу"/></div>
            <div class="hero-course__ribbons">
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
        <div class="hero-course__short-info">
            <div class="hero-course__info-column">
            <div class="hero-course__info-block">
                <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/calendar.svg" alt=""/></div>
                <div class="hero-course__info-text"><strong>Старт:</strong></br><?php echo $course_date; ?></div>
            </div>
            <div class="hero-course__info-block">
                <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/time-biggest.svg" alt=""/></div>
                <div class="hero-course__info-text"><strong>Длительность:</strong><br><?php echo $course_duration; ?></div>
            </div>
            </div>
            <div class="hero-course__info-column">
            <div class="hero-course__info-block">
                <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/level-noob.svg" alt=""/></div>
                <div class="hero-course__info-text"><strong>Уровень навыков:</strong> <br><?php echo $course_skills_level; ?></div>
            </div>
            <div class="hero-course__info-block">
                <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/group.svg" alt=""/></div>
                <div class="hero-course__info-text"><strong>Формат:</strong><br><?php echo $course_format; ?></div>
            </div>
            </div>
            <div class="hero-course__price">
            <p class="hero-course__price-title">Стоимость обучения:</p>
            <p class="hero-course__price-value"><?php echo $course_cost; ?> ₽</p>
            </div>
        </div>
        </div>
    </article>
    </div>
    <aside class="hero__aside">
    <div class="course-form">
        <form class="course-form__form" action="https://formspree.io/info@oldboyacademy.com" method="POST">
        <input class="course-form__input" type="text" name="name" placeholder="Имя" required/>
        <input class="course-form__input" type="text" name="phone" placeholder="Телефон" required/>
        <input class="course-form__input" type="email" name="email" placeholder="Электронная почта" required/>
        <input class="course-form__button" type="submit" value="Записаться на курс"/>
        <div class="course-form__warning">Заполняя данную форму<br> вы&nbsp;принимаете условия<br> <a href="<?php echo esc_url(home_url('/policy')); ?>">политики конфиденциальности</a></div>
        </form>
    </div>
    </aside>
</section>

    <!-- About -->
    <section class="about">
        <div class="about__row">
        <div class="about__content about__content--left">
            <h2 class="about__title">Краткое описание курса:</h2>
            <div class="about__image"><img src="<?php echo $course_description_img; ?>" alt=""/></div>
        </div>
        <div class="about__content about__content--right"><?php echo $course_short_description;?></div>
    </section>

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
                <h3 class="selling-feature__title">Сбалансированный<br>учебный курс</h3>
                <p class="selling-feature__text">Теоретический и практический материал курса оптимально дополняют друг друга</p>
            </article>
            <article class="selling-feature">
                <h3 class="selling-feature__title">Комфортные условия<br>и оснащение</h3>
                <p class="selling-feature__text">Предоставляем нашим студентам лучшее профессинальное оборудование</p>
            </article>
            <article class="selling-feature">
                <h3 class="selling-feature__title">Помощь<br>в трудоустройстве</h3>
                <p class="selling-feature__text">Лучших выпускников мы трудоустроим в барбершопах наших партнёров</p>
            </article>
            </div>
        </div>
        </div>
    </section>

    <section class="about">
        <div class="about__row">
        <div class="about__content about__content--right">
            <h2 class="about__title">Чему вы научитесь на курсе:</h2>
            <?php echo $course_learning_result; ?>
        </div>
        </div>
    </section>

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

    <!-- <section class="about">
        <div class="fking-wrapper">
        <article class="member">
            <header class="member__header">
            <div class="member__photo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/members/barber1.png" alt=""/></div>
            <h3 class="member__name">Юрий<br>Артюх</h3>
            </header>
            <div class="member__content">
            <p class="member__about">О мастере:</p>
            <p class="member__text">Ведущий мастер сети Олдбой. Сертифицированный технолог бренда American Crew.</p>
            <p class="member__text">Стрижет с 16 лет, последние три года мы даже не припомним, что бы у него были выходные. Обучаля у именитыхбарберов и готов делиться заниями.</p>
            <p class="member__text">Большой любитель английской школы, сложных разделений и текстуры</p>
            </div>
        </article>
        </div>
    </section> -->

    <!-- About -->
    <section class="about about--white-border-before">
        <div class="about__row">
        <div class="about__content about__content--left">
            <!-- <article class="text-promo">
            <h3 class="text-promo__title">Узнай о преимуществах<br>обучения в Академии</h3>
            <p class="text-promo__text">Вся информация о наших текущих курсах представлена в разделе «Курсы», там ты найдёшь информацию по всем интересующим тебя направлениям.</p>
            <div class="text-promo__more"><a class="button" href="#">Курсы</a></div>
            </article> -->
            <article class="text-promo">
            <h3 class="text-promo__title">Есть вопросы?<br>Напиши нам</h3>
            <p class="text-promo__text">Всё еще остались вопросы о том, как попасть в нашу Академию? Никаких проблем, мы готовы ответить на все твои вопросы, просто напиши нам или позвони.</p>
            <div class="text-promo__more"><a class="button" href="#">Контакты</a></div>
            </article>
        </div>
        </div>
    </section>

    <!-- Contacts -->
    <section class="contacts contacts--inner">
        <article class="contacts-box contacts-box--inner">
        <header class="contacts-box__header">
            <h2 class="contacts-box__title">Контакты</h2>
            <p class="contacts-box__text">По всем интересующим вас вопросам просим вас связаться с нашим менеджером.</p>
        </header>
        <div class="contacts-box__body">
            <div class="contact">
            <div class="contact__icon icon-phone"></div>
            <div class="contact__name">Телефон</div>
            <div class="contact__value"><a href="tel:+79261000266">+7 926 100-02-66</a></div>
            </div>
            <div class="contact">
            <div class="contact__icon icon-mail-alt"></div>
            <div class="contact__name">e-mail</div>
            <div class="contact__value"><a href="mailto: info@oldboyacademy.com">info@oldboyacademy.com</a></div>
            </div>
        </div>
        <footer class="contacts-box__footer">
            <div class="contacts-box__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип"/></div>
        </footer>
        </article>
    </section>

<?php get_footer(); ?>
</body>

</html>
