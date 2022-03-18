<?php

/**
 * Theme general setup
 */

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_action( 'after_setup_theme', 's3_register_menus' );
function s3_register_menus() {
    register_nav_menus( array(
        'menu-desktop' => 'Menu Principal',
        'menu-footer'  => 'Menu Footer'
    ) );
}

/* Adiciona Imagem Destacada na Coluna da Listagem de Posts */
if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'admin-thumb', 100, 999999 ); // 100 pixels de largura (e altura ilimitada)
}
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['my_post_thumbs'] = __('Imagem'); //Modifique o nome para o que desejar
    return $defaults;
}
function posts_custom_columns($column_name, $id){
    if($column_name === 'my_post_thumbs'){
        echo the_post_thumbnail( 'admin-thumb' );
    }
}