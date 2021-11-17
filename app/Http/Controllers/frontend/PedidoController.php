<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Pedidodetalle;
use Illuminate\Http\Request;
use Cart;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class PedidoController extends Controller
{
    public function crear(Request $request)
    {

        $cart = Cart::content();
        $total = Cart::total();
        $cliente = Auth::user();

        $pedido = new Pedido;
        $pedido->ammount = $total;
        $pedido->cliente_id = $cliente->id;
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

        return redirect()->route('pagar', $pedido);
    }

    public function pagar(Pedido $pedido)
    {
        
        //return $pedido;
        if ($pedido) {

            //creamos el pedido
            return view('frontend.pagar', compact('pedido'));
        }

        return redirect()->route('examenes');
        
    }


   


    /**
     * este metodo recibe 3 posibles respuestas, approved, failure, pending
     */
    public function procesar_pago(Pedido $pedido, Request $request)
    {
       

        $payment_id = $request->payment_id;
        $access_token = config('services.mercadopago.token');

        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id"."?access_token=$access_token");

        $response = json_decode($response);

        if($response)
        {
            $status = $response->status;

            if ($status == 'approved') {


                $pedido->status = 'finalizado';
                $pedido->num_operation = $payment_id;
                $pedido->origin = 'mercadopago';
                $pedido->save();

                return view('frontend.confirmado');
            }elseif($status == 'in_process')
            {
                $pedido->status = 'en_proceso';
                $pedido->num_operation = $payment_id;
                $pedido->origin = 'mercadopago';
                $pedido->save();

                return view('frontend.enproceso');
            }elseif($status == 'rejected')
            {
                $pedido->status = 'rechazado';
                $pedido->num_operation = $payment_id;
                $pedido->origin = 'mercadopago';
                $pedido->save();

                return view('frontend.error');
            }
        }

        //dump($response);

        abort(404);
    }


    public function show(Pedido $pedido)
    {
        return response()->json($pedido);
    }



    // public function error_pedido()
    // {
    //     return view('frontend.error');
    // }
}
