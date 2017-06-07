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


    'plans' => [
        'string' => ['block_title'],
        'image' => ['main_img'],

        'groups' => [
            'plans_list' => [
                'string' => ['item_title'],
                'text' => ['text']
            ]
        ]
    ],


    'information' => [
        'string' => ['block_title'],
        'text' => ['text'],
        'imageset' => ['partners_list' => 'img'],
    ],


    'packages' => [
        'groups' => [
            'package_type' => [
                'string' => ['block_title'],
            ],

            'components_list' => [
                'image' => ['img'],
                'string' => ['item_title'],
                'text' => ['text'],
                'package_type' => ['superior']
            ]
        ]
    ],


    'contact_us' => [
        'string' => ['block_title', 'person_name', 'position', 'phone'],
        'image' => ['main_img'],
    ],


    'footer' => [
        'imageset' => ['our_partners_list' => 'img'],
    ],


    'for_players' => [
        'groups' => [
            'pl_info_page' => [
                'string' => ['page_title'],
                'text' => ['text'],
            ]
        ]
    ],

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],
];
