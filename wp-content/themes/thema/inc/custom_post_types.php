<?php
// Register Custom Post Type
add_action('init', 's3_init');
function s3_init() {
    s3_register_post_types();
    s3_register_taxonomies();
}
function s3_register_post_types(){
    register_post_type('produtos', array(
            'labels' => array(
                'name' => 'Produtos',
                'singular_name' => 'Produto',
                'add_new' => 'Adicionar Produto',
                'edit_item' => 'Editar Produto'
            ),
            'public' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
function s3_register_taxonomies() {
    register_taxonomy('categorias', 'produtos', array(
            'labels' => array(
                'name' => 'Categorias',
                'menu_name' => 'Categorias'
            ),
            'public' => true,
            'hierarchical' => true
        )
    );
    register_taxonomy('marcas', 'produtos', array(
            'labels' => array(
                'name' => 'Marcas',
                'menu_name' => 'Marcas'
            ),
            'public' => true,
            'hierarchical' => true
        )
    );
}