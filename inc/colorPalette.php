<?php

function theme_add_color_palette()
{

    add_theme_support(
        'editor-color-palette',
        '#000',
        '#fff',
        '#2bdd00',
    );
}
add_action('init', 'theme_add_color_palette');
