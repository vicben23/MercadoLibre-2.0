<header role="banner" class="nav-header" data-siteid="MLM">
		<div class="nav-bounds nav-bounds-with-cart  nav-bounds-with-cp"> 
			<a class="nav-logo" href="{{route('dashboard')}}">
				Mercado Libre México - Donde comprar y vender de todo
			</a> 
			<div class="nav-header-menu-wrapper">
				<nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-logged"> 
					<div id="nav-header-menu-mobile-content">  
						<div id="nav-header-menu-mobile-user-info" class="nav-header-menu-mobile-with-loyalty">
						    <form id="nav-header-mobile-avatar-form" method="POST" action="https://www.mercadolibre.com.mx/menu/user/picture" enctype="multipart/form-data">
						        <label for="nav-header-mobile-avatar-upload">
						            
						                <svg viewBox="0 0 100 100">
						                    <path stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
						                    <path class="nav-header-mobile-loyalty-level-1" stroke-linecap="round" stroke-width="3" stroke-dasharray="223,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
						                </svg> 

									<img id="nav-header-mobile-user-avatar" class="" src="css/estado/754093-MLA28045465991_082018-S.jpg" srcset="https://mla-s2-p.mlstatic.com/754093-MLA28045465991_082018-G.jpg 2x" width="20" height="20">

						            <input id="nav-header-mobile-avatar-upload" name="file" type="file" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
						        </label>
						    </form>
						    <div id="nav-header-user-greetings">¡Hola, {{auth()->user()->nombre}}!</div>
						    <div id="nav-header-user-mail-or-level">Nivel 1 - Inicial</div> 
						</div> 
				        <ul> 
		                    <li>
		                        <a href="{{route('estado')}}">
		                            <i class="nav-icon-my-account-mobile"></i>
		                            <p>
		                                Mi cuenta
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-points-mobile"></i>
		                            <p>
		                                Mercado Puntos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="{{route('historialComp')}}">
		                            <i class="nav-icon-purchases-mobile"></i>
		                            <p>
		                                Tus compras
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-notifications-mobile"></i>
		                            <p>
		                                Notificaciones
		                                
		                                    <span class="nav-header-notifications-badge"></span>
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-bookmarks-mobile"></i>
		                            <p>
		                                Favoritos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-history-mobile"></i>
		                            <p>
		                                Tu historial
		                                
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-categories-mobile"></i>
		                            <p>
		                                Categorías 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-points-discounts-mobile"></i>
		                            <p>
		                                Descuentos Mercado Puntos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-supermercado"></i>
		                            <p>
		                                Supermercado 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-stores-mobile"></i>
		                            <p>
		                                Tiendas oficiales 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-deals-mobile"></i>
		                            <p>
		                                Ofertas de la semana 
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="{{route('vender')}}">
		                            <i class="nav-icon-vender-mobile"></i>
		                            <p>
		                                Vender
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-help-mobile"></i>
		                            <p>
		                                Ayuda
		                                
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="https://www.mercadolibre.com.mx/gz/app" id="nav-header-menu-download-mobile" data-os="">
		                            <i class="nav-icon-download-mobile"></i>
		                            <p>
		                                ¡Compra y vende con la app!
		                                
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
					</div> 
				</nav> 
				<label for="nav-header-menu-switch" aria-controls="nav-header-menu">
					<span class="hamburger-top-bread"></span>
					<span class="hamburger-patty"></span>
					<span class="hamburger-bottom-bread"></span>
				</label> 
				<nav id="nav-header-menu">  	
				    <div class="nav-header-user"> 
				        <label for="nav-header-user-switch">
				        	<span class="nav-header-avatar-user" data-js="user-menu:nav-header-avatar-user">
				        		<img id="" class="nav-header-avatar-user-img" src="css/estado/754093-MLA28045465991_082018-S.jpg" srcset="https://mla-s2-p.mlstatic.com/754093-MLA28045465991_082018-G.jpg 2x" width="20" height="20">
				        	</span>
				        	<span class="nav-header-username">{{auth()->user()->nombre}}</span>
				        	<span class="nav-header-username-chevron"></span>
				        </label>
				        <input type="checkbox" id="nav-header-user-switch">
				        <nav class="nav-header-user-layer"> 
				            <a tabindex="2" class="option-my-account" href="{{route('estado')}}" rel="nofollow">Mi cuenta</a> 
				                <a tabindex="3" class="nav-header-user-layer-logout" href="{{route('logout')}}" rel="nofollow">Salir 
				                </a> 
				        </nav>
				    </div> 
					<a href="{{route('historialComp')}}" class="option-purchases">Compras</a> 
					<a tabindex="5" href="#" class="option-bookmarks bookmarks-widget modeless-box-trigger" rel="nofollow" aria-owns="modeless-44" aria-haspopup="true" popup-hidden="true"><span class="bookmarks-text">Favoritos</span></a> 
					<a tabindex="4" href="#" id="notiLink" class="option-notifications notifications-widget modeless-box-trigger" rel="nofollow" aria-owns="modeless-94" aria-haspopup="true" popup-hidden="true"><i class="nav-icon-notifications"><span>Notificaciones</span></i><span class="ml-count" style="display: none">0</span></a> 
					<a tabindex="6" href="https://vender.mercadolibre.com.mx/" rel="nofollow" class="option-sell nav-header-btn-pub">Vender</a> 
				</nav> 
					<!-- Cuando el carrito esta vacio debe tener la clase "nav-cart-empty", cuando esta lleno "nav-cart-full" -->
				<a href="{{route('carrito')}}" title="Carrito de compras" class="nav-cart nav-cart-empty" id="nav-cart"><i class="nav-icon-cart"></i><span class="nav-icon-cart-quantity"><b>null</b></span></a> 
				</div> 
				<a href="#" class="nav-header-cp-anchor"> 
						Enviar a {{$direccion[0]->contacto}} CP {{$direccion[0]->codigopostal}} 
				</a> 
				<form class="nav-search" action="{{route('resultados')}}" method="GET" role="search" id="buscador-articulos">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<input value="" tabindex="1" type="text" class="nav-search-input" name="busqueda" max-length="120" autocapitalize="off" autocorrect="off" spellcheck="false" autocomplete="off" placeholder="Buscar productos, marcas y más..." id="caja_busqueda">

					<button class="nav-search-clear-btn" type="button" title="menu.autocomplete.clear"></button>
					<button class="nav-search-close-btn" type="button" title="menu.autocomplete.close"></button>


					<button type="submit" class="nav-search-btn">
						<i class="nav-icon-search"><span>Buscar</span></i>
					</button>
				</form>
				<div id="resultados" style="z-index: 122222;display: none;border-top: 1px solid #e6e6e6;border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;">
					<ul id="cont-resultado"></ul>
				</div>  
			    <div class="nav-menu"> 
			        <div>
			            <ul class="nav-menu-list"> 
			                <li class="nav-menu-item">
			                    <a class="nav-menu-cp nav-menu-cp-logged" href="#"> 
			                            <span class="nav-menu-cp-send">Enviar a {{$direccion[0]->contacto}}</span> 
			                        <span class="nav-menu-link-cp"> 
			                                CP {{$direccion[0]->codigopostal}}
			                            
			                        </span> 
			                    </a>
								
			                </li> 
			                <li class="nav-menu-categories">
			                    <a href="#" class="nav-menu-categories-link" rel="nofollow" data-js="nav-menu-categories-trigger">Categorías</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Historial</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Descuentos exclusivos</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ofertas de la semana</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="{{route('vender')}}" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Vender</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ayuda</a>
			                </li> 
			            </ul>
			        </div>
			        
			    </div> 
				<a href="https://www.mercadolibre.com.mx/tutoriales" class="exhibitor__picture">
					<img src="css/estado/mlm-menu-desktop-notification-picture-bac19f68-93e0-419d-b07c-eec78d1ab4e2.png" title="Tutoriales">
				</a> 
			</div>
		</header> 