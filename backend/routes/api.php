<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Routes de clientes */


// Cadastra um cliente //

Route::post('/cliente','ClienteController@store')->name('store-cliente');

// Verifica os clientes cadastrados //

Route::get('/cliente', 'ClienteController@index')->name('index-cliente');

// Verifica o cliente pelo id //

Route::get('/cliente/{id}', 'ClienteController@show')->name('show-cliente');

// Edita alguma informação do cliente //

Route::put('/cliente/{id}', 'ClienteController@update')->name('update-cliente');

// Deleta o cadastro de um cliente //

Route::delete('/cliente/{id}', 'ClienteController@destroy')->name('destroy-cliente');


/*Routes de Produtos */


// Cadastra um produto //

Route::post('/produto','ProdutoController@store')->name('store-produto');

// Verifica os produto cadastrados //

Route::get('/produto', 'ProdutoController@index')->name('index-produto');

// Verifica o produto pelo id //

Route::get('/produto/{id}', 'ProdutoController@show')->name('show-produto');

// Edita alguma informação do produto//

Route::put('/produto/{id}', 'ProdutoController@update')->name('update-produto');

// Deleta o cadastro de um produto //

Route::delete('/produto/{id}', 'ProdutoController@destroy')->name('destroy-produto');



/*Routes da Loja */


// Cadastro da Loja //

Route::post('/loja','LojaController@store')->name('store-loja');

// Verifica as informações cadastradas do cadastro da loja //

Route::get('/loja', 'LojaController@index')->name('index-loja');

// Verifica a loja pelo id //

Route::get('/loja/{id}', 'LojaController@show')->name('show-loja');

// Edita alguma informação da loja//

Route::put('/loja/{id}', 'LojaController@update')->name('update-loja');

// Deleta um cadastro da loja //

Route::delete('/loja/{id}', 'LojaController@destroy')->name('destroy-loja');