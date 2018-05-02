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

    <title>Ищем моделей на бесплатные стрижки — Академия барберинга Oldboy</title>

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
            <div class="hero-form">
                <header class="hero-form__header">
                    <h2 class="hero-form__title">Заполни форму
                        <br>на бесплатную стрижку</h2>
                    <p class="hero-form__subtitle">Стань моделью академии&nbsp;Oldboy</p>
                </header>

                <div class="hero-form__wrapper">
                    <form class="hero-form__form" action="">
                        <input class="hero-form__input" type="text" name="Имя" placeholder="Имя" />
                        <input class="hero-form__input" type="text" name="Телефон" placeholder="Телефон" />
                        <input class="hero-form__input" type="email" name="Электронная почта" placeholder="Электронная почта" />
                        <input class="hero-form__button" type="submit" value="Подать заявку" />
                    </form>
                </div>

                <div class="hero-form__warning">
                    Заполняя данную форму<br> вы&nbsp;принимаете условия<br>
                    <a href="<?php echo esc_url(home_url('/policy')); ?>">политики конфиденциальности</a>
                </div>
            </div>
        </aside>
    </section>

    <!-- Map -->
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
                <div class="popup__text">Благодарим Вас за обращение в нашу Академию. Наш менеджер свяжется с Вами в ближайшее время.</div>
                <div class="popup__respect">С уважением,<br> Команда OldBoy Академии</div>
                <div class="popup__controls">
                    <a class="popup__accept" href="#">Хорошо</a>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/course.js?v='<?php echo rand(); ?>"></script>
    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/map.js?v='<?php echo rand(); ?>"></script>
</body>
</html>
