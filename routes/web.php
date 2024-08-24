<?php

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

Route::get('/', function () {
    return view('layouts.client');
});
Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.homeadmin');
        })->name('homeadmin');

        // Route::controller(SanPhamController::class)
        //     ->name('sanpham.')
        //     ->prefix('sanphams/')
        //     ->group(function () {
        //         Route::get('/', 'index')
        //             ->name('index');
        //         Route::get('create', 'create')
        //             ->name('create');
        //         Route::post('store', 'store')
        //             ->name('store');
        //         Route::get('{san_pham_id}/edit', 'edit')
        //             ->name('edit');
        //         Route::put('{san_pham_id}/update', 'update')
        //             ->name('update');
        //         Route::delete('{san_pham_id}/destroy', 'destroy')
        //             ->name('destroy');
        //     });
        // Route::controller(DanhMucController::class)
        //     ->name('danhmuc.')
        //     ->prefix('danhmucs/')
        //     ->group(function () {
        //         Route::get('/', 'index')
        //             ->name('index');
        //         Route::get('create', 'create')
        //             ->name('create');
        //         Route::post('store', 'store')
        //             ->name('store');
        //         Route::get('{danh_muc_id}/edit', 'edit')
        //             ->name('edit');
        //         Route::put('{danh_muc_id}/update', 'update')
        //             ->name('update');
        //         Route::delete('{danh_muc_id}/destroy', 'destroy')
        //             ->name('destroy');
        //     });
    });

