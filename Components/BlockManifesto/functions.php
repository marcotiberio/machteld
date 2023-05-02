<?php

namespace Flynt\Components\BlockManifesto;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockManifesto',
        'label' => 'Block: Impact',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
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
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Impact Panels', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Impact Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Infographic', 'flynt'),
                        'name' => 'panelInfographic',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'required' => 1,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => 100,
                        ],
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50,
                        ]
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'panelContent',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 50,
                        ]
                    ],
                    [
                        'label' => __('Hover Image', 'flynt'),
                        'name' => 'panelHoverImage',
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'required' => 0,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => 100,
                        ],
                    ],
                ],
            ],
        ],
    ];
}
