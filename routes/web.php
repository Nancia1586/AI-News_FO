<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuteurController;



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
    return redirect('/articial-intelligence-news/actu');
});

// Route::get('admin/login', function () {
//     return view('admin.login',
//         [
//             'id'=>'1'
//         ])->name('a_login');
// });
// /Route::get('test/{id}',[UsersController::class,'test']);
// Route::get('/home',[ArticleController::class,'home']);
// Route::get('/home', [ArticleController::class, 'home']);
// Route::get('/{slug}-{id}.html', [ArticleController::class, 'detail'])->where(['id' => '(\d+)', 'slug' => '([a-zA-Z0-9\-]+)']);
// Route::post('/articles/create', [ArticleController::class, 'create']);
Route::get('/intelligence-artificielle-news/actu', [InfoController::class, 'list']);
// Route::get('/test', [ArticleController::class, 'test']);
Route::get('/intelligence-artificielle-news/sign-in', [AuteurController::class, 'loginform']);

//Back-office
Route::post('/auteur/traitement-login', [AuteurController::class, 'traitementlogin']);
Route::get('/information/create-form', [InfoController::class, 'createform']);
Route::post('/information/create', [InfoController::class, 'create']);
Route::get('/information/list', [InfoController::class, 'back_office_list']);

Route::get('/information/update-form', [InfoController::class, 'updateform']);
Route::get('/information/update', [InfoController::class, 'update']);

Route::get('/information/delete', [InfoController::class, 'delete']);
