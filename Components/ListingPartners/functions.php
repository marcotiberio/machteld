<?php

namespace Flynt\Components\ListingPartners;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'ListingPartners',
        'label' => 'Grid: Logo/Link (selectable partners)',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Partners', 'flynt'),
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
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'blockLink',
                        'type' => 'page_link',
                        'post_type' => [
                            'partner'
                        ],
                        'return_format' => 'array',
                        'wrapper' =>  [
                            'width' => '50',
                        ]
                    ]
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            FieldVariables\getColorBackground(),
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
