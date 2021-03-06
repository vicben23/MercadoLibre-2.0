<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Session;
use Redirect;
use App\Direcciones;
use App\Carrito; 
use App\User;

class InicioController extends Controller
{
    public function index() {
        if (auth()->check()) {
            if (auth()->user()->userType == 0) {  
                return redirect()->route('adminDashboard');
            }else{
                $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
                return view('dashboard')->with(['direccion'=>$direccion]);
            }
        }else{
            return view('dashboard');
        }
	}

	public function autenticarEmail()
    {
        return view('autenticar.autenticarEmail');
    }

    public function validarPassword(Request $request)
    {
        return view('autenticar.validarPassword')->with('login', $request->input('login')); 
    } 

    public function checkEmail(Request $request)
    {
        if ($request->ajax()) { 

            if(User::where('email', '=', $request->login)->exists() || User::where('alias', '=', $request->login)->exists()){  
                //return redirect()->action('FrontController@index');
                return response()->json([
                    "res" => 200, 
                    "login" => $request->login
                ]);
            }else{  
                return response()->json([
                    "res" => 1, 
                    "msj" => "Revisa tu e-mail o usuario.",
                    "login" => $request->login
                ]);  
            }  
        }else{
            return view('autenticar.validarPassword')->with('login', $request->login); 
        }
    }
}
