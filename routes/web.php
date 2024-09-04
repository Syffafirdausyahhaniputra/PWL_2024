<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
---------------------------------------------------------------------------
        Praktikum 1
---------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function() {
    return 'World';
});

Route::get('/welcome', function() {
    return 'Selamat Datang';
});

Route::get('/about', function() {
    return 'Nama: Syffa Firdausyah Hani Putra <br> NIM: 2241760005';
});

Route::get('/user/{name}', function($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postID, $commentID) {
    return 'Pos ke-'.$postID." Komentar ke-: ".$commentID;
});

Route::get('/articles/{id}', function($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function($name='John') {
    return 'Nama saya '.$name;
});

// Route Name
/*
Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');
*/

// Route Group dab Route Prefixes
/*
// Route Group
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
    // Uses first & second middleware...
    });
});
   
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

Route::middleware('auth')->group(function () {
   Route::get('/user', [UserController::class, 'index']);
   Route::get('/post', [PostController::class, 'index']);
   Route::get('/event', [EventController::class, 'index']);
});

// Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});
*/


// Redirect Routes
/*
Route::redirect('/here', '/there');
*/


// View Routes
/*
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


---------------------------------------------------------------------------
*/

/*
---------------------------------------------------------------------------
        Praktikum 2
---------------------------------------------------------------------------
*/
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [HomeController::class,'welcome']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class) ->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class) ->except([
    'create', 'store', 'update', 'destroy'
]);