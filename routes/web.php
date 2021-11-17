<?php


use App\Http\Controllers\frontend\ClienteController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MailController;
use App\Http\Controllers\frontend\PedidoController;
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
Route::get('iconos', [HomeController::class, 'iconos'])->name('iconos');

Route::get('nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('examenes', [HomeController::class, 'examenes'])->name('examenes');
Route::get('reservar', [HomeController::class, 'reservar'])->name('reservar');

Route::get('contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('promociones', [HomeController::class, 'promociones'])->name('promociones');


Route::get('getExamenes', [HomeController::class, 'getExamenes'])->name('examenes.getExamenes');
Route::get('setCartExamen', [HomeController::class, 'setCartExamen'])->name('examenes.setCartExamen');
Route::get('removeItemCart', [HomeController::class, 'removeItemCart'])->name('examenes.removeItemCart');
Route::get('getCompra', [HomeController::class, 'getCompra'])->name('getCompra');


Route::get('selectFecha', [HomeController::class, 'selectFecha'])->name('selectFecha');
Route::get('selectHora', [HomeController::class, 'selectHora'])->name('selectHora');




Route::post('webhooks', WebhooksController::class);



Route::group(['middleware' => 'auth'], function(){
	Route::get('micuenta', [ClienteController::class, 'micuenta'])->name('cliente.micuenta');
	Route::post('micuenta', [ClienteController::class, 'setPefil'])->name('cliente.setPefil');
	Route::get('micuenta/detalle_pedido', [ClienteController::class, 'detalle_pedido'])->name('cliente.detalle_pedido');

	Route::post('crear/pedido', [PedidoController::class, 'crear'])->name('crear.pedido');
	Route::get('pagar/{pedido}', [PedidoController::class, 'pagar'])->name('pagar');
	Route::get('confirmado/{pedido}', [PedidoController::class, 'procesar_pago'])->name('pedido.confirmado');
	Route::get('failure/{pedido}', [PedidoController::class, 'procesar_pago'])->name('pedido.error_pedido');
	Route::get('pending/{pedido}', [PedidoController::class, 'procesar_pago'])->name('pedido.pendiente');
	Route::get('pedido/{pedido}', [PedidoController::class, 'show'])->name('pedido.show');
	
});


Route::get('terminos_y_condiciones', [HomeController::class, 'terminos'])->name('home.terminos');


//modal
Route::post('login_modal', [ClienteController::class, 'login'])->name('cliente.login');
Route::post('registrar_modal', [ClienteController::class, 'registrar'])->name('cliente.registrar');

Auth::routes();


Route::get('home', function(){
	return redirect('/');
});
