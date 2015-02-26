<?php

function race_theme($existing, $type, $theme, $path) {
    // Ex 2: a custom form that comes from a custom module's "custom_donate_form()" function.
    $items['contact_form'] = array(
        'render element' => 'form',
        'template' => 'contact',
        'path' => drupal_get_path('theme', 'race') . '/form',
    );

    return $items;
}