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
    return redirect('/intelligence-artificielle-info/list');
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

Route::get('/{slug}-{id}.html', [InfoController::class, 'front_office_detail'])->where(['id' => '(\d+)', 'slug' => '([a-zA-Z0-9\-]+)']);

Route::get('/intelligence-artificielle-info/actu', [InfoController::class, 'list']);
// Route::get('/test', [ArticleController::class, 'test']);
Route::get('/intelligence-artificielle-info/sign-in', [AuteurController::class, 'loginform']);
Route::get('/intelligence-artificielle-info/list', [InfoController::class, 'front_office_list']);
Route::get('/intelligence-artificielle-info/list-actualite', [InfoController::class, 'front_office_list_actualite']);
Route::get('/intelligence-artificielle-info/list-formation', [InfoController::class, 'front_office_list_formation']);
Route::get('/intelligence-artificielle-info/list-tendance', [InfoController::class, 'front_office_list_tendance']);
Route::get('/intelligence-artificielle-info/list-conseil', [InfoController::class, 'front_office_list_conseil']);

//Back-office
Route::post('/auteur/traitement-login', [AuteurController::class, 'traitementlogin']);
Route::get('/information/create-form', [InfoController::class, 'createform']);
Route::post('/information/create', [InfoController::class, 'create']);
Route::get('/information/list', [InfoController::class, 'back_office_list']);
Route::get('/information/list-actualite', [InfoController::class, 'back_office_list_actualite']);
Route::get('/information/list-formation', [InfoController::class, 'back_office_list_formation']);
Route::get('/information/list-tendance', [InfoController::class, 'back_office_list_tendance']);
Route::get('/information/list-conseil', [InfoController::class, 'back_office_list_conseil']);
// Route::get('/information/details', [InfoController::class, 'back_office_detail']);

Route::get('/information/update-form', [InfoController::class, 'updateform']);
Route::get('/information/update', [InfoController::class, 'update']);

Route::get('/information/delete', [InfoController::class, 'delete']);
