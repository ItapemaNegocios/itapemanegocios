<?php

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/404', 'NotFoundController@index');
    Route::get('/empresas', 'CompaniesController@index');
    Route::get('/empresa', 'CompanyController@index');
    Route::get('/blog', 'BlogController@index');
    Route::get('/artigo/{post}', 'PostController@index');

    Route::get('/cadastrar-empresa', 'RegisterCompanyController@index');
    Route::get('/cadastre-sua-empresa', 'RegisterYourCompanyController@index');
});
