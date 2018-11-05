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

// Blank Page
Route::get('/blank', function (){
    return view('blank');
});

Route::get('/testmail', function (){
    return view('emails/template');
});

//Home page
Route::get('/', 'IndexController@index');
//About Page
Route::get('/about', function (){
    return view('about');
})->name('about');
//Contact Page
Route::get('/contact', 'ContactController@index')->name('contact');

//Properties routes
Route::get('/property-single/{id}', 'PropertyController@showPropertySinglePage')->name('property-single');
Route::get('/property-listing', 'PropertyController@showPropertyListing')->name('property-listing');

//Investments routes
Route::get('/investment-single/{id}', 'InvestmentController@showInvestmentSinglePage')->name('investment-single');
Route::get('/investment-listing', 'InvestmentController@showInvestmentListing')->name('investment-listing');

Route::prefix('services')->group(function () {
    $this->get('/land', function () {
        return view('land-investments');
    });
    $this->get('/dev', function () {
        return view('dev-investments');
    });
});


//Post message
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/subscribe-mail','MailController@store')->name('subscribemail');

$SiteRoutes = Route::prefix('site')->group(function () {
    $this->post('/signup', 'UserController@regUser')->name('signup');
});

/**
 * Admin Routes
 */


$AdminRoute = Route::prefix('f-admin')->group(function () {
    $this->get('', 'AdminController@index');

    //Routes for Properties
    $this->get('/add-property', 'PropertyController@create')->name('property.create');
    $this->post('/add-property', 'PropertyController@store')->name('property.store');
    
    //Routes for Investments
    $this->get('/add-investment', 'InvestmentController@create')->name('investment.create');
    $this->post('/add-investment', 'InvestmentController@store')->name('investment.store');

    $this->post('/login', 'AdminController@checklogin')->name('login');
    $this->get('/dashboard', 'AdminController@successlogin')->name('dashboard');
    $this->get('/logout', 'AdminController@logout')->name('logout');
    
    $this->post('/postdata', 'FormController@store')->name('createproject');
});

//$SiteRoute = Route::

$MembersRoute = Route::prefix('u-accounts')->group(function () {
    $this->get('', 'MembersController@loginPage');

});
