<?php
    /*
        Template Name: 404 Page
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
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("stylesheet_directory"); ?>/apple-touch-icon.png?v=9BykMdv90b">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-32x32.png?v=9BykMdv90b">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-16x16.png?v=9BykMdv90b">
    <link rel="manifest" href="<?php bloginfo("stylesheet_directory"); ?>/site.webmanifest?v=9BykMdv90b">
    <link rel="mask-icon" href="<?php bloginfo("stylesheet_directory"); ?>/safari-pinned-tab.svg?v=9BykMdv90b" color="#d5a353">
    <link rel="shortcut icon" href="<?php bloginfo("stylesheet_directory"); ?>/favicon.ico?v=9BykMdv90b">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#222222">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

    <title>Cтраница не найдена — Академия барберинга Oldboy</title>

    <?php wp_head(); ?>
</head>


<body>
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- 404 -->
    <div class="four-o-four">
        <div class="four-o-four__404">
            <div class="message-404">
                <p class="message-404__404">404</p>
                <h1 class="message-404__title">Страница не найдена</h1>
                <p class="message-404__text">Страница устарела, была удалена или не существовала вовсе.</p>
                <a class="button" href="<?php echo esc_url(home_url('')); ?>">Вернуться на главную</a>
            </div>
        </div>
        <div class="four-o-four__glitch">
            <div class="glitch glitch--style-1">
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
            </div>
        </div>
        <div class="four-o-four__contacts">
            <p class="hero-header__address">Москва<br>Старокирочный переулок,&nbsp;2</p>
            <p class="hero-header__phone">
                <a href="tel:+79261000266">тел.: <strong>+7 926 1000-266</strong></a>
            </p>
        </div>
        <div class="four-o-four__quote">
            <blockquote>He was lost
                <br>and is found</blockquote>
            <cite>Luke 15:24</cite>
        </div>
    </div>

    <!-- Footer -->
    <?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/404.js?v='<?php echo rand(); ?>"></script>
</body>
</html>
