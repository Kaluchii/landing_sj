<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',         'FrontController@getIndex');

Route::get('/players/{page?}',         'FrontController@getPlayers');

Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');

Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',                             'AdminController@getIndex');

    Route::get('/titular',                      'AdminController@getTitular');

    Route::get('/statistic',                    'AdminController@getStatistic');

    Route::get('/principles',                   'AdminController@getPrinciples');

    Route::get('/objectives',                   'AdminController@getObjectives');

    Route::get('/leaders',                      'AdminController@getLeaders');

    Route::get('/support',                      'AdminController@getSupport');

    Route::get('/plans',                        'AdminController@getPlans');

    Route::get('/information',                  'AdminController@getInformation');

    Route::get('/packages',                     'AdminController@getPackages');
    Route::get('/packages/{id}',                'AdminController@getPackagesItem');

    Route::get('/contact_us',                   'AdminController@getContact');

    Route::get('/footer',                       'AdminController@getFooter');

    Route::get('/meta',                         'AdminController@getIndexMeta');

    Route::get('/players-page',                 'AdminController@getPlayersPage');
    Route::get('/players-page/{id}',            'AdminController@getPlayersPageItem');

    Route::get('/scripts',                      'AdminController@getScripts');





    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

