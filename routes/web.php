<?php

Route::get('/painel/produtos/tests', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');

route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');
    Route::get('/painel', 'SiteController@painel');

    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
});


// Route::group(['prefix' => 'painel'/*, 'middleware' => 'auth'*/], function () {
//     Route::get('/', function(){
//         return view('welcome');
//     });
//     Route::get('/empresa', function(){
//         return view('empresa');
//     });
//     Route::get('/contato', function () {
//         return 'Contato';
//     });
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function () {
//     return view('empresa');
// });

// Route::get('/contato', function () {
//     return 'Contato';
// })->name('rota.contato');

// Route::get('/', function () {
//     return redirect()->route('rota.contato');
// });


