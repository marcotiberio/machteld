<?php

use ACFComposer\ACFComposer;
use Flynt\Components;
use Flynt\ComponentManager;
use Timber\Timber;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'relatedPilotComponents',
        'title' => __('Related Blocks', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'relatedPilotComponents',
                'label' => __('Related Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockPilotSelector\getACFLayout(),
                    Components\ListingPartners\getACFLayout(),
                    Components\SliderLogos\getACFLayout(),
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
