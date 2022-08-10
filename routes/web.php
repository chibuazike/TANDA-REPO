<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;


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
// Public routes
Route::get("/",[PublicPagesController::class,'home'])->name("home");
Route::get("/contact",[PublicPagesController::class,'contact'])->name("contact");
Route::get("/about",[PublicPagesController::class,'about'])->name("about");
Route::get("/services",[PublicPagesController::class,'services'])->name("services");
Route::get("/blog",[PublicPagesController::class,'blog'])->name("blog");
Route::get("/blog/{slug}",[PublicPagesController::class,'blog_detail'])->name("blog_detail");


// Middleware 
Route::middleware('auth')->group(function(){
//Dashboard Route
Route::get("/dashboard",[DashboardController::class,'Dashboard'])->name("dashboard");

// Auth Routes
Route::resource("/dashboard/users",UsersController::class);
Route::resource("/dashboard/userprofile",UserProfileController::class);


//Admin Routes
Route::resource('/dashboard/categories', CategoriesController::class);
Route::resource('/dashboard/posts', PostsController::class);
});
Auth::routes();


