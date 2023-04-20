<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => __('Page Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCta\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockManifesto\getACFLayout(),
                    Components\BlockPilotSelector\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\HeroContactForm\getACFLayout(),
                    Components\ListingNews\getACFLayout(),
                    Components\ListingPartners\getACFLayout(),
                    Components\ListingPilots\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderLogos\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'pilot'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'reusable-components'
                ],
            ],
        ],
    ]);
});
