<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use App\Articulos;

class BuscarController extends Controller
{
    public function buscarPublicaciones(Request $request)
    {
    	if ($request->ajax()) { 
    		$datos = Articulos::where([['titulo', 'like', '%'.$request->consulta.'%'],'estadoPublicacion'=>1])->get(); 
    		$aux="";
    		foreach ($datos as $key => $value) {
    			$aux = $aux."<li><a href='resultados?busqueda=".$request->consulta."&categoria=".$value->categoria."'>".$value->titulo."</a></li>"; 
    		}
    		return $aux;
    	} 
    }
    public function listarResultados(Request $request){

        try {  
            if ($request->ajax()) {
                if (isset($request->orden)) {
                    if ($request->orden == "masRe") {
                        $orden = "";
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->get();
                        if (isset($request->precio)) { 
                            if ($request->precio == "1500-4000") {
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,])->whereBetween('precio', ['1500', '4000'])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->whereBetween('precio', ['1500', '4000'])->get();
                                }
                            }elseif($request->precio == "1500"){ 
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','<',1500]])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','<',1500]])->get();
                                }
                            }elseif($request->precio == "4000"){
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','>',4000]])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','>',4000]])->get();
                                }
                            }
                        }elseif (isset($request->categoria)) {
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->get();
                        }
                    }elseif ($request->orden == "menorPre") {
                        $orden = "asc"; 
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->orderBy('precio', $orden)->get();
                        if (isset($request->precio)) { 
                            if ($request->precio == "1500-4000") {
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,])->whereBetween('precio', ['1500', '4000'])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->whereBetween('precio', ['1500', '4000'])->orderBy('precio', $orden)->get();
                                }
                            }elseif($request->precio == "1500"){ 
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','<',1500]])->orderBy('precio', $orden)->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','<',1500]])->orderBy('precio', $orden)->get();
                                }
                            }elseif($request->precio == "4000"){
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','>',4000]])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','>',4000]])->orderBy('precio', $orden)->get();
                                }
                            }
                        }elseif (isset($request->categoria)) {
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->get();
                        } 
                    }elseif ($request->orden == "mayorPre") {
                        $orden = "dsc"; 
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->orderBy('precio', $orden)->get();
                        if (isset($request->precio)) { 
                            if ($request->precio == "1500-4000") {
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,])->whereBetween('precio', ['1500', '4000'])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->whereBetween('precio', ['1500', '4000'])->orderBy('precio', $orden)->get();
                                }
                            }elseif($request->precio == "1500"){ 
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','<',1500]])->orderBy('precio', $orden)->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','<',1500]])->orderBy('precio', $orden)->get();
                                }
                            }elseif($request->precio == "4000"){
                                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','>',4000]])->get();
                                if (isset($request->categoria)) {
                                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria,['precio','>',4000]])->orderBy('precio', $orden)->get();
                                }
                            }
                        }elseif (isset($request->categoria)) {
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,'categoria'=>$request->categoria])->orderBy('precio', $orden)->get();
                        } 
                    } 
                    return response()->json([
                    "articulos" => $datos
                ]);
                }else{
                    return response()->json([
                    "res" => "mal"
                ]);
                }
                
            }else{
                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->get(); 
            }
            
            $totalResul = count($datos);
            return view('listarResultados')->with('datos',$datos)->with(['total'=>$totalResul,'busqueda'=>$request->busqueda]);
 
        } catch (Exception $e) {
            return "Error en la consulta de productos";
        }
        //return $request->busqueda;
        
    }
}
