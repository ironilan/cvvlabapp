<?php 


namespace App\Traits;

use App\Models\Pedido;
use App\Models\Pedidodetalle;
use Illuminate\Http\Response;


trait PedidoTrait
{
	
	public function crearPedido($cart, $total, $cliente)
	{
		

		//$cart = Cart::content();
        //$total = Cart::total();
        //$cliente = Auth::user();

        $pedido = new Pedido;
        $pedido->ammount = $total;
        $pedido->cliente_id = $cliente;
        $pedido->status = 'pendiente';
        $pedido->save();


        foreach ($cart as $key => $prod) {
            $detalle = new Pedidodetalle;
            $detalle->price = $prod->price;
            $detalle->qty = $prod->qty;
            $detalle->examen_id = $prod->id;
            $detalle->pedido_id = $pedido->id;
            $detalle->save();
        }


        return $pedido;
	}

	
}