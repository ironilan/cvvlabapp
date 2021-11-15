<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Banner;
use App\Models\Examen;
use App\Models\Tipomuestra;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $promociones = Examen::whereTipo('promocion')->latest('id')->paginate(10);
        $banners = Banner::all();
        return view('welcome', compact('promociones', 'banners'));
    }


    public function examenes()
    {
        $areas = Area::all();
        $tipos = Tipomuestra::all();

        //Cart::destroy();

        return view('frontend.examenes', compact('areas', 'tipos'));
    }

    public function getExamenes(Request $request)
    {
        $area = $request->area;
        $tipo = $request->tipo;
        $criterio = $request->criterio;
        $examenes = Examen::whereTipo('examen');
        if ($tipo > 0) {
            $examenes = $examenes->where('tipomuestra_id', $tipo);
        }

        if ($area > 0) {
            $examenes = $examenes->where('area_id', $area);
        }

        if ($criterio != '') {
            $examenes = $examenes->where('title', 'like','%'.$criterio.'%');

        }

        //dd($criterio);

        $viewButton = true;
        $examenes = $examenes->latest('id')->paginate(10);
        
        //return response()->json($examenes);
        return view('frontend.render.examenes', compact('examenes', 'viewButton'));
    }


    public function setCartExamen(Request $request)
    {
        $this->validate($request, [
            'examen' => 'required|numeric'
        ]);


        $examen = Examen::find($request->examen);
        $data = [];
        $viewButton = true;

        if ($examen) {
            // code...
            if (count(Cart::content()) > 0) {
                Cart::add($examen->id, $examen->title, 1, $examen->price, ['reserva' => []], 0);
                
                foreach (Cart::content() as $key => $cart) {
                    
                    if ($cart->id == $request->examen) {
                        
                        Cart::update($cart->rowId, 1);
                    }
                }
            }else{
                
                Cart::add($examen->id, $examen->title, 1, $examen->price, ['reserva' => []], 0);
                //dd('entro en sin cart');
            }

            
            $data = Cart::content();
            
            
        }

        //return response()->json($data);
        return view('frontend.components.cotizador', compact('data', 'viewButton'));
    }


    public function nosotros()
    {
        
        
        return view('frontend.nosotros');
    }

    public function promociones()
    {
        $viewButton = true;
        $promociones = Examen::whereTipo('promocion')->latest('id')->paginate(10);
        return view('frontend.promociones', compact('promociones', 'viewButton'));
    }




    public function reservar()
    {
        $viewButton = false;
        if (count(Cart::content()) > 0) {
            return view('frontend.reservar', compact('viewButton'));
        }

        return redirect()->route('examenes');
    }

    
    

    


    public function contacto()
    {
        
        return view('frontend.contacto');
    }


    public function contacto_send(Request $request)
    {

    }



    public function selectFecha(Request $request)
    {
        $this->validate($request, [
            'fecha' => 'required'
        ]);

        $cart = Session::put('fecha', $request->fecha);

        return response()->json(['msj' => 'guardado en cart'], 200);
    }

    public function selectHora(Request $request)
    {
        $this->validate($request, [
            'hora' => 'required'
        ]);

        $viewButton = false;

        $hora = Session::put('hora', $request->hora);

        $fecha = Session::get('fecha');

        if ($fecha != '') {
            $viewButton = true;
        }

        return response()->json($viewButton, 200);
    }


    public function getCompra()
    {
        $cart = Cart::content();
        $fecha = Session::get('fecha');
        $hora = Session::get('hora');

        $compra = [
            'cart' => $cart,
            'fecha' => Carbon::parse($fecha)->format('d/m/Y'),
            'hora' => $hora,
            'viewButton' => false,
        ];

        return view('frontend.components.detalleCompra', compact('compra'));
    }


    public function terminos(Request $request)
    {
        return view('frontend.terminos');
    }
}
