<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Enlace;
use App\Models\Noticia;
use App\Models\Subcategoria;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{

	public function show_categoria(Categoria $categoria)
	{
        
        if ($categoria->slug == 'enlaces') {
            $enlaces = Enlace::where('categoria_id', $categoria->id)->orderBy('sort_order', 'asc')->paginate(12);
            return view('frontend.temas.enlaces', compact('enlaces', 'categoria'));
        }elseif($categoria->slug == 'noticias-juridicas'){
            $noticias = Noticia::where('categoria_id', $categoria->id)->paginate(12);
            return view('frontend.temas.noticias', compact('noticias', 'categoria'));
        }else{
            $subcategorias = Subcategoria::where('categoria_id', $categoria->id)->paginate(12);
           return view('frontend.temas.show_categoria', compact('subcategorias', 'categoria')); 
        }		
		
	}


    public function show_subcategoria(Subcategoria $subcategoria)
    {
    	$temas = Tema::where('subcategoria_id', $subcategoria->id)->paginate(12);
		return view('frontend.temas.index', compact('temas', 'subcategoria'));
    }
}
