<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    $html = '<h1>Trang chu Page</h1>';
    return $html;
});

Route::get(
    'home',
    [HomeController::class, 'index']
)->name('home');

Route::get(
    'new{id}',
    [HomeController::class, 'getId']
)->name('home');

// Route::get('unicode', function () {
//     return view('form');
// });

// Route::post('unicode', function () {
//     return 'post unicode';
// });

// route match nhaan nhieu phupng thuc
// Route::match(['get, post'], 'unicode', function () {
//     return $_SERVER('REQUEST_METHOD');
// });


//any chap nhan tat ca request
// Route::any('unidcode', function () {
//     return 'any router';
// });


//redirect
// Route::redirect('unicode', 'https://google.com', 302);


// router view
// Route::view('router-view', 'form');


// route prefix + group
// Route::prefix('group')->group(function(){
//     Route::get('group1', function () {
//         return 'group1';
//     });
//     Route::get('group2', function () {
//         return 'group2';
//     });
// });


// tham so url && validate
// Route::get('param/{id}', function ($id) {
//     return 'param' . $id;
// });
// Route::get('slug/{slug}-{id}', function ($slug, $id) {
//     return 'param slug :' . $slug . 'param id :' . $id;
// });
// Route::get('param/{slug}-{id?}', function ($slug = null, $id = null) {
//     return 'param slug =' . $slug . '<br/>' . 'param id =' . $id;
// })->where(
//     [
//         'slug' => '[.+]',
//         'id' => '(0-9)+'
//     ],
// );


//dat ten router tien goi url
Route::get('form', function () {
    return view('form');
})->name('trangform');

// Route::get('param/{slug}?-{id?}', function ($slug = null, $id = null) {
//     return 'param slug && id page';
// })->where(
//     [
//         'slug' => '[.+]',
//         'id' => '(0-9)+'
//     ],
// )->name('trangform_has_param');


// middle ware thiet lap cho group
Route::prefix('group')->middleware('check.permisstion')->group(function () {
    Route::get('group1', function () {
        return 'group1';
    });
    Route::get('group2', function () {
        return 'group2';
    });
});
