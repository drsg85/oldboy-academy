<?php
    /*
        Template Name: Gallery Page
    */

    // seo
    $seo_title                          = get_field('seo_title');
    $seo_description                    = get_field('seo_description');

    // vars
    $banner                             = get_field('banner');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- SEO -->
    <meta name="description" content="<?php echo $seo_description; ?>">

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
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css?v=12">

    <title><?php echo $seo_title; ?></title>

    <!-- Counters -->
    <?php get_template_part('counters'); ?>

    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- Hero -->
    <section class="hero hero--gallery">
        <div class="hero__header">
            <header class="hero-header">
                <div class="hero-header__caption">
                    <p class="hero-header__subtitle">Примеры наших работ</p>
                    <h1 class="hero-header__title">Галерея<br> Академии OLDBOY</h1>
                    <p class="hero-header__text">В данном разделе предоставлены фотографии работ выполненных нашими учениками и мастерами Академии</p>
                </div>
            </header>
        </div>
    </section>

    <!-- Upper Gallery -->
    <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '141' ); } ?>

    <!-- Banner -->
    <?php echo $banner; ?>

    <!-- Lower Gallery -->
    <section class="gallery__content">
        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '150' ); } ?>
    </section>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="page-footer__wrapper">
            <nav class="page-footer__menu">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#about">Об Академии</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#features">Преимущества</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#courses">Наши Курсы</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#team">Команда</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#contacts">Контакты</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>models/">Моделям</a></li>
                </ul>
            </nav>
            <div class="page-footer__copy">&copy;Академия Олдбой. 2018<br>Все права сохранены.</div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>