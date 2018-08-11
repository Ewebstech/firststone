<?php

use App\Http\Controllers\AdminController;

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
    return view('baselayout');
});


/**
 * Admin Routes
 */

$AdminRoute = Route::prefix('f-admin')->group(function () {
    $this->get('', 'AdminController@index');
    $this->post('/login', 'AdminController@checklogin')->name('login');
    $this->get('/dashboard', 'AdminController@successlogin')->name('dashboard');
    $this->get('/logout', 'AdminController@logout')->name('logout');
    $this->get('/add-projects', function () {
        return view('admin/addprojects');
    })->name('add-p');
    $this->post('/postdata', 'FormController@store')->name('createproject');
});



