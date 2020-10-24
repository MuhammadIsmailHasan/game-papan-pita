<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect::to('register');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'roles', 'roles' => 'administrator'], function ()
    {
        Route::get('administrator', 'Admin\AdminController@index');
        Route::resource('administrator/roles', 'Admin\RolesController');
        Route::resource('administrator/permissions', 'Admin\PermissionsController');
        Route::resource('administrator/users', 'Admin\UsersController');
        Route::resource('administrator/pages', 'Admin\PagesController');
        Route::resource('administrator/activitylogs', 'Admin\ActivityLogsController')->only([
            'index', 'show', 'destroy'
        ]);
        Route::resource('administrator/settings', 'Admin\SettingsController');
        Route::get('administrator/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
        Route::post('administrator/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    });

    Route::group(['middleware' => 'roles', 'roles' => 'admin'], function () {
        Route::get('nilai-delete/{id}', 'NilaiController@destroy')->name('nilai-delete');
        Route::get('nilai-export/{jenisRonde}', 'NilaiController@export')->name('nilai-export');
        Route::resource('siswa', 'SiswaController');
        Route::get('siswa-delete/{id}', 'SiswaController@destroy')->name('siswa-delete');
        Route::get('angket-showall', 'AngketController@showAll')->name('angket-showall');
        Route::get('angket-export', 'AngketController@export')->name('angket-export');
    });
    
    Route::group(['middleware' => 'roles', 'roles' => 'siswa'], function () {
        Route::resource('nilai-tertinggi', 'NilaiTertinggiController');
        Route::resource('profil', 'ProfilController');
        Route::get('permainan/{rondeId}', 'PermainanController@index')->name('permainan.index');
    });
    
    Route::get('materi/{tipe}', 'MateriController@index')->name('materi.index');
    Route::resource('nilai', 'NilaiController');
    Route::resource('tujuan', 'TujuanController');
});
