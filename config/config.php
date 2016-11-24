<?php
    $page_title = 'MIW Brand';
    $metadata_description = 'MIW Brand, tu marca de moda';
    $metadata_keywords = '';
    $metadata_author = 'MIW Brand';

    $og_main_image = "http://localhost/miw-brand/img/logo/img-share.jpg";
    $og_images = array(
        $og_main_image
    );
    $og_site_name = 'MIW Brand';
    $og_description = $metadata_description;

    $menu_items = [
        'Inicio' => [
            'url' => './',
            'current' => 'current'
        ],
        'Catálogo' => [
            'url' => './catalogo/',
            'current' => ''
        ],
        'Promos' => [
            'url' => './promos/',
            'current' => ''
        ],
        'Contacto' => [
            'url' => './contacto/',
            'current' => ''
        ]
    ];
