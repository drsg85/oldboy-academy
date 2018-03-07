<?php
	function oldboyacademy_customize_register($wp_customize){
        // Sections
        
        // О нас

        // Заголовок
        $wp_customize->add_section('О нас', array(
            'title'   =>__('Секция "О нас"', 'OldBoy Academy'),
            'description'   => sprintf(__('Информация для секции "О нас"', 'OldBoy Academy' )),
            'priority'   => 130,
        ));

        $wp_customize->add_setting('Заголовок', array(
            'default'   => _x('Академия барберинга OldBoy — место, где рождаются настоящие мужские парикмахеры', 'OldBoy Academy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('Заголовок', array(
            'label'   => __('Заголовок', 'OldBoy Academy'),
            'section'   => 'О нас',
            'priority'   => 3,
        ));

        // Текстовка

        $wp_customize->add_setting('Текст для секции верхняя часть', array(
            'default'   => _x('Развитие культуры барберинга вернуло мужчинам ощущения и эмоции, которые испытывали джентельмены на старинных черно-белых фотографиях. Традиции лучших цирюлен прошлого века возвращаются, а истинные барберы активно возрождают культуру брадобрейства в аскетичной атмосфере исключительно мужской парикмахерской.', 'OldBoy Academy'),
            'type'   => 'theme_mod'
        ));
        
        $wp_customize->add_setting('Текст для секции нижняя часть', array(
            'default'   => _x('Академия барберинга — школа, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа. Хотите узнать, как из бородатого мужчины сделать джентльмена? Тогда записывайтесь на наши курсы.', 'OldBoy Academy'),
            'type'   => 'theme_mod'
        ));

        $wp_customize->add_control('Текст для секции верхняя часть', array(
            'label'   => __('Текст для секции верхняя часть','OldBoyAcademy'),
            'section'   => 'О нас',
            'priority'   => 3,
        ));
        
        $wp_customize->add_control('Текст для секции нижняя часть', array(
            'label'   => __('Текст для секции нижняя часть','OldBoyAcademy'),
            'section'   => 'О нас',
            'priority'   => 3,
        ));


        // Преимущества

        // Заголовок про баланс практики и теории
        $wp_customize->add_section('advantages', array(
            'title'   =>__('Секция "Преимущества"', 'OldBoy Academy'),
            'description'   => sprintf(__('Информация для секции "Преимущества"', 'OldBoy Academy' )),
            'priority'   => 130,
        ));

        $wp_customize->add_setting('title_of_balance', array(
            'default'   => _x('Оптимальный баланс практики и теории', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('title_of_balance', array(
            'label'   => __('Заголовок про баланс практики и теории', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 1

        $wp_customize->add_setting('feature_text_1', array(
            'default'   => _x('Опытные преподаватели с многолетним опытом', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_1', array(
            'label'   => __('Текстовка для премущества номер 1', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 2

        $wp_customize->add_setting('feature_text_2', array(
            'default'   => _x('Ориентированность на работу с живыми моделями', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_2', array(
            'label'   => __('Текстовка для премущества номер 2', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 3

        $wp_customize->add_setting('feature_text_3', array(
            'default'   => _x('Психология общения и работа с клиентом', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_3', array(
            'label'   => __('Текстовка для премущества номер 3', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));


        // Заголовок про комфортные условия обучения

        $wp_customize->add_setting('title_of_conditions', array(
            'default'   => _x('Комфортные условия обучения', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('title_of_conditions', array(
            'label'   => __('Заголовок про баланс комфортные условия обучения', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 1

        $wp_customize->add_setting('feature_text_4', array(
            'default'   => _x('Современное оборудование и оснащенный зал', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_4', array(
            'label'   => __('Текстовка для премущества номер 4', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 2

        $wp_customize->add_setting('feature_text_5', array(
            'default'   => _x('Удобное расположение хостела для проживания', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_5', array(
            'label'   => __('Текстовка для премущества номер 5', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));


        // Заголовок про создание рабочих и творческих связей

        $wp_customize->add_setting('title_of_network', array(
            'default'   => _x('Создание рабочих и творческих связей', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('title_of_network', array(
            'label'   => __('Заголовок про создание рабочих и творческих связей', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 6

        $wp_customize->add_setting('feature_text_6', array(
            'default'   => _x('Помощь в трудоустройстве, рекомендации и поддержка', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_6', array(
            'label'   => __('Текстовка для премущества номер 6', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 7

        $wp_customize->add_setting('feature_text_7', array(
            'default'   => _x('Создание команды профессионалов и их продвижение на барберинг арене', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_7', array(
            'label'   => __('Текстовка для премущества номер 7', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // Текстовка фич 8

        $wp_customize->add_setting('feature_text_8', array(
            'default'   => _x('Особые условия и выгодные предложения партнеров', 'OldBoyAcademy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('feature_text_8', array(
            'label'   => __('Текстовка для премущества номер 8', 'OldBoy Academy'),
            'section'   => 'advantages',
            'priority'   => 3,
        ));

        // О команде
        $wp_customize->add_section('team', array(
            'title'   =>__('Секция "О команде"', 'OldBoy Academy'),
            'description'   => sprintf(__('Информация для секции "О команде"', 'OldBoy Academy' )),
            'priority'   => 130,
        ));

        $wp_customize->add_setting('team_text', array(
            'default'   => _x('В команде академии работают профессионалы своего дела с многодетним опытомработы в идустрии барберинга, многие из которых обучались своему мастерству у именитых профессионалов в России и зарубежом.', 'OldBoy Academy'),
            'type'   => 'theme_mod'

        ));

        $wp_customize->add_control('team_text', array(
            'label'   => __('Текстовка', 'OldBoy Academy'),
            'section'   => 'team',
            'priority'   => 3,
        ));
    }
    
    add_action('customize_register','oldboyacademy_customize_register');