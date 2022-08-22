<?php


use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Middleware\UpperCaseMiddleware;
use Illuminate\Http\Request;
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


############################ Blog Route
Route::group(['prefix' => 'blog', 'namespace' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'list']);
    Route::get('/new', [BlogController::class, 'new']);
    Route::post('/create', [BlogController::class, 'create']);
    Route::get('/edit/{id}', [BlogController::class, 'edit']);
    Route::delete('/delete/{id}', [BlogController::class, 'remove']);
});
############################## Blog Route


Route::group(['prefix' => 'register', 'namespace' => 'user', 'middleware' => [UpperCaseMiddleware::class]], function () {
    Route::post('/create', [RegisterController::class, 'create']);
    Route::patch('/update/{id}', [RegisterController::class, 'update']);
    Route::get('/', [RegisterController::class, 'register']);
    Route::get('/register-list', [RegisterController::class, 'list']);
    Route::get('/edit/{id}', [RegisterController::class, 'edit']);
    Route::delete('/delete/{id}', [RegisterController::class, 'remove']);
});


//Route::group(["prefix" => "user", 'namespace' => 'User', 'middleware' => [UpperCaseMiddleware::class]], function () {
//    Route::get('/home', [HomeController::class, 'home']);
//    Route::get('/list', [HomeController::class, 'list']);
//    Route::post('/create', [HomeController::class, 'create']);
//    Route::patch('/update', [HomeController::class, 'update']);
//    Route::delete('/delete', [HomeController::class, 'remove']);
//});

//Route::group(["prefix" => "blog", 'namespace' => 'User'], function () {
//    Route::get('/list', [HomeController::class, 'list']);
//    Route::post('/create', [HomeController::class, 'create']);
//    Route::patch('/update', [HomeController::class, 'update']);
//    Route::delete('/delete', [HomeController::class, 'remove']);
//});


//Route::get('/register', function () {
//    return view('register');
////    return view('home');
//});


//Route::get('/home/{blog_id?}', function (\Illuminate\Http\Request $request) {
//    $age = $request->age;
//    $blog_id = $age + 10;
//    $name = 'ali';
//    return view('home', compact('name', 'age', 'blog_id'));
//});


//Route::get('/ali', function () {
//
//    $age = 100;
//    $blog_id = $age + 10;
//    $name = 'hasan';
//    return view('home', compact('name', 'age', 'blog_id'));
//
//});

//Route::redirect('/hasan', '/train/public/home?age=20');
//
//Route::get('/about/{number}', function ($number) {
//    echo $number;
//});
//
//Route::get('/art/{id}', function ($id) {
//    echo $id;
//});
//
//Route::get('/blog1/{category}/{slug?}', function ($category, $slug = null) {
//    echo $category;
//    echo $slug;
//});
//Route::get('/articles/{id?}', function ($id = 2) {
//    echo $id;
//})->where('id', '[0-9]+');
//
//Route::get('user/{name?}', function ($name = 'mohammad') {
//    echo $name;
//})->where('name', '[A-Za-z]+');
//
//Route::get('karbar/{id}/{name}', function ($id, $name) {
//    echo 'Your Number is ';
//    echo $id;
//    echo '   and Your family is  ';
//    echo $name;
//    //
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//
//#--------------------------------------
//Route::post('testpost', function (Request $request) {
//    if (strlen($request->mobile) != 11) {
//        return "invalid";
//    }
//    if ($request->mobile == "09126145705") {
//        return "ok";
//    } else {
//        return "error";
//    }
//
//    /*return $request->all();*/
//
//});
