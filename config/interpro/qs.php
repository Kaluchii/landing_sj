<?php

return [

    'titular' => [
        'string' => ['block_title'],
        'image' => ['main_img'],

        'groups' => [
            'facts' => [
                'string' => ['text']
            ]
        ]
    ],


    'statistic' => [
        'string' => ['block_title'],
        'image' => ['main_img'],
        'text' => ['text_on_green'],

        'groups' => [
            'facts_in_fig' => [
                'string' => ['number', 'text']
            ]
        ]
    ],


    'principles' => [
        'string' => ['block_title'],

        'groups' => [
            'principles_list' => [
                'image' => ['img'],
                'string' => ['item_title'],
                'text' => ['text']
            ]
        ]
    ],


    'objectives' => [
        'string' => ['block_title'],
        'image' => ['main_img'],

        'groups' => [
            'objectives_list' => [
                'string' => ['item_title'],
                'text' => ['text']
            ]
        ]
    ],


    'leaders' => [
        'string' => ['block_title'],

        'groups' => [
            'leaders_list' => [
                'image' => ['img'],
                'string' => ['item_title'],
                'text' => ['text']
            ]
        ]
    ],


    'support' => [
        'string' => ['block_title'],
        'imageset' => ['support_list' => 'img'],
    ],
];
