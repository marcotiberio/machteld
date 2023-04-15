<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'artistMeta',
        'title' => 'Artist Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
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
                    'value' => 'post',
                ],
            ],
        ],
    ]);
    // ACFComposer::registerFieldGroup([
    //     'name' => 'postComponents',
    //     'title' => __('Post Components', 'flynt'),
    //     'style' => 'seamless',
    //     'fields' => [
    //         [
    //             'name' => 'postComponents',
    //             'label' => __('Post Components', 'flynt'),
    //             'type' => 'flexible_content',
    //             'button_label' => __('Add Component', 'flynt'),
    //             'layouts' => [
    //                 Components\AccordionDefault\getACFLayout(),
    //                 Components\BlockAnchor\getACFLayout(),
    //                 Components\BlockAnnouncement\getACFLayout(),
    //                 Components\BlockCollapse\getACFLayout(),
    //                 Components\BlockDivider\getACFLayout(),
    //                 Components\BlockDownloads\getACFLayout(),
    //                 Components\BlockGallery\getACFLayout(),
    //                 Components\BlockImage\getACFLayout(),
    //                 Components\BlockImageText\getACFLayout(),
    //                 Components\BlockVideoOembed\getACFLayout(),
    //                 Components\BlockWysiwyg\getACFLayout(),
    //                 Components\SliderImages\getACFLayout(),
    //             ],
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'post',
    //             ],
    //         ],
    //     ],
    // ]);
});
