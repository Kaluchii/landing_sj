<?php

return [
    'sys' => [
        //Всегда существует блок feedback в котором пробудлированы поля
        //from, host, port, encryption, mailto
        //если они не заполнены с админки, то смотрятся здесь в конфиге
        //если и тут нет, то все что возможно берется из конфига laravel MAIL_в формате ПОЛЕ
        'from'       => env('MAIL_FROM'),
        'host'       => env('MAIL_HOST', 'smtp.mailgun.org'),
        'port'       => env('MAIL_PORT', 587),
        'encryption' => env('MAIL_ENCRYPTION', 'tls'),
        'to'         => env('MAIL_TO'),
        'password'   => env('MAIL_PASSWORD')
    ],
    'feedback' => [
        //Предпоследнее место где формы смотрят: from, host, port, encryption, password, to
        //Здесь можно настроить конфиг из админки
        //доп. поля формате qs конфига
    ],
    'mailfromac' => [
        //Подчинен блоку feedback
        //Группа автоподстановки по домену почты отправителя from значений host, port и encryption отправителя
    ],
    'forms' => [
        //Блоки форм
        //предопределенные поля: from, subject, host, port, encryption, password, to
        'sponsor_form' => [
            //доп. поля интерфейса и настройки формы в формате qs конфига
            //form1_mailto - подгруппа с одним полем mailto
            'form_fields' => [
                //Каждой форме добавляется подгруппа с именем имяформы_mails, здесь настраивать поля для этой подгруппы
                //from, subject, host, port, encryption, to, username, email, body, mailed  -  по умолчанию +
                //доп. поля формы в формате qs конфига - для значений полей от пользователя сайта
                'string' => ['sponsor_name', 'phone', 'email', 'question'],
            ]
        ],
        'become_sponsor_form' => [
            //доп. поля интерфейса и настройки формы в формате qs конфига
            //form1_mailto - подгруппа с одним полем mailto
            'form_fields' => [
                //Каждой форме добавляется подгруппа с именем имяформы_mails, здесь настраивать поля для этой подгруппы
                //from, subject, host, port, encryption, to, username, email, body, mailed  -  по умолчанию +
                //доп. поля формы в формате qs конфига - для значений полей от пользователя сайта
                'string' => ['sponsor_name', 'phone', 'email', 'question'],
            ]
        ],
        'become_volunteer_form' => [
            //доп. поля интерфейса и настройки формы в формате qs конфига
            //form1_mailto - подгруппа с одним полем mailto
            'form_fields' => [
                //Каждой форме добавляется подгруппа с именем имяформы_mails, здесь настраивать поля для этой подгруппы
                //from, subject, host, port, encryption, to, username, email, body, mailed  -  по умолчанию +
                //доп. поля формы в формате qs конфига - для значений полей от пользователя сайта
                'string' => ['volunteer_name', 'phone', 'email', 'question'],
            ]
        ],
    ]
];
