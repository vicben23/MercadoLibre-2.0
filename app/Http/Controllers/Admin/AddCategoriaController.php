<?php

namespace App\Http\Controllers\Admin;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use \App\Ventas;
use \Crypt;

class AddCategoriaController extends Controller
{
    public function index(){
    	return view('admin.addcategoria');
    }
    public function create(Request $request)
    {
    	if ($request->ajax()) { 
    		if ($request->venta == 0) {
    			$tipoVenta = "vehiculos";
    		}elseif ($request->venta == 1) {
    			$tipoVenta = "inmuebles";
    		}elseif ($request->venta == 2) {
    			$tipoVenta = "servicios";
    		}elseif($request->venta == 3){
    			$tipoVenta = "productos";
    		}

    		if(Ventas::where('tipo', $tipoVenta)->push('categorias', ['categoria'=>$request->nombreCategoria], true)){
    			return response()->json([
                    "res" => 1,
                    "nombre" => $request->nombreCategoria
                ]); 
    		}else{
    			return response()->json([
                    "res" => 0,
                    "nombre" => $request->nombreCategoria
                ]); 
    		}
    		
    		/*if(!Ventas::where('tipo', '=', $request->nombreCategoria)->exists()){ 
                $Venta = new Ventas;
                $Venta->tipo = $request->nombreCategoria; 
                $Venta->save();  
                return response()->json([
                    "res" => 1,
                    "nombre" => $request->nombreCategoria
                ]); 
            }else{
                return response()->json([
                    "res" => 0,
                    "nombre" => $request->nombreCategoria
                ]);
            }*/
        }
    }

    public function addMarca(Request $request)
    {
    	if ($request->ajax()) { 

    		if ($request->tipoVenta == 0) {
    			$tipoVenta = "vehiculos";
    		}elseif ($request->tipoVenta == 1) {
    			$tipoVenta = "inmuebles";
    		}elseif ($request->tipoVenta == 2) {
    			$tipoVenta = "servicios";
    		}elseif($request->tipoVenta == 3){
    			$tipoVenta = "productos";
    		}

    		//return $request->tipoVenta."/".$request->categoria."/".$request->nombreMarca."/".$tipoVenta;

    		if(Ventas::where(['tipo' => $tipoVenta, 'categorias.categoria'=>$request->categoria])->push('categorias.marcas', ['marca'=>$request->nombreMarca], true)){
    			return response()->json([
                    "res" => 1,
                    "nombre" => $request->nombreMarca
                ]); 
    		}else{
    			return response()->json([
                    "res" => 0,
                    "nombre" => $request->nombreMarca
                ]); 
    		}
        }
    }

    public function show(Request $request)
    {
    	if ($request->ajax()) { 
    		if ($request->tipoVenta==0) 
    			$tipoVenta = 'vehiculos';
    		elseif ($request->tipoVenta==1) 
    			$tipoVenta = 'inmuebles';
    		elseif ($request->tipoVenta==2)
    			$tipoVenta = 'servicios';
    		elseif ($request->tipoVenta==3)
    			$tipoVenta='productos';

    		$categorias = Ventas::where('tipo', '=', $tipoVenta)->get(['categorias']);
    		if ($categorias != "[]") {
    			return $categorias->get(0);
    		}else {
    			return response()->json([
                    "res" => 1
                ]); 
    		}
    		
			//return $ventas;
    	}
    }

    public function showMarcas(Request $request)
    {
    	if ($request->ajax()) { 
    		if ($request->tipoVenta==0) 
    			$tipoVenta = 'vehiculos';
    		elseif ($request->tipoVenta==1) 
    			$tipoVenta = 'inmuebles';
    		elseif ($request->tipoVenta==2)
    			$tipoVenta = 'servicios';
    		elseif ($request->tipoVenta==3)
    			$tipoVenta='productos';

    		$marcas = Ventas::where(['tipo'=> $tipoVenta])->get(['categorias']);
    		if ($marcas != "[]") {
    			return $marcas->get(0);
    		}else {
    			return response()->json([
                    "res" => 1
                ]); 
    		} 
    	}
    }

    public function showCategorias(Request $request)
    {
    	if ($request->ajax()) { 
    		if ($request->tipoVenta==0) 
    			$tipoVenta = 'vehiculos';
    		elseif ($request->tipoVenta==1) 
    			$tipoVenta = 'inmuebles';
    		elseif ($request->tipoVenta==2)
    			$tipoVenta = 'servicios';
    		elseif ($request->tipoVenta==3)
    			$tipoVenta='productos';

    		$marcas = Ventas::where(['tipo'=> $tipoVenta])->get(['categorias']);
    		if ($marcas != "[]") {
    			return $marcas->get(0);
    		}else {
    			return response()->json([
                    "res" => 1
                ]); 
    		} 
    	}
    }
}