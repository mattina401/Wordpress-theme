<?php
function wpb_customize_register($wp_customize)
{
    //Showcase Section
    $wp_customize->add_section('showcase', array(

        'title' => __('Showcase', 'theme1'),
        'description' => sprintf(__('Options for showcase', 'theme1')),
        'priority' => 130

    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'theme1'),
        'section' => 'showcase',
        'setting' => 'showcase_image',
        'priority' => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Wordpress Theme', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'theme1'),
        'section' => 'showcase',
        'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Theme1', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'theme1'),
        'section' => 'showcase',
        'priority' => 3
    ));

    $wp_customize->add_setting('btn_url', array(
        'default' => _x('#', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label' => __('Button URL', 'theme1'),
        'section' => 'showcase',
        'priority' => 4
    ));

    $wp_customize->add_setting('btn_text', array(
        'default' => _x('Read More', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
        'label' => __('Button Text', 'theme1'),
        'section' => 'showcase',
        'priority' => 5
    ));


    //Box Section
    $wp_customize->add_panel('Box_panel', array(
        'title' => 'Boxes',
        'description' => 'This is a description of this panel',
        'priority' => 132
    ));

    //box1
    $wp_customize->add_section('Box1_section', array(

        'title' => __('Box1', 'theme1'),
        'description' => sprintf(__('Options for box1', 'theme1')),
        'priority' => 1,
        'panel' => 'Box_panel'

    ));


    $wp_customize->add_setting('box1_icon', array(
        'default' => _x('fa fa-desktop', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box1_icon', array(
        'label' => __('Icon (copy class name from http://fontawesome.io/icons/)', 'theme1'),
        'section' => 'Box1_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('box1_header', array(
        'default' => _x('Header', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box1_header', array(
        'label' => __('Header', 'theme1'),
        'section' => 'Box1_section',
        'priority' => 2
    ));

    $wp_customize->add_setting('box1_text', array(
        'default' => _x('Text', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box1_text', array(
        'label' => __('Text', 'theme1'),
        'section' => 'Box1_section',
        'priority' => 3
    ));

    //box2
    $wp_customize->add_section('Box2_section', array(

        'title' => __('Box2', 'theme1'),
        'description' => sprintf(__('Options for box2', 'theme1')),
        'priority' => 2,
        'panel' => 'Box_panel'

    ));


    $wp_customize->add_setting('box2_icon', array(
        'default' => _x('fa fa-envelope', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box2_icon', array(
        'label' => __('Icon (copy class name from http://fontawesome.io/icons/)', 'theme1'),
        'section' => 'Box2_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('box2_header', array(
        'default' => _x('Header', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box2_header', array(
        'label' => __('Header', 'theme1'),
        'section' => 'Box2_section',
        'priority' => 2
    ));

    $wp_customize->add_setting('box2_text', array(
        'default' => _x('Text', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box2_text', array(
        'label' => __('Text', 'theme1'),
        'section' => 'Box2_section',
        'priority' => 3
    ));



    //box3
    $wp_customize->add_section('Box3_section', array(

        'title' => __('Box3', 'theme1'),
        'description' => sprintf(__('Options for box3', 'theme1')),
        'priority' => 3,
        'panel' => 'Box_panel'

    ));


    $wp_customize->add_setting('box3_icon', array(
        'default' => _x('fa fa-key', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box3_icon', array(
        'label' => __('Icon (copy class name from http://fontawesome.io/icons/)', 'theme1'),
        'section' => 'Box3_section',
        'priority' => 1
    ));

    $wp_customize->add_setting('box3_header', array(
        'default' => _x('Header', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box3_header', array(
        'label' => __('Header', 'theme1'),
        'section' => 'Box3_section',
        'priority' => 2
    ));

    $wp_customize->add_setting('box3_text', array(
        'default' => _x('Text', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('box3_text', array(
        'label' => __('Text', 'theme1'),
        'section' => 'Box3_section',
        'priority' => 3
    ));


    //title
    $wp_customize->add_section('title', array(

        'title' => __('Title', 'theme1'),
        'description' => sprintf(__('Options for title', 'theme1')),
        'priority' => 131

    ));

    $wp_customize->add_setting('logo_image', array(
        'default' => get_bloginfo('template_directory') . '/img/sample-logo.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label' => __('Logo', 'theme1'),
        'section' => 'title',
        'setting' => 'logo_image',
        'priority' => 1
    )));

    $wp_customize->add_setting('logo_visibility', array(
        'default' => 'hidden',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('logo_visibility', array(
        'label' => __('Logo Visibility', 'theme1'),
        'section' => 'title',
        'type' => 'radio',
        'choices' => array(
            'hidden' => 'hidden',
            'visible' => 'visible'
        ),
        'priority' => 2
    ));

    $wp_customize->add_setting('title', array(
        'default' => _x('Wordpress Theme1', 'theme1'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('title', array(
        'label' => __('Title', 'theme1'),
        'section' => 'title',
        'priority' => 3
    ));




}

add_action('customize_register', 'wpb_customize_register');