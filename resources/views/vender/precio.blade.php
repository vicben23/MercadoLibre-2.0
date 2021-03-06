@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    <div style="" class="cont-ruta" style="width: 100%z">
        <ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
            <li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8" style="background: #F0F0F0;"><span data-reactid="9"><a href="{{ route('categorias') }}" style="background: #F0F0F0;">Elige qué quieres publicar</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="10" style="background: #F0F0F0;"><span data-reactid="11"><a href="{{route('backdescripcion')}}" title="">Describe tu producto</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13" style="font-weight: 700;color: #333;border-bottom: 0;">Ingrese un precio</span></li>
            <li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
        </ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="form_precio" action="{{route('confirmarventa')}}"> 
                {{ csrf_field() }}
                    <div class="row col-md-12" style="text-align: left;">
                        <fieldset id="upload_form">
                            <legend>Tipo de venta</legend>
                            <span class="ch-form-hint">*Datos obligatorios</span>

                            <div class="col-md-12" style="padding-left: 6%;padding-top: 1%;">
                                <div class="col-md-4">
                                    <label class="font-min">Precio:*</label>
                                    <select name="moneda" id="moneda">
                                        <option value="pesos">$&nbsp;&nbsp;&nbsp;</option>
                                        <option value="dolares">U$S</option> 
                                    </select>
                                    <input type="number" name="precio" id="precio" style="position: absolute;margin-top: -2%;margin-left: 1%;
    width: 40%;">
                                </div>
                            </div>

                        </fieldset>                    
                    </div>     
                    <input type="hidden" name="videoURL" id="videoURL" value="{{$objectArticulo->videoURL}}">
                    <input type="hidden" name="marca" id="marca" value="{{$objectArticulo->marca}}">
                    <input type="hidden" name="categoria" id="categoria" value="{{$objectArticulo->categoria}}">
                    <input type="hidden" name="estado" id="estado" value="{{$objectArticulo->estado}}">
                    <input type="hidden" name="municipio" id="municipio" value="{{$objectArticulo->municipio}}">
                    <input type="hidden" name="colonia" id="colonia" value="{{$objectArticulo->colonia}}">
                    <input type="hidden" name="telefono" id="telefono" value="{{$objectArticulo->telefono}}">
                    <input type="hidden" name="modelo" id="modelo" value="{{$objectArticulo->modelo}}">
                    <input type="hidden" name="anio" id="anio" value="{{$objectArticulo->anio}}">
                    <input type="hidden" name="tipo" id="tipo" value="{{$objectArticulo->tipo}}">
                    <input type="hidden" name="numPuertas" id="numPuertas" value="{{$objectArticulo->numPuertas}}">
                    <input type="hidden" name="kilometros" id="kilometros" value="{{$objectArticulo->kilometros}}">
                    <input type="hidden" name="titulo" id="titulo" value="{{$objectArticulo->titulo}}">
                    <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$objectArticulo->idPublicacion}}">
                    <input type="hidden" name="descripcion" id="descripcion" value="{{$objectArticulo->descripcion}}">
                    <input type="hidden" name="horarioContacto" id="horarioContacto" value="{{$objectArticulo->horarioContacto}}">
                    <input type="hidden" name="color" id="color" value="{{$objectArticulo->color}}">
                    <input type="hidden" name="tipoCombustible" id="tipoCombustible" value="{{$objectArticulo->tipoCombustible}}">
                    <input type="hidden" name="motor" id="motor" value="{{$objectArticulo->motor}}">
                    <input type="hidden" name="direccionAuto" id="direccionAuto" value="{{$objectArticulo->direccionAuto}}">
                    <input type="hidden" name="transmicion" id="transmicion" value="{{$objectArticulo->transmicion}}">
                    <input type="hidden" name="version" id="version" value="{{$objectArticulo->version}}"> 
                    <input type="hidden" name="arrayCaracteristicas" id="arrayCaracteristicas" value="{{$objectArticulo->arrayCaracteristicas}}">

                    <div class="row col-md-12" id="footer-descripcion"> 
                        <input type="submit"  class="btn-azul" name="btnContinuarPrecio" id="btnContinuarPrecio" value="Continuar" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                        <a href="javascript:window.history.back();" title="">Volver</a>
                    </div>
                </form>
            </div>
    </div> 
</div> 
 <!-- Modal -->
  <div class="modal fade in" id="modalMsjPago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 46%;height: auto;">
      <div class="modal-content" style="margin: 30% auto;">
        <div class="modal-header" style="border-bottom: 0px;padding-bottom:0px;">
          <img src="../img/reservation-icon_medium.png" alt="">
          <h1 style="font-size: 20px;padding: 20px;" class="modal-title"><b>Te lo pueden apartar por $ 1500</b></h1>
        </div>
        <div class="modal-body" style="border-bottom: 0px;padding: 0px 50px 30px;">
            <p>Te pagan una parte del precio y acuerdas el resto del pago. Cuando el comprador nos confirme la entrega, tendrás el dinero disponible en tu <a href="#">cuenta de Mercado Pago</a>.</p>

            <p style="margin:15px 0 20px;">Es sin costo y <b>cada apartado exitoso te posiciona mejor en los listados</b>.</p>

            <input type="submit"  class="btn-azul" name="btnEntendi" id="btnEntendi" value="Entendí" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<footer role="contentinfo" class="nav-footer" style="    margin-top: 5rem;">
    <div class="nav-bounds">
        <div class="nav-footer-info-wrapper">
            <div class="nav-footer-primaryinfo">
                <small class="nav-footer-copyright">Copyright ©&nbsp;1999-2018 DeRemate.com de México S. de R.L. de C.V.</small>
                <nav class="nav-footer-navigation">
                    <a href="http://www.mercadolibre.com/empleos">Trabaja con nosotros</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/terminos-y-condiciones-uso-del-sitio_2090">Términos y condiciones</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/Aviso-de-privacidad_1167">Políticas de privacidad</a><a href="https://www.mercadolibre.com.mx/ayuda">Ayuda</a>
                </nav>
            </div>
        </div> 
    </div>
</footer>
@stop