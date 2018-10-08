<!DOCTYPE html>
<html>
<head>
	<title>Regístrate en Mercado Libre</title>
	<meta charset="utf-8">
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
			<div class="col-2"> 				 		
					<a tabindex="4" class="option-help" href="#">Ayuda</a> 
			</div>	
		</div>
	</header>
	<main class="col-md-12" style="    font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;    font-size: 16px;    font-weight: 300;    line-height: 1.35;
    -webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0,0,0,.1);height: auto;">
		@yield('content')
	</main>
	
	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
	{!! Html::script('js/bootstrap.min.js') !!}   
	{!! Html::script('js/script.js') !!}  
	{!! Html::script('js/validaciones.js') !!}  

</body>
</html>