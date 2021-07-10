<?php

use App\Http\Controllers\Category\CategoriesController;
use App\Http\Controllers\Materilas\MaterialsController;
use App\Http\Controllers\Tag\TagsController;
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

Route::get('/', [MaterialsController::class, 'index'])->name('materials');
Route::get('/materials/show/{id}', [MaterialsController::class, 'show'])->name('materials.show');
Route::get('/materialCreate', [MaterialsController::class, 'store'])->name('material.store');
Route::get('/materialedit/{material}', [MaterialsController::class, 'edit'])->name('material.edit');
Route::get('/materialupdate/{material}', [MaterialsController::class, 'update'])->name('material.update');
Route::GET('/addmaterial', [MaterialsController::class,'create'])->name('create.material');
Route::post('/materialDel', [MaterialsController::class, 'destroy'])->name('material.destroy');
Route::post('/search', [MaterialsController::class,'search'])->name('search');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/categoryCreate', [CategoriesController::class, 'store'])->name('category.store');
Route::get('/categoryedit/{category}', [CategoriesController::class, 'edit'])->name('category.edit');
Route::get('/categoryupdate/{category}', [CategoriesController::class, 'update'])->name('category.update');
Route::GET('/addcategory', [CategoriesController::class,'create'])->name('create.category');
Route::post('/categoryDel', [CategoriesController::class, 'destroy'])->name('category.destroy');

Route::get('/tags', [TagsController::class, 'index'])->name('tags');
Route::get('/tagsCreate', [TagsController::class, 'store'])->name('tag.store');
Route::get('/tagedit/{tag}', [TagsController::class, 'edit'])->name('tag.edit');
Route::get('/tagupdate/{tag}', [TagsController::class, 'update'])->name('tag.update');
Route::GET('/addTag', [TagsController::class,'create'])->name('create.tag');
Route::post('/tagDel', [TagsController::class, 'destroy'])->name('tag.destroy');

Route::get('/addTagMaterial', [MaterialsController::class, 'store'])->name('add.tag');
