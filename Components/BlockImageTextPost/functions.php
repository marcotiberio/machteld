<?php

namespace Flynt\Components\BlockImageTextPost;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockImageTextPost',
        'label' => __('Block: Image Text', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text',
                'media_upload' => 0,
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'left' => sprintf('<i class=\'dashicons dashicons-align-left\' title=\'%1$s\'></i>', __('Image on the left', 'flynt')),
                    'right' => sprintf('<i class=\'dashicons dashicons-align-right\' title=\'%1$s\'></i>', __('Image on the right', 'flynt'))
                ],
                'wrapper' =>  [
                    'width' => 50,
                ],
            ],
            [
                'label' => __('Image Vertical Alignment', 'flynt'),
                'name' => 'imageVerticalAlignment',
                'type' => 'button_group',
                'choices' => [
                    'top' => sprintf('<i class=\'dashicons dashicons-arrow-up-alt\' title=\'%1$s\'></i>', __('Image Top Aligned', 'flynt')),
                    'center' => sprintf('<i class=\'dashicons dashicons-align-wide\' title=\'%1$s\'></i>', __('Image Center Aligned', 'flynt')),
                    'bottom' => sprintf('<i class=\'dashicons dashicons-arrow-down-alt\' title=\'%1$s\'></i>', __('Image Bottom Aligned', 'flynt'))
                ],
                'wrapper' =>  [
                    'width' => 50,
                ],
            ],
            [
                'label' => __('Image', 'flynt'),
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'required' => 1,
                'mime_types' => 'jpg,jpeg,png,svg',
                'wrapper' =>  [
                    'width' => 20,
                ],
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
                'wrapper' =>  [
                    'width' => 80,
                ],
            ],
            [
                'label' => __('Button', 'flynt'),
                'name' => 'buttonLink',
                'type' => 'link',
                'required' => 0,
                'wrapper' => [
                    'width' => 100
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getColorBackground(),
                ]
            ],
            [
                'label' => __('Background Image', 'flynt'),
                'name' => 'backgroundImage',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'type' => 'image',
                'preview_size' => 'medium',
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg',
                'wrapper' =>  [
                    'width' => 100,
                ],
            ],
        ]
    ];
}
