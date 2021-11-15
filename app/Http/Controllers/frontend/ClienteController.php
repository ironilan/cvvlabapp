<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Pedidodetalle;
use Auth;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function micuenta(Request $request)
    {

        $user = Auth::user();

        return view('frontend.cliente.micuenta', compact('user'));
    }


    public function setPefil(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type_doc' => 'required',
            'sex' => 'required',
            'num_doc' => 'required',
            'cellphone' => 'required',
            'email' => 'required',
            'country' => 'required',
        ]);

        $perfil = Auth::user();

        if ($request->password) {
            $perfil->password = bcrypt($request->password);
        }

        if ($request->address) {
            $perfil->address = $request->address;
        }

        $perfil->name       = $request->name;
        $perfil->sex        = $request->sex;
        $perfil->type_doc   = $request->type_doc;
        $perfil->num_doc    = $request->num_doc;
        $perfil->num_doc    = $request->num_doc;
        $perfil->cellphone  = $request->cellphone;
        $perfil->email      = $request->email;
        $perfil->country    = $request->country;
        $perfil->save();



        return response()->json($perfil, 200);
    }


    public function detalle_pedido(Request $request)
    {
        $user = Auth::user();
        $pedido = Pedido::where('cliente_id',$user->id)->where('id', $request->id)->first();
        $detalle = [];
        $numpedido = '';
        if ($pedido) {
            $detalle = Pedidodetalle::where('pedido_id', $pedido->id)->get();
            $numpedido = $pedido->id;
        }

        return view('frontend.render.detallePedido', compact('detalle', 'numpedido'));
    }
}
