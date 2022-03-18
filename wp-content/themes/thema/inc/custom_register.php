<?php

add_action('customize_register', 's3_customize_register');

function s3_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'social_media', array(
            'title' => 'Links do site',
            'capability' => 'edit_theme_options',
            'priority' => 45,
            'description' => 'Permite você configurar os link para as redes sociais'
        )
    );
    $wp_customize->add_setting(
        'social_media_facebook', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_facebook', array(
            'label' => 'Link para Facebook',
            'section' => 'social_media',
            'type' => 'text'
        )
    );
}