<?php
    /*
        Template Name: Models Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png">
    
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

    <title><?php echo $course_name; ?> — Академия барберинга Oldboy</title>

    <?php wp_head(); ?>
</head>



<body>
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- Hero -->
    <section class="hero hero--models">
        <div class="hero__content">
            <header class="hero-header hero-header--block">
                <div class="hero-header__caption">
                    <p class="hero-header__subtitle">Записаться на стрижку</p>
                    <h1 class="hero-header__title">Бесплатные стрижки
                        <br>в&nbsp;Академии «Oldboy»</h1>
                    <p class="hero-header__text">Друзья, нам всегда требуются модели для отработки мужских стрижек, стрижек и моделирования бороды, королевского
                        бритья и бритья головы.</p>
                    <p class="hero-header__text">У вас есть отличная возможность получить услугу, выполненную нашими стажерами под чутким руководством самых
                        опытных барберов абсолютно бесплатно.</p>
                </div>
                <div class="hero-header__features">
                    <p class="hero-header__subtitle hero-header__subtitle--gold">Преимущества стрижек в&nbsp;Академии</p>
                    <article class="selling-feature selling-feature--light">
                        <h3 class="selling-feature__title">Все услуги
                            <br>бесплатные</h3>
                        <p class="selling-feature__text">Выполняются стажерами под руководством мастеров</p>
                    </article>
                    <article class="selling-feature selling-feature--light">
                        <h3 class="selling-feature__title">Гарантия
                            <br>качественных стрижек</h3>
                        <p class="selling-feature__text">Тип стрижки остаётся на выбор мастера. Модель выбирает длину</p>
                    </article>
                </div>
            </header>
        </div>

        <aside class="hero__aside">
            <div class="course-form">
                <header class="course-form__header">
                    <h2 class="course-form__title">Заполни форму
                        <br>на бесплатную стрижку</h2>
                    <p class="course-form__subtitle">Стань моделью академии&nbsp;Oldboy</p>
                </header>
                <form class="course-form__form" action="">
                    <input class="course-form__input" type="text" name="name" placeholder="Имя" />
                    <input class="course-form__input" type="text" name="phone" placeholder="Телефон" />
                    <input class="course-form__input" type="email" name="email" placeholder="Электронная почта" />
                    <input class="course-form__button" type="submit" value="Подать заявку" />
                    <div class="course-form__warning">Заполняя данную форму
                        <br> вы&nbsp;принимаете условия
                        <br>
                        <a href="#">политики конфиденциальности</a>
                    </div>
                </form>
            </div>
        </aside>
    </section>

    <!-- Map -->
    <section class="contacts" id="contacts">
        <div class="map" id="map"></div>
    </section>

    <?php get_footer(); ?>

    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/map.js?v='<?php echo rand(); ?>"></script>
</body>
</html>
