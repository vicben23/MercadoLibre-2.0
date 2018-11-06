<!DOCTYPE html>
<html>
<head>
	<title>Mercado Libre 2.0</title> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}  
</head>
<body>
	<header role="banner" id="cabecera_principal">
		<div class="nav_registro"> 
			<div class="col-1">
				<a  href="{{ route('dashboard') }}">  
					<div class="nav-logo">
					
					</div>
				</a> 
			</div>
			@if(isset(auth()->user()->nombre))
				<div class="col-2 cont_info_user" style="padding: 15px;width: 20%;"> 
					<div class="col-md-8" style="padding: 0px;    text-align: right;">
						<label id="nombre_user" for="nav-header-user-switch" style="font-weight:normal !important;text-transform: uppercase;font-size: 11px;">
							{{auth()->user()->alias}}
							
						</label>
					</div>
					<div class="col-md-3" style="padding: 0px;padding-top: 2px;border-right: 1px solid #ccc;">
						<img src="img/user_icon.png" alt="" width="15" height="15" style="    vertical-align: initial;">	
					</div>
					<div class="col-md-1" style="padding: 0px;padding-left: 15px;">
						<img src="img/icon_help.png" alt="" width="20" height="20">	
					</div> 
				</div>	
			@else
				<div class="col-2"> 				 		
					<a tabindex="4" class="option-help" href="#">Ayuda</a> 
				</div>	
			@endif 
		</div>
	</header>
	
		@yield('content')

	<footer id="pie_pagina"> 
		<div class="politicas-pie" >
			<div class="col-md-12">
			<a style="margin-left: 0px;" href="" title="">Trabaja con nosotros</a>
			<a href="" title="">Términos y condiciones</a>
			<a href="" title="">Politicas de privacidad</a>
			<a href="" title="">Ayuda</a> 
			</div>
			<div class="col-md-12">
				<small class="nav-footer-copyright"> 
					Copyright © 1999-2018 DeRemate.com de México S. de R.L. de C.V. 
			</small>  
			</div>
			 	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
				{!! Html::script('js/bootstrap.min.js') !!}  
				{!! Html::script('js/operaciones.js') !!}  
				{!! Html::script('js/script.js') !!}  
				{!! Html::script('js/ubicacion.js') !!} 
				{!! Html::script('js/menusFlotantes.js') !!}
				{!! Html::script('js/modificarPublicacion.js') !!}
				{!! Html::script('js/editCarrito.js') !!}
				{!! Html::script('js/venderJS.js') !!} 
				{!! Html::script('js/validaciones.js') !!}
				{!! Html::script('js/formatearPrecio.js') !!}
		</div> 
	</footer> 
</body>
</html>