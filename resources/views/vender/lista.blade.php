@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/listStyle.css') !!} 
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;
    border: 1px solid #e2e2e2;
    border-radius: 5px; ">

    <div style="">
    	<ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
    		<li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8"><span data-reactid="9" style="font-weight: 700;
    	color: #333;">Elige qué quieres publicar</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="10"><span data-reactid="11">Describe tu producto</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13">Ingresa precio y cantidad</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
    	</ol>
    </div>
    <div style="position: relative;">
        <nav class="hub-nav" style="    border-collapse: separate;
    border-spacing: 1em;
    max-width: 841px;
    margin: 55px auto 0;
    overflow: auto;">
            <form id="ven_mot" class="hub-card syi-hub__image--mot" action="{{route('vehiculos')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <button id="btn_ven_mot" type="submit" form="MOTORS">
                    <span class="hub-car-titulo">Vehículos</span>
                    <span class="syi-hub__image syi-hub__image--mot"> </span></button>
            </form> 
            <form id="ven_res" class="hub-card syi-hub__image--res" action="" method="post" accept-charset="utf-8">
                <button type="submit" form="REAL_ESTATE" data-reactid="23">
                    <span class="hub-car-titulo" data-reactid="24">Inmuebles</span>
                    <span class="syi-hub__image syi-hub__image--res" data-reactid="25"> </span></button>
            </form>
            <form id="ven_srv" class="hub-card syi-hub__image--srv" action="" method="post" accept-charset="utf-8">
                <button type="submit" form="SERVICES" data-reactid="27">
                    <span class="hub-car-titulo" data-reactid="28">Servicios</span>
                    <span class="syi-hub__image syi-hub__image--srv" data-reactid="29"> </span></button>
            </form>
            <div id="ve_mas" class="hub-card " style="color: #5cb85c;">
                <div>
                    <span class="syi-hub__title" data-reactid="32">Productos y otros</span>
                    <span class="syi-hub__image syi-hub__image--mas" data-reactid="33"> </span>
                </div>
                <form action="" method="post" accept-charset="utf-8">
                     
                </form>
            </div>
        </nav>
    </div>
   <p class="syi-terms-conditions" data-reactid="39">Asegúrate de que tu publicación cumpla con las <a href="https://ayuda.mercadolibre.com.mx/ayuda/Politicas-de-Publicacion_1011" target="_blank">Políticas de Mercado Libre</a>.</p> 
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