<?php

use Anomaly\MultipleFieldType\Support\Config\RelatedHandler;

return [
    'related'             => [
        'required' => TRUE,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'handler' => RelatedHandler::class,
        ],
    ],
    'mode'                => [
        'required' => TRUE,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'options' => [
                'tags'       => 'anomaly.field_type.multiple::config.mode.option.tags',
                'lookup'     => 'anomaly.field_type.multiple::config.mode.option.lookup',
                'checkboxes' => 'anomaly.field_type.multiple::config.mode.option.checkboxes',
            ],
        ],
    ],
    'min'                 => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => 1,
        ],
    ],
    'search_result_limit' => [
        'type'          => 'anomaly.field_type.integer',
        'default_value' => 4
    ],
    'max'                 => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => 1,
        ],
    ],
];
