<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'partnerMeta',
        'title' => 'Partner Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Community', 'flynt'),
                'name' => 'community',
                'type' => 'text',
                'wrapper' => [
                    'width' => 100,
                ]
            ],
            // [
            //     'label' => __('Excerpt', 'flynt'),
            //     'name' => 'intro',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'media_upload' => 0,
            //     'delay' => 1,
            //     'wrapper' => [
            //         'width' => 100,
            //     ]
            // ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'partner',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'partnerComponents',
        'title' => __('Partner Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'partnerComponents',
                'label' => __('Partner Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCta\getACFLayout(),
                    Components\BlockImageTextPost\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImages\getACFLayout(),
                    Components\ListingPilots\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'partner',
                ],
            ],
        ],
    ]);
});
