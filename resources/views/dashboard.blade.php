@extends('layouts.master')

@section('content') 
	{!! Html::script('js/flickity.pkgd.js') !!} 
	{!! Html::style('css/flickity.css') !!} 
	{!! Html::style('css/carrucel.css') !!} 

	<div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
		<div class="gallery-cell padre"><img src="img/mlm_ropa.jpg" alt=""></div>
		<div class="gallery-cell padre"><img src="img/mlm_navidad.jpg" alt=""></div>
		<div class="gallery-cell padre"><img src="img/mlm_muebles.jpg" alt=""></div>
		<div class="gallery-cell padre"><img src="img/mlm_movil.jpg" alt=""></div>
		<div class="gallery-cell padre"><img src="img/mlm_brujas.jpg" alt=""></div>
	</div>
	<section class="payment-data MLM" type="payment-data MLM">
		<div>
			<a href="/gz/home/payments/methods" class="payment-data-container">
				<div class="payment-data-group payment-data-group-normal">
					<div class="payment-data-section payment-data-section-normal">
						<div class="payment-data-icon">
							<img style="margin-left: 50px;" alt="" src="https://http2.mlstatic.com/resources/frontend/homes-korriban/assets/images/payments/credit-card.svg">
						</div>
						<div class="payment-data-title">Paga en hasta 12 MSI</div>
						<div class="payment-data-subtitle">
							<div class="ui-link">Ver más</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</section>
	<section style="height: 500px;">
		
	</section>
@stop
