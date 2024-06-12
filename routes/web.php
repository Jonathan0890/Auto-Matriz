<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

Route::get('/XD', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::resource('/servicio', ServicioController::class);
route::resource('/nos', ContactController::class);


route::get('/', function(){
    return view('user.principal');
});



/* temporalmente 
*/
route::get('/contact', function(){
    return view('user.contacto');
});
Route::get('admin/report', function () {
    return view('admin.report');
});
Route::get('admin/mensaje', function () {
    return view('admin.mensaje');
});
Route::get('admin/factura', function () {
    return view('admin.factura');
});
Route::get('/admin', function () {
    return view('admin.dashborad-admin');
});


require __DIR__.'/auth.php';
