<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\OrdenServicioController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ReportIssueController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SuperAdminController;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name('user')->group(function () {
    route::resource('/servicio', ServicioController::class);
    route::resource('/nos', NosotrosController::class);
    Route::resource('/contact', ContactController::class);
    route::get('/', function () {
        return view('user.principal');
    });
});

route::get('contados', function () {
    Mail::to('Jonathan.coox15@gmail.com')->send(new OrderShipped);
    return "Emial enviado";
});

route::post('/report-issue', [ReportIssueController::class, 'store'])->name('report.issue');
route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::name('admin')->group(function () {
    Route::get('/admin/report', [AdminController::class, 'report'])->name('report');
    Route::get('/admin/mensaje', [AdminController::class, 'mensaje'])->name('mensaje');
    Route::get('/admin/factura', [AdminController::class, 'factura'])->name('factura');
    Route::get('/admin/inventario', [AdminController::class, 'inventario'])->name('inventario');
    Route::get('/admin/presupuesto', [AdminController::class, 'presupuerto'])->name('presupuesto');
    Route::get('/admin/orden-servicio', [AdminController::class, 'ordenServicio'])->name('ordenServicio');
    Route::get('/admin/credito', [AdminController::class, 'credito'])->name('credito');
    Route::get('admin/paquetes', [AdminController::class, 'paquete'])->name('paquete');

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin-dashboard');
});

Route::name('superadmin')->group(function () {
    Route::get('/superadmin', [SuperAdminController::class, 'dashboard'])->name('superadmin-dashboard');
    Route::get('/superadmin/factura', [SuperAdminController::class, 'factura'])->name('superadmin-factura');
    Route::get('/superadmin/inventario', [SuperAdminController::class, 'inventario'])->name('superadmin-inventario');
    Route::get('/superadmin/presupuesto', [SuperAdminController::class, 'presupuerto'])->name('superadmin-presupuesto');
    Route::get('/superadmin/credito', [SuperAdminController::class, 'credito'])->name('superadmin-credito');
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin-dashboard');
});

Route::name('reporte')->group(function () {
    Route::get('/admin/report', [ReporteController::class, 'index']);
    Route::get('/reporte/{reporte}', [ReporteController::class, 'show'])->name('reporte.show');
    Route::patch('/reporte/{reporte}', [ReporteController::class, 'update'])->name('reporte.update');
    Route::delete('/reporte/{reporte}', [ReporteController::class, 'destroy'])->name('reporte.destroy');
});

Route::name('paquete')->group(function () {
    Route::get('/admin/paquetes', [PaqueteController::class, 'index']);
    Route::get('/paquetes/{paquete}', [PaqueteController::class, 'show'])->name('paquete.show');
    Route::patch('/paquetes/{paquete}', [PaqueteController::class, 'update'])->name('paquete.update');
    Route::delete('/paquetes/{paquete}', [PaqueteController::class, 'destroy'])->name('paquete.destroy');
});

Route::name('factura')->group(function () {
    Route::get('admin/factura', [FacturacionController::class, 'index']);
    Route::get('/factura/{factura}', [FacturacionController::class, 'show'])->name('facturacion.show');
    Route::patch('/factura/{factura}', [FacturacionController::class, 'update'])->name('facturacion.update');
    Route::delete('/factura/{factura}', [FacturacionController::class, 'destroy'])->name('facturacion.destroy');
});

Route::name('inventario')->group(function () {
    Route::get('admin/inventario', [InventarioController::class, 'index']);
    Route::get('admin/inventario/{inventario}', [InventarioController::class, 'show'])->name('inventario.show');
    Route::patch('/inventario/{inventario}', [InventarioController::class, 'update'])->name('inventario.update');
    Route::delete('/inventario/{inventario}', [InventarioController::class, 'destroy'])->name('inventario.destroy');
});

Route::name('presupuesto')->group(function () {
    Route::get('admin/presupuesto', [PresupuestoController::class, 'index']);
    Route::get('/presupuesto/{presupuesto}', [PresupuestoController::class, 'show'])->name('presupuesto.show');
    Route::patch('/presupuesto/{presupuesto}', [PresupuestoController::class, 'update'])->name('presupuesto.update');
    Route::delete('/presupuesto/{presupuesto}', [PresupuestoController::class, 'destroy'])->name('presupuesto.destroy');
});

Route::name('mensaje')->group(function () {
    Route::get('admin/mensaje', [MensajeController::class, 'index']);
    Route::get('/mensaje/{mensaje}', [MensajeController::class, 'show'])->name('mensaje.show');
    Route::patch('/mensaje/{mensaje}', [MensajeController::class, 'update'])->name('mensaje.update');
    Route::delete('/mensaje/{mensaje}', [MensajeController::class, 'destroy'])->name('mensaje.destroy');
});

Route::name('ordenservicio')->group(function () {
    Route::get('admin/orden-servicio', [OrdenServicioController::class, 'index']);
    Route::get('/ordenservicio/{ordenservicio}', [OrdenServicioController::class, 'show'])->name('ordenservicio.show');
    Route::patch('/ordenservicio/{ordenservicio}', [OrdenServicioController::class, 'update'])->name('ordenservicio.update');
    Route::delete('/ordenservicio/{ordenservicio}', [OrdenServicioController::class, 'destroy'])->name('ordenservicio.destroy');
});

Route::name('creditos')->group(function () {
    Route::get('admin/credito', [CreditoController::class, 'index']);
    Route::get('/credito/{credito}', [CreditoController::class, 'show'])->name('credito.show');
    Route::patch('/credito/{credito}', [CreditoController::class, 'update'])->name('credito.update');
    Route::delete('/credito/{credito}', [CreditoController::class, 'destroy'])->name('credito.destroy');
});

Route::resource('creditos', CreditoController::class);
Route::resource('paquetes', PaqueteController::class);
Route::resource('reporte', ReporteController::class);
Route::resource('mensaje', MensajeController::class);
Route::resource('facturacion', FacturacionController::class);
Route::resource('inventario', InventarioController::class);
Route::resource('ordenservicio', OrdenServicioController::class);
Route::resource('presupuesto', PresupuestoController::class);



require __DIR__ . '/auth.php';
