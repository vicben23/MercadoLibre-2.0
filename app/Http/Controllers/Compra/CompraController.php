<?php

namespace App\Http\Controllers\Compra;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
//use App\Openpay;
use Validator;
use Auth;
use Redirect;
use \App\User;
use App\Articulos;
use App\Carrito; 
use Intagono\Openpay\Openpay; 
use App\Direcciones; 

class Foo {

    /**
     * @var \Intagono\Openpay\Openpay
     */
    protected $openpay;

    /**
     * Constructor
     */
    public function __construct(Openpay $openpay)
    {
        $this->openpay = $openpay;
    }

}

class CompraController extends Controller
{
 
    
    public function metodoPago(Request $request)
    {
        return view('confirmarCompra.metodoPago');
    }

    public function compTarjeta(Request $request)
    {
        return view('confirmarCompra.complementarTarjeta');
    }


    public function nuevaTarjetacre(Request $request)
    {
        
        return view('confirmarCompra.nuevaTarjetaCredito');
    }

    public function dondeRecibir(Request $request)
    {
        if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists())
        {
          $domicilio = Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->get();


    	 $urlImagen = $request->idUser."/".$request->idPublicacion; 
         return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilio'=>$domicilio,'urlImagen'=>$urlImagen]);
         }else{
            return view ('confirmarCompra.elegirFormaRecivir');
         } 
    }

    public function aggTarjPrueba(Request $request)
    {
        return view('confirmarCompra.aggTarjPrueba');
    }

    public function guardarCard_custumer(Request $request)
    {  
        $openpayCore = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        if(auth()->user()->idCard==null){
            $customerData = array(
            'external_id' => null,
            'name' => $_POST['name'],
            'last_name' => $_POST['last_name'], 
            'email' => $_POST['email'],
            'phone_number' => $_POST['phone_number'],
            'clabe' => $_POST['card_number'], 
            'requires_account' => true); 
            $customer = $openpayCore->customers->add($customerData);
            User::where('_id', auth()->user()->id)->update(['idCard'=>$customer->id], ['upsert' => true]);
            return "Se agrego el Cliente";
        }else{
            //Agregar Tarjetas
            $cardDataRequest = array(
                'token_id' => $_POST['token_id'],
                'device_session_id' => $_POST['device_session_id']
                );

            $customer = $openpayCore->customers->get(auth()->user()->idCard);
            $card = $customer->cards->add($cardDataRequest);


            return "Se agrego la tarjeta".$card->id;
        }
        /*try {
            $res = $openpayCore->customers->get('aovhl9ks3lmt56t5bdyla');

            return $res->name;  
        } catch (\OpenpayApiTransactionError $e) {
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
                  ' [error code: ' . $e->getErrorCode() . 
                  ', error category: ' . $e->getCategory() . 
                  ', HTTP code: '. $e->getHttpCode() . 
                  ', request ID: ' . $e->getRequestId() . ']', 0);
            return $e->getMessage();

        } catch (\OpenpayApiRequestError $e) {
            error_log('ERROR on the request: ' . $e->getMessage(), 0);
            //Cliente no existe

             
 

        } catch (\OpenpayApiConnectionError $e) {
            error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\OpenpayApiAuthError $e) {
            error_log('ERROR on the authentication: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\OpenpayApiError $e) {
            error_log('ERROR on the API: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } catch (\Exception $e) {
            error_log('Error on the script: ' . $e->getMessage(), 0);
            return $e->getMessage();
        } */
    }

}