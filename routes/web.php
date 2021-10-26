<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CampaignGroupController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\GroupCityController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
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
Route::get('/campaignGroup-create', [CampaignGroupController::class, 'create'])->name('campaignGroup.create');
Route::post('/campaignGroup-create', [CampaignGroupController::class, 'store'])->name('campaignGroup.store');
Route::get('/campaignGroup-edit/{id}', [CampaignGroupController::class, 'edit'])->name('campaignGroup.edit');
Route::put('/campaignGroup-edit/{id}', [CampaignGroupController::class, 'update'])->name('campaignGroup.update');
Route::get('/campaignGroup-show/{id}', [CampaignGroupController::class, 'show'])->name('campaignGroup.show');
Route::delete('/campaignGroup-destroy/{name}', [CampaignGroupController::class, 'destroy'])->name('campaignGroup.destroy');
Route::get('/campaignGroup-index', [CampaignGroupController::class, 'index'])->name('campaignGroup.index');

Route::get('/campaign-create', [CampaignController::class, 'create'])->name('campaign.create');
Route::post('/campaign-create', [CampaignController::class, 'store'])->name('campaign.store');
Route::get('/campaign-edit/{id}', [CampaignController::class, 'edit'])->name('campaign.edit');
Route::put('/campaign-edit/{id}', [CampaignController::class, 'update'])->name('campaign.update');
Route::get('/campaign-show/{id}', [CampaignController::class, 'show'])->name('campaign.show');
Route::delete('/campaign-destroy/{name}', [CampaignController::class, 'destroy'])->name('campaign.destroy');
Route::get('/campaign-index', [CampaignController::class, 'index'])->name('campaign.index');

Route::get('/groupCity-create', [GroupCityController::class, 'create'])->name('groupCity.create');
Route::post('/groupCity-create', [GroupCityController::class, 'store'])->name('groupCity.store');
Route::get('/groupCity-edit/{id}', [GroupCityController::class, 'edit'])->name('groupCity.edit');
Route::put('/groupCity-edit/{id}', [GroupCityController::class, 'update'])->name('groupCity.update');
Route::get('/groupCity-show/{id}', [GroupCityController::class, 'show'])->name('groupCity.show');
Route::delete('/groupCity-destroy/{name}', [GroupCityController::class, 'destroy'])->name('groupCity.destroy');
Route::get('/groupCity-index', [GroupCityController::class, 'index'])->name('groupCity.index');

Route::get('/group-create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group-create', [GroupController::class, 'store'])->name('group.store');
Route::get('/group-edit/{name}', [GroupController::class, 'edit'])->name('group.edit');
Route::put('/group-edit/{name}', [GroupController::class, 'update'])->name('group.update');
Route::get('/group-show/{group}', [GroupController::class, 'show'])->name('group.show');
Route::delete('/group-destroy/{name}', [GroupController::class, 'destroy'])->name('group.destroy');
Route::get('/group-index', [GroupController::class, 'index'])->name('group.index');


Route::get('/city-create', [CityController::class, 'create'])->name('city.create');
Route::post('/city-create', [CityController::class, 'store'])->name('city.store');
Route::get('/city-edit/{name}', [CityController::class, 'edit'])->name('city.edit');
Route::put('/city-edit/{name}', [CityController::class, 'update'])->name('city.update');
Route::get('/city-show/{city}', [CityController::class, 'show'])->name('city.show');
Route::delete('/city-destroy/{name}', [CityController::class, 'destroy'])->name('city.destroy');
Route::get('/city-index', [CityController::class, 'index'])->name('city.index');
Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
