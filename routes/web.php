<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//Management Team start


Route::get('/chairmans', [SiteController::class, 'chairmans'])->name('chairmans');
Route::get('/managing-directors', [SiteController::class, 'managingdirectors'])->name('managingdirectors');
Route::get('/directors', [SiteController::class, 'directors'])->name('directors');




//Management team end


//Product Route start

Route::get('/productdetails', [SiteController::class, 'productdetails'])->name('productdetails');
Route::get('/product', [SiteController::class, 'product'])->name('product');
Route::get('/cart', [SiteController::class, 'cart'])->name('cart');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');

//Product Route End

//Page Route Start
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/home2', [SiteController::class, 'home2'])->name('home2');
Route::get('/home3', [SiteController::class, 'home3'])->name('home3');
Route::get('/home4', [SiteController::class, 'home4'])->name('home4');
Route::get('/home5', [SiteController::class, 'home5'])->name('home5');
Route::get('/home6', [SiteController::class, 'home6'])->name('home6');
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/aboutus', [SiteController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/team', [SiteController::class, 'team'])->name('team');
Route::get('/testimonials', [SiteController::class, 'testimonials'])->name('testimonials');

//Page Route End

//Project Route Start

Route::get('/projectsdetails', [SiteController::class, 'projectsdetails'])->name('projectsdetails');
Route::get('/projects', [SiteController::class, 'projects'])->name('projects');



//Project Route End

//Product Category Start
Route::get('/all-categories', [SiteController::class, 'allcategory'])->name('allcategory');


Route::get('/all-product', [SiteController::class, 'allproduct'])->name('allproduct');


// Route::get('/product-category/category', [SiteController::class, 'category'])->name('category');
Route::get('/categories/blower', [SiteController::class, 'blower'])->name('blower');
Route::get('/categories/diffuser', [SiteController::class, 'diffuser'])->name('diffuser');
Route::get('/categories/industrial-pump', [SiteController::class, 'industrialpump'])->name('industrialpump');
Route::get('/categories/electric-motor', [SiteController::class, 'electricmotor'])->name('electricmotor');
Route::get('/categories/electromagenetic-flow-meter', [SiteController::class, 'electromageneticflowmeter'])->name('electromageneticflowmeter');
Route::get('/categories/frp-vessel', [SiteController::class, 'frpvessel'])->name('frpvessel');
Route::get('/categories/ro-and-uf-membrane', [SiteController::class, 'roandufmembrane'])->name('roandufmembrane');
Route::get('/categories/water-treatment-accessories', [SiteController::class, 'watertreatmentaccessories'])->name('watertreatmentaccessories');
Route::get('/categories/water-treatment-chemicals-and-media', [SiteController::class, 'watertreatmentchemicalsandmedia'])->name('watertreatmentchemicalsandmedia');


//Product Category End


//Industrial Sulotion Start

Route::get('/agricultural', [SiteController::class, 'agricultural'])->name('agricultural');
Route::get('/alternate', [SiteController::class, 'alternate'])->name('alternate');
Route::get('/blogdetails', [SiteController::class, 'blogdetails'])->name('blogdetails');
Route::get('/chemical', [SiteController::class, 'chemical'])->name('chemical');
Route::get('/classic', [SiteController::class, 'classic'])->name('classic');
Route::get('/lightbox', [SiteController::class, 'lightbox'])->name('lightbox');
Route::get('/mechanical', [SiteController::class, 'mechanical'])->name('mechanical');
Route::get('/meterial', [SiteController::class, 'meterial'])->name('meterial');
Route::get('/resourcesdetails', [SiteController::class, 'resourcesdetails'])->name('resourcesdetails');
Route::get('/resources', [SiteController::class, 'resources'])->name('resources');
Route::get('/oil', [SiteController::class, 'oil'])->name('oil');
Route::get('/power', [SiteController::class, 'power'])->name('power');
Route::get('/request', [SiteController::class, 'request'])->name('request');
Route::get('/solutions', [SiteController::class, 'solutions'])->name('solutions');
Route::get('/fullscreen', [SiteController::class, 'fullscreen'])->name('fullscreen');


//Industrial Sulotion End










