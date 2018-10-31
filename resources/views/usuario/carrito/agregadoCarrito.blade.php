@extends('layouts.master')

@section('content')
{!! Html::style('css/styleAgregado.css') !!}

<div class="cart-congrats__box-container"> 
<div class="cart-congrats__box">
	<div class="cart-congrats cart-congrats__box-inner">
		<div class="item cart-congrats__item clearfix cart-congrats__item--one">
			
				<figure class="cart-congrats__item-image">
					<img src="/MercadoLibre-2.0/public/images/{{$urlImagen}}/principal.jpg" alt="" title="" >
					
						<span class="cart-congrats__item-icon">
							<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ui-icon-check">
	<g id="Page-X-presentacion" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g id="x-de-carrito---Desktop-1-prod-Copy-15" transform="translate(-150.000000, -142.000000)">
			<g id="Group-2-Copy" transform="translate(0.000000, 100.000000)">
				<g id="icon-check-big-copy-5" transform="translate(150.000000, 42.000000)">
					<g id="icon-check-big">
						<circle id="Combined-Shape" fill="#00a650" cx="8" cy="8" r="8"></circle>
						<polygon id="Combined-Shape" fill="#FFFFFF" points="6.99999464 9.47808683 5.17777603 7.62115929 4.26666667 8.54962312 6.99999464 11.3350145 12.0110958 6.22846383 11.0999864 5.3"></polygon>
					</g>
				</g>
			</g>
		</g>
	</g>
</svg>

						</span>
					
				</figure>
			

			

			<div class="cart-congrats__information">
				<h2 class="cart-congrats__title">
					
					Agregaste a tu carrito
				</h2>
				<p class="cart-congrats__item-title">{{$titulo}}</p>
			</div>
		</div>

		<div class="cart-congrats__info">
			<div class="cart-congrats__info-primary">
				<p class="cart-congrats__text">
					1 producto en tu carrito:
					<span class="cart-congrats__price">
						<span class="price-tag-symbol">$</span>
						<span class="price-tag-fraction">{{$precio}}.</span>
						<span class="price-tag-cents">00</span>
						</span></p><ul class="cart-congrats__item-list">
							
								<li>
									<figure class="item__image item__image--centered item__image--circular item__image--dimmer cart-congrats__item-image">
										<img src="https://http2.mlstatic.com/D_Q_NP_740327-MLM26410093626_112017-AE.webp" alt="" title="" data-srcset="https://http2.mlstatic.com/D_Q_NP_2X_740327-MLM26410093626_112017-AE.webp" srcset="https://http2.mlstatic.com/D_Q_NP_2X_740327-MLM26410093626_112017-AE.webp">
									</figure>
								</li>
							
							
						</ul>
					

					
					
						<span class="cart-congrats__shipping-label cart-congrats__shipping-label--free">¡Envío gratis!</span>
					
				<p></p>

			</div>
			

	<div class="cart-congrats__actions">
		<a href="/gz/cart" class="ui-button ui-button--primary">Ver carrito</a>
		<a href="/gz/checkout/cart/buy?items=MLM577001157-Q1-VAR18596584220&amp;destination_type=address_id&amp;destination_value=902260096&amp;unchecked=false&amp;context=item_add" data-summary="buy-action" class="ui-button ui-button--secondary">Comprar carrito</a>
	</div>


		</div>
	</div>
</div>


	
	


		</div>


@stop
