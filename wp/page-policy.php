<?php
    /*
        Template Name: Policy Page
    */

    // seo
    $seo_title                          = get_field('seo_title');
    $seo_description                    = get_field('seo_description');
    $seo_index                          = get_field('seo_index');
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
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/features-bg.jpg">
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

    <title><?php echo $seo_title; ?></title>

    <!-- Counters -->
    <?php get_template_part('counters'); ?>

    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <?php get_template_part('nav'); ?>

    <!-- Hero -->
    <section class="hero hero--inner">
        <div class="hero__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип"/>
            </a>
        </div>

        <div class="hero__header">
            <header class="hero-header">
                <div class="hero-header__caption">
                    <h1 class="hero-header__title">Политика конфиденциальности</h1>
                </div>
                <div class="hero-header__contacts">
                    <p class="hero-header__address">Москва<br>Старокирочный переулок,&nbsp;2</p>
                    <p class="hero-header__phone">
                        <a href="tel:+79261000266">тел.: <strong>+7 926 1000-266</strong></a>
                    </p>
                </div>
            </header>
        </div>
    </section>

    <!-- Data collection -->
    <section class="about">
        <div class="about__row">
            <div class="about__content about__content--left">
                <h2 class="about__title">Данные собираемые при посещении</h2>
                <h3 class="about__subtitle">Персональные даннные</h3>
                <p>Персональные данные при посещении сайта передаются пользователем добровольно, к ним могут относиться: имя,
                    фамилия, отчество, номера телефонов, адреса электронной почты, адреса для доставки товаров или оказания
                    услуг, реквизиты компании, которую представляет пользователь, должность в компании, которую представляет
                    пользователь, аккаунты в социальных сетях; поля форм могут запрашивать и иные данные.</p>
                <p>Эти данные собираются в целях оказания услуг или продажи товаров, связи с пользователем или иной активности
                    пользователя на сайте, а также, чтобы отправлять пользователям информацию, которую они согласились получать.</p>
                <p>Мы не проверяем достоверность оставляемых данных, однако не гарантируем качественного исполнения заказов
                    или обратной связи с нами при некорректных данных.</p>
                <p>Данные собираются имеющимися на сайте формами для заполнения (например, регистрации, оформления заказа, подписки,
                    оставления отзыва, обратной связи и иными).</p>
                <p>Формы, установленные на сайте, могут передавать данные как напрямую на сайт, так и на сайты сторонних организаций
                    (скрипты сервисов сторонних организаций).</p>
            </div>

            <div class="about__content about__content--right">
                <p>Также данные могут собираться через технологию cookies (куки) как непосредственно сайтом, так и скриптами
                    сервисов сторонних организаций. Эти данные собираются автоматически, отправку этих данных можно запретить,
                    отключив cookies (куки) в браузере, в котором открывается сайт.</p>
                <h2 class="about__subtitle">Не персональные данные</h2>
                <p>Кроме персональных данных при посещении сайта собираются не персональные данные, их сбор происходит автоматически
                    веб-сервером, на котором расположен сайт, средствами CMS (системы управления сайтом), скриптами сторонних
                    организаций, установленными на сайте. К данным, собираемым автоматически, относятся: IP адрес и страна
                    его регистрации, имя домена, с которого вы к нам пришли, переходы посетителей с одной страницы сайта
                    на другую, информация, которую ваш браузер предоставляет добровольно при посещении сайта, cookies (куки),
                    фиксируются посещения, иные данные, собираемые счетчиками аналитики сторонних организаций, установленными
                    на сайте.</p>
                <p>Эти данные носят неперсонифицированный характер и направлены на улучшение обслуживания клиентов, улучшения
                    удобства использования сайта, анализа посещаемости.</p>
            </div>

        </div>
    </section>

    <!-- 3rd person data share -->
    <section class="about about--yellow about--white-border-before about--white-border-after">
        <div class="about__deco-logo"></div>
        <div class="about__row">
        
            <div class="about__content about__content--left">
                <h2 class="about__title">Предоставление данных третьим лицам</h2>
                <p>Мы не раскрываем личную информацию пользователей компаниям, организациям и частным лицам, не связанным с
                    нами. Исключение составляют случаи, перечисленные ниже.</p>
                <h3 class="about__subtitle">Данные пользователей в общем доступе</h3>
                <p>Персональные данные пользователя могут публиковаться в общем доступе в соответствии с функционалом сайта,
                    например, при оставлении отзывов, может публиковаться указанное пользователем имя, такая активность на
                    сайте является добровольной, и пользователь своими действиями дает согласие на такую публикацию.</p>
                <h3 class="about__subtitle">По требованию закона</h3>
                <p>Информация может быть раскрыта в целях воспрепятствования мошенничеству или иным противоправным действиям;
                    по требованию законодательства и в иных случаях, предусмотренных законом.</p>
            </div>

            <div class="about__content about__content--right">
                <h3 class="about__subtitle">Для оказания услуг, выполнения обязательств</h3>
                <p>Пользователь соглашается с тем, что персональная информация может быть передана третьим лицам в целях оказания
                    заказанных на сайте услуг, выполнении иных обязательств перед пользователем. К таким лицам, например,
                    относятся курьерская служба, почтовые службы, службы грузоперевозок и иные.</p>
                <h3 class="about__subtitle">Сервисам сторонних организаций, установленных на сайте</h3>
                <p>На сайте могут быть установлены формы, собирающие персональную информацию других организаций, в этом случае
                    сбор, хранение и защита персональной информации пользователя осуществляется сторонними организациями
                    в соответствии с их политикой конфиденциальности.</p>
                <p>Сбор, хранение и защита полученной от сторонней организации информации осуществляется в соответствии с настоящей
                    политикой конфиденциальности.</p>
            </div>

        </div>
    </section>

    <!-- Other info -->
    <section class="about">
        <div class="about__row">

            <div class="about__content about__content--left">
                <h2 class="about__title">Как мы защищаем вашу информацию</h2>
                <p>Мы принимаем соответствующие меры безопасности по сбору, хранению и обработке собранных данных для защиты
                    их от несанкционированного доступа, изменения, раскрытия или уничтожения, ограничиваем нашим сотрудникам,
                    подрядчикам и агентам доступ к персональным данным, постоянно совершенствуем способы сбора, хранения
                    и обработки данных, включая физические меры безопасности, для противодействия несанкционированному доступу
                    к нашим системам.</p>
                <h2 class="about__title">Отказ от ответственности</h2>
                <p>Политика конфиденциальности не распространяется ни на какие другие сайты и не применима к веб-сайтам третьих
                    лиц, которые могут содержать упоминание о нашем сайте и с которых могут делаться ссылки на сайт, а также
                    ссылки с этого сайта на другие сайты сети Интернет. Мы не несем ответственности за действия других веб-сайтов.</p>
            </div>

            <div class="about__content about__content--right">
                <h2 class="about__title">Ваше согласие с этими условиями</h2>
                <p>Используя этот сайт, вы выражаете свое согласие с этой политикой конфиденциальности. Если вы не согласны
                    с этой политикой, пожалуйста, не используйте наш сайт. Ваше дальнейшее использование сайта после внесения
                    изменений в настоящую политику будет рассматриваться как ваше согласие с этими изменениями.</p>
                <h2 class="about__title">Изменения в политике конфиденциальности</h2>
                <p>Мы имеем право по своему усмотрению обновлять данную политику конфиденциальности в любое время. Мы рекомендуем
                    пользователям регулярно проверять эту страницу для того, чтобы быть в курсе любых изменений о том, как
                    мы защищаем информацию пользователях, которую мы собираем. Используя сайт, вы соглашаетесь с принятием
                    на себя ответственности за периодическое ознакомление с политикой конфиденциальности и изменениями в
                    ней.</p>
            </div>

        </div>
    </section>

    <!-- How to contact -->
    <section class="about about--yellow about--white-border-before">
        <div class="about__row">
            <div class="about__content about__content--left">
                <h2 class="about__title">Как с нами связаться</h2>
                <p>Если у вас есть какие-либо вопросы о политике конфиденциальности, использованию сайта или иным вопросам,
                    связанным с сайтом, свяжитесь с нами:
                    <a class="about__link" href="mailto: info@oldboyacademy.com">info@oldboyacademy.com</a>
                </p>
                <div class="text-promo__more">
                    <a class="button" href="<?php echo esc_url(home_url('/#contacts')); ?>">Контакты</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php get_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/policy.js?v='<?php echo rand(); ?>"></script>
</body>
</html>