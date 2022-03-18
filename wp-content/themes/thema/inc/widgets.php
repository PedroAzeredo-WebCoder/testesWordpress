<?php

register_sidebar(
    array(
        'name' => 'Sobre Nós',
        'id' => 'sobrenos',
        'desription' => 'Widgets nesta área serão exibidos no rodapé',
        'before_title' => '<h4 class="footer-widget-title mb-3">',
        'after_title' => '</h4>',
        'before_widget' => '<div class="mr-3">',
        'after_widget' => '</div>',
    )
);