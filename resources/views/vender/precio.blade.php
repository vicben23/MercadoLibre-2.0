@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    <div style="" class="cont-ruta" style="width: 100%z">
        <ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
            <li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8" style="background: #F0F0F0;"><span data-reactid="9"><a href="{{ URL::previous() }}" style="background: #F0F0F0;">Elige qué quieres publicar</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="10" style="background: #F0F0F0;"><span data-reactid="11"><a href="#" title="">Describe tu producto</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13" style="font-weight: 700;color: #333;border-bottom: 0;">Ingrese un precio</span></li>
            <li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
        </ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="upload_form" enctype="multipart/form-data" action="{{route('precio')}}">  
                    <div class="row col-md-12" style="text-align: left;">
                        <fieldset id="upload_form">
                            <legend>Tipo de venta</legend>
                            <span class="ch-form-hint">*Datos obligatorios</span>

                            <div class="col-md-12" style="padding-left: 6%;padding-top: 1%;">
                                <div class="col-md-4">
                                    <label class="font-min">Precio:*</label>
                                    <select name="">
                                        <option value="">$&nbsp;&nbsp;&nbsp;</option> 
                                    </select>
                                    <input type="tel" name="precio" style="position: absolute;margin-top: -2%;margin-left: 1%;
    width: 40%;">
                                </div>
                            </div>

                        </fieldset>                    
                    </div>     
                    <div class="row col-md-12" id="footer-descripcion">
                        <input style="display: none;" type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
                        <input type="submit"  class="btn-azul" name="des-continuar2" id="btn-continuar2" value="Continuar" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                        <a href="{{ URL::previous() }}" title="">Volver</a>
                    </div>
                </form>
            </div>
    </div> 
</div> 
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