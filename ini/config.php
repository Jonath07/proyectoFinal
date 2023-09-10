<?php
$template = array(
    'description' => 'Sistema de Reparto de agua pura',
    'author'      => 'Jonathan Cordon',
    'title'       => 'YocoTec',
    'active_page' => basename($_SERVER['PHP_SELF'])
);

$primary_nav = array(
    array(
        'name'  => 'Panel',
        'url'   => 'index.php',
        'icon'  => 'ti-home'
    ),
    array(
        'name'  => 'Productos',
        'icon'  => 'ti-archive',
        'url'   => 'productos.php'
    ),
    array(
        'name'  => 'Mapa',
        'icon'  => 'ti-map-alt',
        'url'   => 'mapa.php'
    )
);

?>