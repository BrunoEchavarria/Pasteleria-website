<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    public function index(){
        $productos = Producto::paginate(10);
        return view('components.components.productos', compact('productos'));
    }
}
