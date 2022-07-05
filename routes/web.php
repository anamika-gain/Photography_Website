<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\ResetpasswordController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pages.page');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//admin=======

// Route::get('admin/home', [App\Http\Controllers\AdminController::class,'index']);
//  Route::get('admin', [App\Http\Controllers\LoginController::class,'showLoginForm'])->name('admin.login');
//  Route::post('admin', [App\Http\Controllers\LoginController::class,'login']);
// Password Reset Routes...
//Route::get('admin-password/reset', ForgotPasswordController::class,'showLinkRequestForm')->name('admin.password.request');
// Route::get('admin-password/email', ForgotPasswordController::class,'sendResetLinkEmail')->name('admin.password.email');
// Route::get('admin-password/reset/{token}', ResetPasswordController::class,'showResetForm')->name('admin.password.reset');
// Route::get('admin-password/reset', ResetPasswordController::class,'reset');
// Route::get('/admin/Change/Password',AdminController::class,'ChangePassword')->name('admin.password.change');
// Route::post('/admin/password/update',AdminController::class,'Update_pass')->name('admin.password.update');
//Route::get('admin/logout', AdminController::class,'logout')->name('admin.logout');
//category routes=====
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'category'])->name('categories');
Route::post('admin/store/category', [App\Http\Controllers\CategoryController::class, 'storecategory'])->name('store.category');
Route::get('delete/category/{id}', [App\Http\Controllers\CategoryController::class, 'DeleteCategory']);
Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'EditCategory']);
Route::post('update/category/{id}',  [App\Http\Controllers\CategoryController::class, 'UpdateCategory']);
Route::get('admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'projectByCategory'])->name('admin_category.project');
Route::get('admin/edit/project/{id}', [App\Http\Controllers\CategoryController::class, 'Editproject']);
Route::post('admin/update/project/{id}', [App\Http\Controllers\CategoryController::class, 'Updateproject']);

//project routes=====
Route::get('/projects', [App\Http\Controllers\projectController::class, 'project'])->name('projects');
Route::get('admin/project/add', [App\Http\Controllers\projectController::class, 'create'])->name('add.project');
Route::get('admin/project/addbycategory/{id}', [App\Http\Controllers\projectController::class, 'createbyCategory'])->name('add.projectbyCategory');
Route::post('admin/store/project', [App\Http\Controllers\projectController::class, 'storeProject'])->name('store.project');
Route::get('delete/project/{id}', [App\Http\Controllers\projectController::class, 'Deleteproject']);
Route::get('edit/project/{id}', [App\Http\Controllers\projectController::class, 'viewProject']);
Route::get('view/project/{id}', [App\Http\Controllers\projectController::class, 'Editproject']);
Route::get('admin/get/projects/{id}', [App\Http\Controllers\PostController::class, 'getProjectsFromCategory']);
Route::post('update/project/{id}',  [App\Http\Controllers\projectController::class, 'Updateproject']);
Route::get('admin/project/{id}', [App\Http\Controllers\projectController::class, 'postByProject'])->name('admin_project.post');
Route::get('admin/edit/post/{id}', [App\Http\Controllers\projectController::class, 'Editpost']);
Route::post('admin/update/post/{id}', [App\Http\Controllers\projectController::class, 'Updatepost']);
Route::get('inactive/project/{id}', [App\Http\Controllers\projectController::class, 'inactive']);
Route::get('active/project/{id}', [App\Http\Controllers\projectController::class, 'Active']);
//posts routes=====
Route::get('admin/post/all', [PostController::class, 'index'])->name('all.post');
Route::get('admin/post/add', [PostController::class, 'create'])->name('add.post');
Route::get('admin/post/addbyproject/{id}', [PostController::class, 'createbyproject'])->name('add.postbyproject');
Route::post('admin/store/post', [PostController::class, 'store'])->name('store.post');
Route::get('inactive/post/{id}', [PostController::class, 'inactive']);
Route::get('active/post/{id}', [PostController::class, 'Active']);
Route::get('delete/post/{id}', [PostController::class, 'Deletepost']);
Route::get('view/post/{id}', [PostController::class, 'Viewpost']);
Route::get('edit/post/{id}', [PostController::class, 'Editpost']);
Route::post('update/post/{id}', [PostController::class, 'Updatepost']);

//frontend routes===
Route::get('/category', [FrontendController::class, 'index'])->name('category');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/category/{id}', [FrontendController::class, 'projectByCategory'])->name('category.project');
Route::get('/project/{id}', [FrontendController::class, 'postByProject'])->name('project.post');
