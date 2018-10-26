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
                    }elseif ($request->orden == "menorPre") {
                        $orden = "asc";
                    }elseif ($request->orden == "mayorPre") {
                        $orden = "dsc";
                    }

                    $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->orderBy('precio', $orden)->get();
                    if (isset($request->precio)) {
                        if ($request->precio == "1500-4000") {
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,])->whereBetween('precio', ['1500', '4000'])->orderBy('precio', $orden)->get();
                        }elseif($request->precio == "1500"){ 
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','<',1500]])->orderBy('precio', $orden)->get();
                        }elseif($request->precio == "4000"){
                            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,['precio','>',4000]])->orderBy('precio', $orden)->get();
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
                
            }
            if (isset($_GET['ORDEN'])) {
                switch ($_GET['ORDEN']) {
                    case 'ASC':
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->orderBy('precio', 'asc')->get(); 
                        break;
                    case 'DSC':
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->orderBy('precio', 'dsc')->get(); 
                        break;
                    default:
                        $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->get(); 
                        break;
                }
            }else if(isset($_GET['precio_rango'])){
                $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1,])->get(); 
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
