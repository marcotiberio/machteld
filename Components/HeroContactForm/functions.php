<?php

namespace Flynt\Components\HeroContactForm;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'HeroContactForm',
        'label' => __('Contact Form', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General/ContactForm', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'blockTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Contact Form', 'flynt'),
                'name' => 'contactForm',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
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
            ]
        ]
    ];
}
