<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/books/details', [BookController::class, 'detail']);

// Route::get('/', function () {
//     $userData = ["username" => "MantaY", "age" => 23, "favorite" => "Sci-fi"];

//     $bookData = [
//         ["id" => 1, "image" => "https://covers.openlibrary.org/b/olid/OL27213498M-M.jpg"],
//         ["id" => 2, "image" => "https://covers.openlibrary.org/b/olid/OL25418275M-M.jpg"],
//         ["id" => 3, "image" => "https://covers.openlibrary.org/b/olid/OL28230579M-M.jpg"],
//         ["id" => 4, "image" => "https://covers.openlibrary.org/b/olid/OL16980586M-M.jpg"],
//         ["id" => 5, "image" => "https://covers.openlibrary.org/b/id/12749873-M.jpg"],
//         ["id" => 6, "image" => "https://covers.openlibrary.org/b/olid/OL26992991M-M.jpg"],
//         ["id" => 7, "image" => "https://covers.openlibrary.org/b/olid/OL22856696M-M.jpg"],
//         ["id" => 8, "image" => "https://covers.openlibrary.org/b/id/13180424-M.jpg"],
//         ["id" => 9, "image" => "https://covers.openlibrary.org/b/olid/OL27918581M-M.jpg"],
//         ["id" => 10, "image" => "https://covers.openlibrary.org/b/id/10389354-M.jpg"],
//         ["id" => 11, "image" => "https://covers.openlibrary.org/b/olid/OL29191495M-M.jpg"],
//         ["id" => 12, "image" => "https://covers.openlibrary.org/b/olid/OL26425330M-M.jpg"]
//     ];
//     // return value using with function
//     return view('index')->with("userData", $userData)->with("bookData", $bookData);
// });

Route::get('/book', function () {
    return view('index');
});

// will make the {id} part of the URL into an argument and call a method "show" in UserController controller
Route::get('/user/{id}', [UserController::class, 'index'])->name('detail-user');