<?php 

function andersongni_registrando_taxonomia(){
    register_taxonomy(
        'categoria',
        'portifolio',
        array(
            'labels' => array('name' => 'Categoria'),
            'hierarchical' => true
        )
    );
}
add_action('init','andersongni_registrando_taxonomia');

function andersongni_registrando_post_customizado()
{
    register_post_type('portifolio',
        array(
            'labels' => array('name' => 'Portifólio'),
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init','andersongni_registrando_post_customizado');

function andersongni_blog_adicionando_recursos_ao_tema(){
    add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'andersongni_blog_adicionando_recursos_ao_tema');

function andersongni_blog_registrando_menu(){
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}
add_action('init', 'andersongni_blog_registrando_menu');