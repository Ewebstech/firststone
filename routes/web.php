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

Route::get('/', function (){
    return view('baselayout');
});
// Blank Page
Route::get('/blank', function (){
    return view('blank');
});
//About Page
Route::get('/about', function (){
    return view('about');
});

Route::prefix('services')->group(function () {
    $this->get('/land', function () {
        return view('land-investments');
    });
    $this->get('/dev', function () {
        return view('dev-investments');
    });
});
//About Page
Route::get('/contact', function (){
    return view('contact');
});

$SiteRoutes = Route::prefix('site')->group(function () {
    $this->post('/signup', 'UserController@regUser')->name('signup');
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

//$SiteRoute = Route::



