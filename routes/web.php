<?php
/* SITE */
Route::get('/', 'Site\SiteController@index')->name('index');

/*ADMINISTRADOR APPSYS */
Route::get('/login', 'Auth\LoginController@showLogin')->name('show_login');	
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/admin')->group(function(){
	Route::get('/', 'Admin\AdminController@index')->name('admin');

	Route::prefix('/agenda')->middleware('can:eGeral')->group(function(){
		Route::get('/', 'Admin\AgendaController@index')->name('agenda');
		Route::get('/get', 'Admin\AgendaController@getData')->name('agenda_getdata');
		Route::post('/save', 'Admin\AgendaController@save')->name('agenda_save');
		Route::get('/delete/{id}', 'Admin\AgendaController@delete')->name('agenda_delete');
		Route::get('/show/{id}', 'Admin\AgendaController@show')->name('agenda_show');
		Route::post('/update/{id}', 'Admin\AgendaController@update')->name('agenda_update');
	});
	Route::prefix('/usuarios')->middleware('can:eAdmin')->group(function(){
		Route::get('/', 'Admin\UsuarioController@index')->name('usuarios');
		Route::get('/get', 'Admin\UsuarioController@getData')->name('usuarios_getdata');
		Route::post('/save', 'Admin\UsuarioController@save')->name('usuarios_save');
		Route::get('/delete/{id}', 'Admin\UsuarioController@delete')->name('usuarios_delete');
		Route::get('/show/{id}', 'Admin\UsuarioController@show')->name('usuarios_show');
		Route::post('/update/{id}', 'Admin\UsuarioController@update')->name('usuarios_update');
		Route::get('/ativar/{id}', 'Admin\UsuarioController@ativar')->name('usuarios_ativar');
		Route::get('/desativar/{id}', 'Admin\UsuarioController@desativar')->name('usuarios_desativar');
	});
	Route::prefix('/logs')->middleware('can:eAdmin')->group(function(){
		Route::get('/', 'Admin\LogController@index')->name('logs');
		Route::get('/get', 'Admin\LogController@getData')->name('logs_getdata');
	});
	Route::prefix('/config')->middleware('can:eAdmger')->group(function(){
		Route::get('/', 'Admin\ConfigController@index')->name('config');
		Route::post('/update', 'Admin\ConfigController@update')->name('config_update');
	});
	Route::prefix('/faq')->middleware('can:eGeral')->group(function(){
		Route::get('/', 'Admin\FaqController@index')->name('faq');
		Route::post('/save', 'Admin\FaqController@save')->name('faq_save');
		Route::get('/delete/{id}', 'Admin\FaqController@delete')->name('faq_delete');
	});
	Route::prefix('/aviso')->middleware('can:eAdmger')->group(function(){
		Route::get('/', 'Admin\FaqController@index')->name('aviso');
		Route::post('/save', 'Admin\FaqController@save')->name('aviso_save');
		Route::get('/delete/{id}', 'Admin\FaqController@delete')->name('aviso_delete');
	});
	Route::prefix('/dados')->middleware('can:eGeral')->group(function(){
		Route::get('/', 'Admin\DadosController@index')->name('dados');
		Route::post('/update', 'Admin\DadosController@update')->name('dados_update');
	});

});
/*Errors*/
Route::get('/suspenso', function () { return view('errors/900'); })->name('error_900');;