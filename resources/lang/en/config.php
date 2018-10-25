<?php

return [
    'related'             => [
        'label'        => 'Related Stream',
        'instructions' => 'Specify the related stream entries to display in the dropdown.',
    ],
    'mode'                => [
        'label'  => 'Input Mode',
        'option' => [
            'tags'       => 'Tags',
            'lookup'     => 'Lookup',
            'checkboxes' => 'Checkboxes',
        ],
    ],
    'min'                 => [
        'label'        => 'Minimum Selections',
        'instructions' => 'Specify the minimum number of allowed selections.',
    ],
    'search_result_limit' => [
        'label'        => 'Tag Search Result Limit',
        'instructions' => 'Specify the maximum number of search results returned.',
        'warning'      => 'Only works for the tags'
    ],
    'max'                 => [
        'label'        => 'Maximum Selections',
        'instructions' => 'Specify the maximum number of allowed selections.',
    ],
];
