<?php

Route::get('multitenancy', function(){
    echo 'Hi from the multitenancy package!';
});

//Route::group(['middleware' => 'config'], function () {
    // Route for add new site form.
    Route::get('add', [
        'as' => 'add',
        'uses' => 'DynabicCachet\Multitenancy\Controllers\SiteController@addsite',
    ]);
    // Route for add new site script to store in database.
    Route::post('add', [
        'as' => 'add',
        'uses' => 'DynabicCachet\Multitenancy\Controllers\SiteController@savesite',
    ]);

    // Route for get all the list.
//    Route::get('dashboard/list', [
//        'as' => 'list',
//        'uses' => 'DynabicCachet\Multitenancy\Controllers\SiteController@listsite',
//    ]);
    Route::get('dashboard/site/list', [
        'as' => 'list',
        'uses' => 'DynabicCachet\Multitenancy\Controllers\SiteController@listsite',
    ]);

    // Route for add new site script to store in database.
    Route::get('dashboard/site/update/id/{id}/status/{status}', [
        'as' => 'update',
        'uses' => 'DynabicCachet\Multitenancy\Controllers\SiteController@updatesite',
    ]);
//});