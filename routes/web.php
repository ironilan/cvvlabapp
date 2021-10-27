<?php


use App\Http\Controllers\frontend\AreaController;
use App\Http\Controllers\frontend\ArticuloController;
use App\Http\Controllers\frontend\ClienteController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LibroController;
use App\Http\Controllers\frontend\MailController;
use App\Http\Controllers\frontend\NotaController;
use App\Http\Controllers\frontend\NoticiaController;
use App\Http\Controllers\frontend\PedidoController;
use App\Http\Controllers\frontend\PublicacionController;
use App\Http\Controllers\frontend\TemaController;
use App\Http\Controllers\frontend\WebhooksController;
use Illuminate\Support\Facades\Artisan;
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



Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('examenes', [HomeController::class, 'examenes'])->name('examenes');
Route::get('reservar', [HomeController::class, 'reservar'])->name('reservar');

Route::get('contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('promociones', [HomeController::class, 'promociones'])->name('promociones');


Route::get('getExamenes', [HomeController::class, 'getExamenes'])->name('examenes.getExamenes');
Route::get('setCartExamen', [HomeController::class, 'setCartExamen'])->name('examenes.setCartExamen');
Route::get('getCompra', [HomeController::class, 'getCompra'])->name('getCompra');


Route::get('selectFecha', [HomeController::class, 'selectFecha'])->name('selectFecha');
Route::get('selectHora', [HomeController::class, 'selectHora'])->name('selectHora');


Route::post('crear/pedido', [PedidoController::class, 'crear'])->name('crear.pedido');
Route::get('pagar/{pedido}', [PedidoController::class, 'pagar'])->name('pagar');
Route::get('confirmado/{pedido}', [PedidoController::class, 'confirmado'])->name('pedido.confirmado');
Route::get('pedido/{pedido}', [PedidoController::class, 'show'])->name('pedido.show');

Route::post('webhooks', WebhooksController::class);


Auth::routes();


Route::get('home', function(){
	return redirect('/');
});