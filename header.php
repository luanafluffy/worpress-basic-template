<link rel="stylesheet" href="<?= url_theme() ?>style-header.css">
<?php
// <!-- MENU PRINCPAL -->
wp_nav_menu(
    array(
        'theme_location' => 'menu',
        'menu_id' => 'navigationMenuMain',
        'container'            => 'nav',
        'container_class'      => 'navigationMenuMain',
        'items_wrap'           => '<div class="containerMainMenu"><div id="idButtonMainMenu">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div><ul id="idMenuMain" class="list-menu">%3$s</ul></div>'
    )
);