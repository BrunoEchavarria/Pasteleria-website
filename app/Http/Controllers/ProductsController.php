<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');

        $productos = Producto::where('nombre','like','%'.$buscarpor.'%')->paginate(10);
        return view('components.components.productos', compact('productos', 'buscarpor'));
    }
}
