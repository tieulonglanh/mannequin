<?php

\Route::group(['prefix' => 'admin', 'middleware' => ['admin.values']], function () {

    \Route::group(['middleware' => ['admin.guest']], function () {
        \Route::get('signin', 'Admin\AuthController@getSignIn');
        \Route::post('signin', 'Admin\AuthController@postSignIn');
        \Route::get('forgot-password', 'Admin\PasswordController@getForgotPassword');
        \Route::post('forgot-password', 'Admin\PasswordController@postForgotPassword');
        \Route::get('reset-password/{token}', 'Admin\PasswordController@getResetPassword');
        \Route::post('reset-password', 'Admin\PasswordController@postResetPassword');
    });

    \Route::group(['middleware' => ['admin.auth']], function () {

        \Route::group(['middleware' => ['admin.has_role.super_user']], function () {
            \Route::resource('users', 'Admin\UserController');
            \Route::resource('user-notifications', 'Admin\UserNotificationController');

            \Route::resource('site-configurations', 'Admin\SiteConfigurationController');

            \Route::resource('articles', 'Admin\ArticleController');
            \Route::post('articles/preview', 'Admin\ArticleController@preview');
            \Route::get('articles/images', 'Admin\ArticleController@getImages');
            \Route::post('articles/images', 'Admin\ArticleController@postImage');
            \Route::delete('articles/images', 'Admin\ArticleController@deleteImage');
            \Route::resource('categories', 'Admin\CategoryController');
            \Route::resource('subcategories', 'Admin\SubcategoryController');

            \Route::delete('images/delete', 'Admin\ImageController@deleteByUrl');
            \Route::resource('images', 'Admin\ImageController');

            \Route::resource('logs', 'Admin\LogController');

        });

        \Route::group(['middleware' => ['admin.has_role.admin']], function () {
            \Route::resource('admin-users', 'Admin\AdminUserController');
            \Route::resource('admin-user-notifications', 'Admin\AdminUserNotificationController');

            \Route::get('admin-user-notifications/view/{id}','Admin\AdminUserNotificationController@view');
            \Route::get('load-notification/{offset}',['as'=>'load-notification','uses'=> 'Admin\AdminUserNotificationController@loadNotification']);

            \Route::resource('customers', 'Admin\CustomerController');
            \Route::resource('employees', 'Admin\EmployeeController');
            \Route::group(['prefix' => 'api/customers'], function() {
                \Route::post('/', 'API\V1\CustomerController@store');
            });
        });

        \Route::resource('products', 'Admin\ProductController');
        \Route::post('product-options', 'Admin\ProductOptionController@create');
        \Route::get('getOptionOfProduct/{id}', 'Admin\ProductController@getAllOptionOfProduct');

        \Route::resource('imports', 'Admin\ImportController');
        \Route::resource('exports', 'Admin\ExportController');
        
        \Route::get('/', 'Admin\IndexController@index');
        \Route::get('/me', 'Admin\MeController@index');
        \Route::put('/me', 'Admin\MeController@update');
        \Route::get('/me/notifications', 'Admin\MeController@notifications');

        \Route::post('signout', 'Admin\AuthController@postSignOut');
        /* NEW ADMIN RESOURCE ROUTE */
    });
});
