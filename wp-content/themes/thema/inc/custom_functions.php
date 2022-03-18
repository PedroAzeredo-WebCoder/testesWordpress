<?php
/* Posts mais visualizados */
// Verifica se não existe nenhuma função com o nome tutsup_session_start
if (!function_exists('tutsup_session_start')) {
    // Cria a função
    function tutsup_session_start()
    {
        // Inicia uma sessão PHP
        if (!session_id()) session_start();
    }
    // Executa a ação
    add_action('init', 'tutsup_session_start');
}
// Verifica se não existe nenhuma função com o nome tp_count_post_views
if (!function_exists('tp_count_post_views')) {
    // Conta os views do post
    function tp_count_post_views()
    {
        // Garante que vamos tratar apenas de posts
        if (is_single()) {

            // Precisamos da variável $post global para obter o ID do post
            global $post;

            // Se a sessão daquele posts não estiver vazia
            if (empty($_SESSION['tp_post_counter_' . $post->ID])) {

                // Cria a sessão do posts
                $_SESSION['tp_post_counter_' . $post->ID] = true;

                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta($post->ID, $key, true);

                // Se a chave estiver vazia, valor será 1
                if (empty($key_value)) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta($post->ID, $key, $key_value);
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta($post->ID, $key, $key_value);
                } // Verifica o valor

            } // Checa a sessão

        } // is_single

        return;
    }
    add_action('get_header', 'tp_count_post_views');
}

function s3_keywords()
{
    foreach (get_tags() as $tag) {
        echo end(get_tags()) ==  $tag ? $tag->name : $tag->name . ',';
    }
}

function s3_title()
{
    if (is_front_page()) {
        bloginfo('name');
        if (get_bloginfo('description')) {
            echo ' | ' . get_bloginfo('description');
        }
    } else if (is_tax() || is_category()) {
        single_term_title('', true);
        echo " | ";
        bloginfo('name');
    } else {
        wp_title('', true);
        echo " | ";
        bloginfo('name');
    }
}

function s3_logo_title()
{
    bloginfo('name');
    if (get_bloginfo('description')) {
        echo ' | ' . get_bloginfo('description');
    }
}

function s3_nome_agencia()
{
    echo 'Agência S3';
}

function s3_excerpt()
{

    $excerpt = get_the_excerpt();
    $excerpt = substr($excerpt, 0, 360);
    if (!empty($excerpt)) {
        echo $excerpt . ' ...';
    }
}

function s3_countCatPerPost($termID)
{
    $posts = get_posts('post_type=post&category=' . $termID);
    $count = count($posts);
    echo $count;
}

function s3_countTagPerPost($termID)
{
    $term = get_tag($termID);
    $count = $term->count;
    echo $count;
}
