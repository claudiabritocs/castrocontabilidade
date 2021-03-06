<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('abrircnpj', 'AbrirCnpjController@index')->name('abrircnpj');
    Route::get('quemsomos', 'QuemSomosController@index')->name('quemsomos');
    Route::get('termos', 'TermosController@index')->name('termos');
    Route::post('aceite-de-cookies', 'HomeController@postCookies')->name('aceite-de-cookies.post');
    Route::get('servicos', 'ServicosController@index')->name('servicos');

    // Painel
    Route::group([
        'prefix'     => 'painel',
        'namespace'  => 'Painel',
        'middleware' => ['auth']
    ], function() {
        Route::get('/', 'PainelController@index')->name('painel');

        /* GENERATED ROUTES */
		Route::resource('home', 'HomeController', ['only' => ['index', 'update']]);
        Route::resource('principal', 'PrincipalController');
        Route::resource('contato', 'ContatoController');
        Route::resource('faq', 'FaqController');
        Route::resource('certificados', 'CertificadosController');
		Route::resource('configuracoes', 'ConfiguracoesController', ['only' => ['index', 'update']]);
        Route::get('aceite-de-cookies', 'AceiteDeCookiesController@index')->name('painel.aceite-de-cookies');

        Route::resource('usuarios', 'UsuariosController');

        Route::resource('projetos', 'ProjetosController');
        Route::get('projetos/{projeto}/imagens/clear', 'ProjetosImagensController@clear')->name('projetos.imagens.clear');
        Route::resource('projetos.imagens', 'ProjetosImagensController', ['parameters' => ['imagens' => 'imagens_projetos']]);	
  
        Route::post('ckeditor-upload', 'PainelController@imageUpload');
        Route::post('order', 'PainelController@order');
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    });

    // Auth
    Route::group([
        'prefix'    => 'painel',
        'namespace' => 'Auth'
    ], function() {
        Route::get('login', 'AuthController@showLoginForm')->name('auth');
        Route::post('login', 'AuthController@login')->name('login');
        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});
