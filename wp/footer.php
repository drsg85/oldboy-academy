<footer class="page-footer">
    <article class="contacts-box">
        <header class="contacts-box__header">
            <h2 class="contacts-box__title">Контакты</h2>
            <p class="contacts-box__text">По всем интересующим вас вопросам просим вас связаться с нашим менеджером.</p>
        </header>
        <div class="contacts-box__body">
            <div class="contact">
                <div class="contact__icon icon-phone"></div>
                <div class="contact__name">Телефон</div>
                <div class="contact__value">
                    <a href="tel:+79261000266">+7 926 1000-266</a>
                </div>
            </div>
            <div class="contact">
                <div class="contact__icon icon-mail-alt"></div>
                <div class="contact__name">e-mail</div>
                <div class="contact__value">
                    <a href="mailto: info@oldboyacademy.com">info@oldboyacademy.com</a>
                </div>
            </div>
        </div>
        <footer class="contacts-box__footer">
            <div class="contacts-box__logo">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип" />
            </div>
        </footer>
    </article>

    <div class="page-footer__wrapper">
        <!-- <div class="page-footer__social">
            <a class="icon-vkontakte" href=""></a>
            <a class="icon-instagram" href=""></a>
        </div> -->
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