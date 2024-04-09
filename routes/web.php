<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OneController;
use App\Http\Controllers\VoterController;

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


Route::middleware(['auth', 'verified', 'has_role'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('setting')->group(function () {
        Route::name('role.')->middleware('can:role_show')->group(function () {
            Route::get('/role', [RoleController::class, 'index'])->name('index');
            Route::get('/role/create', [RoleController::class, 'create'])->name('create')->middleware('can:role_create');
            Route::post('/role', [RoleController::class, 'store'])->name('store');
            Route::get('/role/{role}/edit', [RoleController::class, 'edit'])->name('edit')->middleware('can:role_edit');
            Route::put('/role/{role}', [RoleController::class, 'update'])->name('update');
            Route::get('/role/{role}', [RoleController::class, 'show'])->name('show');
            Route::delete('/role/{role}', [RoleController::class, 'destroy'])->name('destroy')->middleware('can:role_delete');
        });
        Route::name('menu.')->middleware('can:menu_show')->group(function () {
            Route::get('/menu', [MenuController::class, 'index'])->name('index');
            Route::get('/menu/create', [MenuController::class, 'create'])->name('create')->middleware('can:menu_create');
            Route::post('/menu', [MenuController::class, 'store'])->name('store');
            Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('edit')->middleware('can:menu_edit');
            Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('update');
            Route::get('/menu/{menu}', [MenuController::class, 'show'])->name('show');
            Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('destroy')->middleware('can:menu_delete');
        });
        Route::name('user.')->middleware('can:user_show')->group(function () {
            Route::get('/user', [UserController::class, 'index'])->name('index');
            Route::get('/user/create', [UserController::class, 'create'])->name('create')->middleware('can:user_create');
            Route::post('/user', [UserController::class, 'store'])->name('store');
            Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('edit')->middleware('can:user_edit');
            Route::put('/user/{user}', [UserController::class, 'update'])->name('update');
            Route::get('/user/{user}', [UserController::class, 'show'])->name('show');
            Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('destroy')->middleware('can:user_delete');
        });
    });
    Route::prefix('data')->group(function () {
        Route::name('region.')->middleware('can:region_show')->group(function () {
            Route::get('/region', [RegionController::class, 'index'])->name('index');
            Route::get('/region/{region}/edit', [RegionController::class, 'edit'])->name('edit')->middleware('can:region_edit');
            Route::put('/region/{region}', [RegionController::class, 'update'])->name('update');
            Route::get('/region/{region}', [RegionController::class, 'show'])->name('show');
            Route::delete('/region/{region}', [RegionController::class, 'destroy'])->name('destroy')->middleware('can:region_delete');
        });
        Route::name('district.')->middleware('can:district_show')->group(function () {
            Route::get('/district', [DistrictController::class, 'index'])->name('index');
            Route::get('/district/create', [DistrictController::class, 'create'])->name('create')->middleware('can:district_create');
            Route::post('/district', [DistrictController::class, 'store'])->name('store');
            Route::get('/district/{district}/edit', [DistrictController::class, 'edit'])->name('edit')->middleware('can:district_edit');
            Route::put('/district/{district}', [DistrictController::class, 'update'])->name('update');
            Route::get('/district/{district}', [DistrictController::class, 'show'])->name('show');
            Route::delete('/district/{district}', [DistrictController::class, 'destroy'])->name('destroy')->middleware('can:district_delete');
        });
        Route::name('village.')->middleware('can:village_show')->group(function () {
            Route::get('/village', [VillageController::class, 'index'])->name('index');
            Route::get('/village/create', [VillageController::class, 'create'])->name('create')->middleware('can:village_create');
            Route::post('/village', [VillageController::class, 'store'])->name('store');
            Route::get('/village/{village}/edit', [VillageController::class, 'edit'])->name('edit')->middleware('can:village_edit');
            Route::put('/village/{village}', [VillageController::class, 'update'])->name('update');
            Route::get('/village/{village}', [VillageController::class, 'show'])->name('show');
            Route::delete('/village/{village}', [VillageController::class, 'destroy'])->name('destroy')->middleware('can:village_delete');
        });
        Route::name('tps.')->middleware('can:tps_show')->group(function () {
            Route::get('/tps', [TpsController::class, 'index'])->name('index');
            Route::get('/tps/create', [TpsController::class, 'create'])->name('create')->middleware('can:tps_create');
            Route::post('/tps', [TpsController::class, 'store'])->name('store');
            Route::get('/tps/{tps}/edit', [TpsController::class, 'edit'])->name('edit')->middleware('can:tps_edit');
            Route::put('/tps/{tps}', [TpsController::class, 'update'])->name('update');
            Route::get('/tps/{tps}', [TpsController::class, 'show'])->name('show');
            Route::delete('/tps/{tps}', [TpsController::class, 'destroy'])->name('destroy')->middleware('can:tps_delete');
        });
    });
    Route::name('one.')->middleware('can:one_show')->group(function () {
        Route::get('/one', [OneController::class, 'index'])->name('index');
        Route::get('/one/create', [OneController::class, 'create'])->name('create')->middleware('can:one_create');
        Route::post('/one', [OneController::class, 'store'])->name('store');
        Route::get('/one/{one}/edit', [OneController::class, 'edit'])->name('edit')->middleware('can:one_edit');
        Route::put('/one/{one}', [OneController::class, 'update'])->name('update');
        Route::get('/one/{one}', [OneController::class, 'show'])->name('show');
        Route::delete('/one/{one}', [OneController::class, 'destroy'])->name('destroy')->middleware('can:one_delete');
    });

    Route::name('voter.')->middleware('can:voter_show')->group(function () {
        Route::get('/voter', [VoterController::class, 'index'])->name('index');
        Route::get('/voter/map', [VoterController::class, 'map'])->name('map');
        Route::get('/voter/create', [VoterController::class, 'create'])->name('create')->middleware('can:voter_create');
        Route::post('/voter', [VoterController::class, 'store'])->name('store');
        Route::get('/voter/{voter}/edit', [VoterController::class, 'edit'])->name('edit')->middleware('can:voter_edit');
        Route::put('/voter/{voter}', [VoterController::class, 'update'])->name('update');
        Route::get('/voter/{voter}', [VoterController::class, 'show'])->name('show');
        Route::delete('/voter/{voter}', [VoterController::class, 'destroy'])->name('destroy')->middleware('can:voter_delete');
    });


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
