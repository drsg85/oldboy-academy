<footer class="page-footer page-footer--inner">
    <div class="page-footer__wrapper">
        <!-- <div class="page-footer__social">
            <a class="icon-vkontakte" href=""></a>
            <a class="icon-instagram" href=""></a>
        </div> -->
        <nav class="page-footer__menu">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/#about')); ?>">Об Академии</a></li>
                <li><a href="<?php echo esc_url(home_url('/#features')); ?>">Преимущества</a></li>
                <li><a href="<?php echo esc_url(home_url('/#courses')); ?>">Наши курсы</a></li>
                <li><a href="<?php echo esc_url(home_url('/#contacts')); ?>">Контакты</a></li>
            </ul>
        </nav>
        <div class="page-footer__copy">&copy;Академия Олдбой. 2018
            <br>Все права сохранены.</div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/menu.js<?php echo '?v=' . rand(); ?>"></script>
<script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/map.js<?php echo '?v=' . rand(); ?>"></script>