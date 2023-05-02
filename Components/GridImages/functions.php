<?php

namespace Flynt\Components\GridImages;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'GridImages',
        'label' => 'Grid: Image Gallery',
        'sub_fields' => [
            [
                'label' => __('Image Gallery', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'boxes',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Image', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => '50',
                        ]
                    ],
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
                    [
                        'label' => __('Number of Columns', 'flynt'),
                        'name' => 'colNumber',
                        'type' => 'number',
                        'default_value' => 2,
                        'min' => 1,
                        'max' => 3,
                        'step' => 1
                    ]
                ]
            ],
        ]
    ];
}
