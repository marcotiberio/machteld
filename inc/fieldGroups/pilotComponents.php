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
            // [
            //     'label' => __('Bio', 'flynt'),
            //     'name' => 'bioTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            [
                'label' => __('Location', 'flynt'),
                'name' => 'location',
                'type' => 'text',
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
                    Components\BlockAnnouncement\getACFLayout(),
                    Components\BlockContactForm\getACFLayout(),
                    Components\BlockDivider\getACFLayout(),
                    Components\BlockGallery\getACFLayout(),
                    Components\BlockGalleryEvent\getACFLayout(),
                    Components\BlockPress\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
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
