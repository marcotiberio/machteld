<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pilotMeta',
        'title' => 'Pilot Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Partner', 'flynt'),
                'name' => 'partner',
                'type' => 'text',
                'wrapper' => [
                    'width' => 100,
                ]
            ],
            [
                'label' => __('Excerpt', 'flynt'),
                'name' => 'intro',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'width' => 100,
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'pilot',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'pilotComponents',
        'title' => __('Pilot Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pilotComponents',
                'label' => __('Pilot Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCta\getACFLayout(),
                    Components\BlockImageTextPost\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImages\getACFLayout(),
                    Components\ListingPartners\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'pilot',
                ],
            ],
        ],
    ]);
});
