<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/', function () {
//     $html = '<h1>Trang chu Page</h1>';
//     return $html;
// });

// Route::get(
//     'home',
//     [HomeController::class, 'index']
// )->name('home');

// Route::get(
//     'new{id}',
//     [HomeController::class, 'getId']
// )->name('home');

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
// Route::get('form', function () {
//     return view('form');
// })->name('trangform');

// Route::get('param/{slug}?-{id?}', function ($slug = null, $id = null) {
//     return 'param slug && id page';
// })->where(
//     [
//         'slug' => '[.+]',
//         'id' => '(0-9)+'
//     ],
// )->name('trangform_has_param');


// middle ware thiet lap cho group
// Route::prefix('group')->middleware('check.permisstion')->group(function () {
//     Route::get('group1', function () {
//         return 'group1';
//     });
//     Route::get('group2', function () {
//         return 'group2';
//     });
// });





// client routes

Route::prefix('category')->group(function () {
    //danh sach sp
    Route::get('/', [CategoriesController::class, 'index'])->name('category.list');

    //lay chi tiet 1 sp
    Route::get('/edit/{id}', [CategoriesController::class, 'getOneCategory'])->name('category.getOne');

    //update 1 sp
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    //hien thi form add du leu
    Route::get('/add', [CategoriesController::class, 'addCategory']);

    //xu ly them sp
    Route::post('/add', [CategoriesController::class, 'handleAddcategory'])->name('category.add');

    //xoa 1 sp
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteAddcategory'])->name('category.delete');
});

//admin route
Route::middleware('auth.admin')-> prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/product', ProductController::class);
});
