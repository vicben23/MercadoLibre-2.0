@extends('layouts.masterRegistro')

@section('content')  
<style type="text/css" media="screen">
.nav-footer-navigation>a{
        font-size: 12px;
    color: #333;
    font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;
    float: left;
    text-decoration: none !important;
    margin-left: 30px;
}
.nav-footer-primaryinfo>small{ 
    margin-left: 30px;
    color: #999;
    vertical-align: initial;
    position: absolute; 
    display: block;
    width: auto;
    margin-top: 20px;
    line-height: initial;
    font-size: 11px;
}
	li {
        border-bottom: 1px solid;
        border-right: 1px solid;
        border-left-color: #ddd;
        border-right-color: #ddd; 
		width: 25%;
		float: left;
	    position: relative;
	    color: #ccc;
	    text-align: center; 
	    display: block;
	    line-height: 42px;
	    text-align: center;   
    	top: -2px; 

	}
	li:before {
	      border-width: 23px 11px;
    border-top-width: 23px;
    border-right-width: 11px;
    border-bottom-width: 23px;
    border-left-width: 11px;
    border-left-color: #ddd;
 
    border: solid transparent;
    content: " ";
    position: absolute;
    top: -1px;
    right: -24px;
    z-index: 1;
	}
	span {
		font-size: 13px;
		display: block;
	}
    .hub-nav {
        border-collapse: separate;
        border-spacing: 1em;
        max-width: 841px;
        margin: 55px auto 0;
        overflow: auto;
    }
    .hub-card {
        display: block;
        height: 260px;
        float: left;
        text-align: center;
        padding: 0;
        width: 23.5%;
        cursor: pointer;

        background-color: #fff;
        border: 1px solid #dedede;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: .8%;
            margin-right: 0;
    }
    .hub-card>button {
            -webkit-font-smoothing: antialiased;
    padding: 10px;
    }
    .hub-card button {
    padding-bottom: 41px;
            text-align: center;
            background: none;
    border: 0;
    color: inherit;
    cursor: pointer;
    font: inherit;
    line-height: normal;
    overflow: visible;
    width: 100%;
    -webkit-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none; 
    }
    .hub-card .hub-car-titulo {
        font-size: 22px;
    }
    .syi-hub__title {
        font-size: 22px;
        -webkit-font-smoothing: antialiased;
        padding: 10px;
        padding-bottom: 0px;
    }
    .syi-hub__image--mot {
        background-position: -1.9% bottom; 
        color: #f0ad4e;
    }
    .syi-hub__image--res {
        background-position: 33.5% bottom; 
        color: #dd6259;
    }
    .syi-hub__image--srv{
        background-position: 67.5% bottom;
        color: #428bca;
            
    }
    .syi-hub__image--mas{
        background-position: 100% bottom;
        width: 180px;
    } 
    .syi-hub__image {
        background-image: url(img/vender-icono.png); 
        background-repeat: no-repeat;
        background-size: 400%;
        display: block;
        height: 180px;
        margin: 0 auto;
    }
    .syi-terms-conditions {
    color: #999;
    font-size: 12px;
    line-height: 12px;
    margin: 30px 0 20px 20px;
    text-align: left;
}

</style>
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
            <form id="ven_mot" class="hub-card syi-hub__image--mot" action="{{route('vehiculos')}}" method="get">
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