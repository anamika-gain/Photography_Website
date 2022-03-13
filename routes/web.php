<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//category routes=====
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'category'])->name('categories');
Route::post('admin/store/category', [App\Http\Controllers\CategoryController::class, 'storecategory'])->name('store.category');
Route::get('delete/category/{id}', [App\Http\Controllers\CategoryController::class, 'DeleteCategory']);
Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'EditCategory']);
Route::post('update/category/{id}',  [App\Http\Controllers\CategoryController::class, 'UpdateCategory']);

//project routes=====
Route::get('/projects', [App\Http\Controllers\projectController::class, 'project'])->name('projects');
Route::get('admin/project/add', [App\Http\Controllers\projectController::class, 'create'])->name('add.project');
Route::post('admin/store/project', [App\Http\Controllers\projectController::class, 'storeProject'])->name('store.project');
Route::get('delete/project/{id}', [App\Http\Controllers\projectController::class, 'Deleteproject']);
Route::get('edit/project/{id}', [App\Http\Controllers\projectController::class, 'Editproject']);
Route::post('update/project/{id}',  [App\Http\Controllers\projectController::class, 'Updateproject']);
//posts routes=====
Route::get('admin/post/all', [PostController::class, 'index'])->name('all.post');
Route::get('admin/post/add', [PostController::class, 'create'])->name('add.post');
Route::post('admin/store/post', [PostController::class, 'store'])->name('store.post');
Route::get('inactive/post/{id}', [PostController::class, 'inactive']);
Route::get('active/post/{id}', [PostController::class, 'Active']);
Route::get('delete/post/{id}', [PostController::class, 'Deletepost']);
Route::get('view/post/{id}', [PostController::class, 'Viewpost']);
Route::get('edit/post/{id}', [PostController::class, 'Editpost']);
Route::post('update/post/withoutphoto/{id}', [PostController::class, 'UpdatepostWithoutPhoto']);
Route::post('update/post/photo/{id}', [PostController::class, 'UpdatepostPhoto']);

//frontend routes===
Route::get('/category', [FrontendController::class, 'index'])->name('category');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/category/{id}', [FrontendController::class,'projectByCategory'])->name('category.project');
Route::get('/project/{id}', [FrontendController::class,'postByProject'])->name('project.post');