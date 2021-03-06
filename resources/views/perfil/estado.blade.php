@extends('layouts.master')
@section('titulo')
    <title>Resumen - MercadoLibre</title>    
@stop
@section('content')

        

        <div class="menu-myml-ads menu-myml-ads__hide">
            <div class="menu-myml-ads__container menu-myml-ads__container--desktop">
                <div class="menu-myml-ads__container__center">
                    <span class="menu-myml-ads__container__center__text">Publicidad</span>
                    <div id="menu-myml-ads__container__center__block" class="menu-myml-ads__container__center__block menu-myml-ads__container__center__block--border" style="display: none;"><div id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" title="3rd party ad content" name="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border: 0px; vertical-align: bottom;" src="css/estado/saved_resource(3).html"></iframe></div></div>
                </div>
            </div>
        </div>  
        <div class="app-wrapper app-wrapper--menu-expanded app-wrapper--menu-expanded-static"><div class="menu-wrapper"><input type="checkbox" id="myml-menu-toggle" checked="true" disabled=""><nav class="myml-nav" role="complementary"><div class="myml-nav__container"><section class="myml-nav__section myml-nav__section--toggle"><div class="myml-nav__section-heading"><span class="myml-nav__section-icon"><label class="myml-nav__toggle" for="myml-menu-toggle"><span class="myml-nav__ham--top"></span><span class="myml-nav__ham--middle"></span><span class="myml-nav__ham--bottom"></span><span class="myml-nav__ham--cross"></span></label></span><p class="myml-nav__section-title"><span class="myml-nav__user-permalink">Mi cuenta</span><span class="myml-nav__section-subtitle">¡Hola {{auth()->user()->nombre}}!</span></p></div></section><div class="myml-nav__menu"><section class="myml-nav__section  myml-nav__section--active"><a href="{{route('estado')}}" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" data-tooltip="Resumen"><svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 1v12h12V1H1zm0-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm2.5 3.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 6.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 9.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Resumen</p></a></section><section class="myml-nav__section "><a href="{{route('estado')}}" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--billing" data-tooltip="Facturación"><svg viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.523 1h-12v14.22l.395-.428a.5.5 0 0 1 .729-.007l.95.99.94-.988a.5.5 0 0 1 .726.001l.93.988.962-.993a.5.5 0 0 1 .723.005l.93.988.964-.993a.5.5 0 0 1 .73.012l.884.978.982-.994a.5.5 0 0 1 .718.008l.437.46V1zM2.293 15.86l-.902.979a.5.5 0 0 1-.868-.339V.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v16a.5.5 0 0 1-.863.344l-.944-.995-.99 1.003a.5.5 0 0 1-.727-.016l-.88-.974-.957.986a.5.5 0 0 1-.723-.005l-.93-.988-.961.993a.5.5 0 0 1-.724-.005l-.926-.984-.937.985a.5.5 0 0 1-.724.002l-.944-.985zm7.365-6.149c0 .864-.558 1.683-1.926 1.791v.81h-.639v-.801c-.927-.063-1.61-.432-2.07-.945l.513-.693c.351.387.882.738 1.557.819V8.73c-.918-.234-1.88-.567-1.88-1.701 0-.927.764-1.62 1.88-1.701V4.5h.64v.837c.746.072 1.34.36 1.79.819l-.53.666a2.23 2.23 0 0 0-1.26-.657V7.92c.935.252 1.925.594 1.925 1.791zM6.14 6.966c0 .432.414.63.954.783v-1.62c-.576.045-.954.369-.954.837zm1.593 3.726c.738-.081 1.008-.522 1.008-.9 0-.513-.44-.72-1.008-.891v1.791z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Facturación</p></a></section><section class="myml-nav__section "><a href="#" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--reputation" data-tooltip="Reputación"><svg viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.653 7.837L.67 5.854A.5.5 0 0 1 .523 5.5v-5a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.146.354l-1.984 1.983a6.5 6.5 0 1 1-10.74 0zm.63-.784A6.482 6.482 0 0 1 8.023 5c1.87 0 3.555.79 4.74 2.053l1.76-1.76V1h-13v4.293l1.76 1.76zM8.023 17a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm2.286-7.906l.883.812-4.2 4.572-2.41-2.624.883-.811 1.527 1.661 3.317-3.61zM4.023 3.7a.5.5 0 0 1 0-1h8a.5.5 0 0 1 0 1h-8z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Reputación</p></a></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_purchases" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases" data-tooltip="Compras"><svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.466 5.5H2.58l-.933 8H13.4l-.934-8zm-8.443-1v-1a3.5 3.5 0 1 1 7 0v1h2.333l1.167 10h-14l1.167-10h2.333zm1 0h5v-1a2.5 2.5 0 1 0-5 0v1z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Compras</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-favorites" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Favoritos</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-buyer_questions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_quotations" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Cotizaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-purchases" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Compras</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-subscriptions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Suscripciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-auctions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Subastas</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_sales" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales" data-tooltip="Ventas"><svg viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.889 3.893a.498.498 0 0 1 .131.338v2.137c0 .954-.867 1.693-1.9 1.693-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.851.546-1.4.546-.548 0-1.05-.208-1.4-.546-.349.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.4.546C.89 8.061.024 7.322.024 6.368v-1.79l.047-.21 1.516-3.264a.5.5 0 0 1 .449-.29l11.01-.103a.5.5 0 0 1 .455.284l1.389 2.898zm-.869.501l-1.284-2.68-10.376.098-1.337 2.877v1.68c0 .363.387.692.9.692s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .899-.33.899-.693a.5.5 0 1 1 1 0c0 .364.387.693.9.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.899.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .9-.33.9-.693V4.394zm-.555 9.572l.02-6.406a.5.5 0 1 1 1 .003l-.024 7.403H.561V7.462a.5.5 0 0 1 1 0v6.504h11.904zm-9.529-2.551a.5.5 0 0 1 0-1h7.3a.5.5 0 0 1 0 1h-7.3z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-publications" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Publicaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-seller_questions" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-myml_sales" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Ventas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_contacts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Datos de mis interesados</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-advertising" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Campaña de publicidad</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración"><svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.183 9h1.34V5h-1.34c-.07-.2-.15-.39-.24-.59l.94-.95-2.82-2.82-.95.94c-.2-.09-.39-.17-.59-.24V0h-4v1.34c-.2.07-.39.15-.59.24l-.95-.94-2.82 2.82.94.95c-.09.2-.17.39-.24.59H.523v4h1.34c.07.2.15.398.24.59l-.94.95 2.82 2.82.95-.94c.192.09.39.17.59.24V14h4v-1.34c.2-.07.398-.15.59-.24l.95.94 2.82-2.82-.94-.95c.09-.192.17-.39.24-.59zm-.57 1.54l-1.55 1.55-.77-.76-.57.27a4.4 4.4 0 0 1-.5.21l-.6.21v1.08h-2.2V12l-.6-.21a4.4 4.4 0 0 1-.5-.21l-.57-.27-.77.76-1.55-1.53.76-.77-.27-.57a4.4 4.4 0 0 1-.21-.5l-.19-.6h-1.1V5.9h1.1l.21-.6a4.4 4.4 0 0 1 .21-.5l.27-.57-.76-.77 1.53-1.55.77.76.57-.27a4.4 4.4 0 0 1 .5-.21l.6-.19V.9h2.2V2l.6.21c.17.06.338.13.5.21l.57.27.77-.76 1.55 1.55-.76.77.27.57c.08.162.15.33.21.5l.21.6h1.08v2.2h-1.1l-.21.6a4.4 4.4 0 0 1-.21.5l-.27.57.78.75zM7.523 4.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-config" class="myml-nav__section-title">Configuración</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_details" class="myml-nav__menu-item " href="{{route('perfil')}}"><span class="myml-nav__menu-item-text">Mis datos</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-security" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Seguridad</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_emails" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">E-mails</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-search_alerts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Alertas de búsqueda</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-eshop" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">eShop</span></a></div></section></div></div></nav><label class="myml-nav__overlay" for="myml-menu-toggle"></label>
            <script>
                // https://www.npmjs.com/package/decouple
                (function(e){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=e()}else if(typeof define==="function"&&define.amd){define([],e)}else{var n;if(typeof window!=="undefined"){n=window}else if(typeof global!=="undefined"){n=global}else if(typeof self!=="undefined"){n=self}else{n=this}n.decouple=e()}})(function(){var e,n,t;return function i(e,n,t){function r(f,u){if(!n[f]){if(!e[f]){var d=typeof require=="function"&&require;if(!u&&d)return d(f,!0);if(o)return o(f,!0);var a=new Error("Cannot find module '"+f+"'");throw a.code="MODULE_NOT_FOUND",a}var s=n[f]={exports:{}};e[f][0].call(s.exports,function(n){var t=e[f][1][n];return r(t?t:n)},s,s.exports,i,e,n,t)}return n[f].exports}var o=typeof require=="function"&&require;for(var f=0;f<t.length;f++)r(t[f]);return r}({1:[function(e,n,t){"use strict";var i=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}().bind(window);function r(e,n,t){var r,o=false;function f(e){r=e;u()}function u(){if(!o){i(d);o=true}}function d(){t.call(e,r);o=false}e.addEventListener(n,f,false);return f}n.exports=r},{}]},{},[1])(1)});

                (function() {
                    var sectionToggles = document.querySelectorAll('.myml-nav__menu .myml-nav__section-icon');
                    var menuToggleChk = document.querySelector('#myml-menu-toggle');
                    var header = document.querySelector('.nav-header');
                    var appWrapper = document.querySelector('.app-wrapper');
                    var menuWrapper = document.querySelector('.menu-wrapper');
                    var navContainer = document.querySelector('.myml-nav__container');
                    var openByDefault = (document.querySelector('.app-wrapper--menu-expanded')) ? true : false;
                    var toggleClassName = 'app-wrapper--menu-expanded';
                    var inputMenuToggle = document.getElementById('myml-menu-toggle');

                    var brakepoints = {
                    small: '1024',
                    large: '1860'
                    };

                    function fixMenuOnScroll() {
                    var scrollY = window.pageYOffset;
                    var wrapperTop = document.querySelector('.app-wrapper').offsetTop;

                    if (!scrollY) {
                        var d = document, r = d.documentElement, b = d.body;
                        scrollY = r.scrollTop || b.scrollTop || 0;
                    }
                    
                    if (scrollY < wrapperTop) {
                        navContainer.classList.remove('myml-nav__container--active');
                    } else {
                        navContainer.classList.add('myml-nav__container--active');
                    };
                    }

                    function showMenu(){
                    appWrapper.classList.add(toggleClassName);
                    inputMenuToggle.checked = true;
                    inputMenuToggle.disabled = true;
                    }

                    function hideMenu(){
                    appWrapper.classList.remove(toggleClassName);
                    inputMenuToggle.checked = false;
                    inputMenuToggle.disabled = false;
                    }

                    function responsiveMenu() {
                    if (openByDefault) {
                        (window.innerWidth > brakepoints.small) ? showMenu() : hideMenu();
                    } else {
                        (window.innerWidth > brakepoints.large) ? showMenu() : hideMenu();
                    }
                    }

                    !openByDefault && decouple(window, 'scroll', fixMenuOnScroll.bind(this));
                    !openByDefault && fixMenuOnScroll();
                    decouple(window, 'resize', responsiveMenu.bind(this));
                    responsiveMenu();

                    [].forEach.call(sectionToggles, function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var htmlFore = toggle.nextElementSibling.getAttribute('for');
                        var chk = document.querySelector('#' + htmlFore);
                        
                        if (chk) {
                            if (!menuToggleChk.checked) {
                                chk.checked = true;
                            } else {
                                e.preventDefault();
                                chk.checked = !chk.checked;
                            }
                        }
                    });
                    });

                    var tooltipBaseClass = 'myml-nav__menu-tooltip';
                    [].forEach.call(sectionToggles, function(tooltipEl) {
                    var tTimer;
                    tooltipEl.addEventListener('mouseenter', function(e) {
                        if (menuToggleChk.checked) {
                        return;
                        }

                        var trg = e.target;
                        var tooltip = trg.tooltip;
                        if (!tooltip) {
                        var tooltip = document.createElement('div');
                        tooltip.className = tooltipBaseClass;
                        tooltip.innerHTML = trg.getAttribute('data-tooltip');
                        menuWrapper.appendChild(tooltip);
                        trg.tooltip = tooltip;
                        }

                        tTimer = setTimeout(function() {
                        var triggerCoords = e.target.getBoundingClientRect();
                        var left = triggerCoords.right + 2;
                        var top = (parseInt(triggerCoords.top, 10) + parseInt(triggerCoords.bottom, 10)) / 2 - tooltip.offsetHeight / 2;

                        tooltip.style.left = left + 'px';
                        tooltip.style.top = (top + window.scrollY) + 'px';

                        tooltip.classList.add(tooltipBaseClass + '--open');
                        }, 200);
                    });

                    tooltipEl.addEventListener('mouseleave', function(e) {
                        clearTimeout(tTimer);
                        if (e.target.tooltip) {
                        e.target.tooltip.classList.remove(tooltipBaseClass + '--open');
                        setTimeout(function() {
                            if (e.target.tooltip) {
                            menuWrapper.removeChild(e.target.tooltip);
                            e.target.tooltip = null;
                            }
                        }, 200);
                        }
                    });
                    });
                })();
            </script>
        </div><div class="page-wrapper"><div class="page-wrapper__content"> 

<script type="text/javascript"> 
    var jsGlobalModel = {
        bannerPositionAB: 'LEFT'
    };
</script> 
        <section id="listContainer" class="container" data-js="data-container"> 
                <div class="container-column-left" data-js="ml-content-center">
                    <h1 class="myml-title">Resumen</h1> 
                    <span id="quotationsSection"></span>
                    <div class="wrap-container ch-clearfix "> 
<section id="billsSection"> 
</section>  
        <div class="summary-navigation">
            <h2>
                <i class="ch-icon-comments"></i> 
                    Preguntas
            </h2>
            
            <ul class="summary-navigation-list"> 
                    <li> 
                        <div class="summary-navigation-number summary-navigation-number-gray">{{$totalMsjSinResponder}}</div>
                        @if($totalMsjSinResponder>0)
                        <a href="#" title="" style="display: contents;">
                        @endif
                            <p>Que aún no respondiste</p>
                        @if($totalMsjSinResponder>0)
                        </a>
                        @endif
                    </li>
            </ul>
        </div> 

<div class="summary-navigation">
    <h2>
        <div class="ch-icon-publication"></div>
        Publicaciones
    </h2>

    
        <div class="box-information-sc">
            <div class="ch-box-information">
                <p>Simplificamos la organización de tus publicaciones. Ahora las pausadas y finalizadas son inactivas.</p>
            </div>
        </div>

        <ul class="summary-navigation-list summary-navigation-list-sc">
            <li><div class="summary-navigation-number summary-navigation-number-gray">{{$totalPublicacionesActivas}}</div>
                <p>
                    Activas 
                	<a href="{{route('vender')}}">¡Vende gratis tus productos usados!</a> 
                </p>
            </li>

            <li><a class="summary-navigation-link" href="{{route('publicacionesp')}}"><div class="summary-navigation-number ">{{$totalPublicacionesInactivas}}</div>
                <p>Inactivas</p>
            </a></li>

            
        </ul>
    
</div> 
    
        <div class="summary-navigation">
            <h2>
                <div class="ch-icon-operation"></div>
            Operaciones
            </h2>

            <ul class="summary-navigation-list"> 
				<li>
					<div class="summary-navigation-number summary-navigation-number-gray"></div>
					<p>Etiquetas de envío para imprimir</p>
				</li> 
				<li><div class="summary-navigation-number summary-navigation-number-gray">0</div>

					<p>Ventas pendientes de concreción</p>

				</li>  
            </ul>
        </div>
     
        <div class="summary-navigation">
            <h2>
                <span class="ch-icon-calendar"></span>
                Suscripciones
            </h2>
            <ul class="summary-navigation-list">
                
                <li>
                  <p>
                      <span>  Puedes ver y administrar los próximos envíos desde tu <a class="summary-navigation-link" href="#">lista de suscripciones.</a>
                      </span>
                  </p>
                </li>
            </ul>
        </div> 
    
        <section id="statsSales" class="summary-navigation"></section> 

                    </div>
                </div>

                <div class="container-column-right">
                    
                        <section class="loyalty-program-widget loyalty-level-1 ">
    <div class="widget-container">
        <a href="#">
        <h3 class="box-container-title"><p>Mercado Puntos</p></h3>
        <div class="user-avatar">
            <svg class="progress-bar" viewBox="0 0 100 100" style="background: none;">
                <path class="base" stroke-linecap="round" stroke-width="6" stroke="#eee" fill="none" d="M50 10
                    a 40 40 0 0 1 0 80
                    a 40 40 0 0 1 0 -80">
                </path>
                <path class="progress" stroke-linecap="round" stroke-width="6" stroke="#20C261" percentage="60" stroke-dasharray="223,999" fill="none" d="M50 10
                       a 40 40 0 0 1 0 80
                       a 40 40 0 0 1 0 -80">
                </path>
            </svg>
            
                <div class="user-percent" style="color: #20C261">89<span>%</span></div>
            
        </div>
        <div class="user-info" style="color: #20C261">
            <div class="level">Nivel 1</div>
            <div class="level-desc">Inicial</div>
            
                <div class="points"><span>89</span> / 100 puntos</div>
            
        </div>
        </a><a class="loyalty-link" href="#">Ver logros y retos</a>
    
    </div>
</section>   
    
        <section class="box-container">
            <h3 class="box-container-title">Novedades</h3>
            <ul class="news">
                
                    
                        <li class="list-news"><p>Cambiamos la forma de calcular los costos por vender. <a href="#" target="_blank">Conoce los cambios</a>.</p></li>
                    
                
                    
                        <li class="list-news"><p>Actualizamos los requisitos para tus publicaciones Gratuitas. <a href="#" target="_blank">Conocer más</a>.</p></li>
                    
                
            </ul>
        </section> 
        <section>
            <h3 class="box-container-title">Saldo en Mercado Pago <i class="ch-icon-question-sign mp-help-tooltip ch-points-rbrt" aria-describedby="ch-layer-1" style="cursor: default;"><span class="ch-hide mp-help-tooltip-string">Úsalo para comprar, pagar tus facturas o transferirlo a una cuenta bancaria.</span></i></h3>

            

            <div class="balance-mp box-container ch-g1-2">
                <table>
                    <thead class="ch-hide">
                    <tr>
                        <th>Estado del dinero</th>
                        <th>Monto</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="balance-mp-total">
                        <td class="tr-padding"></td>
                        <td class="balance-mp-black-text">
                            En cuenta
                        </td>
                        <td>
                            <a href="#" target="_blank">
                                <span class="balance-mp-price balance-mp-black-text">
                                    $ {{$total}}<sup>00</sup>
                                </span>
                            </a>
                        </td>
                        <td class="balance-mp-action"></td>
                        <td class="tr-padding"></td>
                    </tr>

                    <tr class="balance-mp-available">
                        <td class="tr-padding"></td>
                        <td class="balance-mp-text balance-mp-black-text">
                            Disponible
                        </td>

                        
                            <td>
                                <span class="balance-mp-price balance-mp-black-text">
                                    $ {{$total}}<sup>00</sup>
                                </span>
                            </td>
                            <td class="balance-mp-action">
                                
                                
                                    <a href="#" target="_blank">
                                        Retirar dinero
                                    </a>
                                
                            </td>
                        
                        <td class="tr-padding"></td>
                    </tr>
                    
                        <tr class="balance-mp-to-release balance-mp-top-separator">
                            <td class="tr-padding"></td>
                            <td class="balance-mp-text balance-mp-grey-text">
                                A liberar
                            </td>
                            <td>
                                <span class="balance-mp-price balance-mp-grey-text">
                                    $ 0
                                </span>
                            </td>
                            <td class="balance-mp-action">
                            </td>
                            <td class="tr-padding"></td>
                        </tr> 
                    
                    </tbody>
                </table>
            </div>
        </section>
     

                    <section id="MPCardSection" data-js="MPCard"></section>

                    <section id="merchantQRsSection">
                        
<a id="merchantQRsLink" class="ch-hide">modal</a>
<div id="merchantQRsModal" class="ch-hide merchant-qrs-modal-box">
    <img src="css/estado/qr-modal-6476e60d2a.png" srcset="//http2.mlstatic.com/resources/myaccount/summary/images/qr-modal@2x-df0fd2ec11.png 2x,//http2.mlstatic.com/resources/myaccount/summary/images/qr-modal@3x-bc4f038e94.png 3x" class="merchant-qrs-modal-box--image">
    
    
        <p class="merchant-qrs-modal-box--title">Cobra con QR y recibe tu dinero al instante</p>
        <p class="merchant-qrs-modal-box--text">Podrás aceptar pagos con débito y dinero<br> en Mercado Pago sin comisión.</p>
        <a class="merchant-qrs-modal-box--link" href="#" target="_blank">
            <p class="merchant-qrs-modal-box--button">Quiero mi QR</p>
        </a>
    
</div>
 
                    </section> 
                        
                            <section id="userGoals" data-js="goals">
	<article class="goals goals-summary"> 
	    <a href="{{route('estado')}}" data-js="goals-return" class="goals-return">Volver al resumen</a> 
			<h3>Crece en Mercado Libre</h3> 
	    <div class="goals-container"> 
					<div class="goals-heading">
						<header class="goals-row-user">
							Completa tu cuenta
						</header>
						<div class="goals-progress-container">
							<progress max="100" value="75">
								<div class="goals-progress-bar">
									<span style="width: 75%;">Progress: 75%</span>
								</div>
							</progress>
							<p class="goals-status"><span>75%</span></p>
						</div>
						<a href="#" data-js="goals-row" class="user"></a>
					</div>

					<div class="goals-details">
						
							<ul class="goals-notachieved-details"> 
									
										<li>
											<span><a href="#">Completa tu dirección de compra.</a></span>
										</li> 
								
							</ul>
						
						
							<ul class="goals-achieved-details">
								
									
										<li>
											<span>Tienes cuenta en MercadoLibre.</span>
										</li>
									
								
									
								
									
										<li>
											<span>Tienes la App de MercadoLibre.</span>
										</li>
									
								
									
										<li>
											<span>Asociaste tu celular para proteger tu cuenta.</span>
										</li>
									
								
							</ul>
						
					</div>

				

					<div class="goals-heading">
						<header class="goals-row-sales_quantity">
							¡Vende!
						</header>
						<div class="goals-progress-container">
							<progress max="100" value="0">
								<div class="goals-progress-bar">
									<span style="width: 0%;">Progress: 0%</span>
								</div>
							</progress>
							<p class="goals-status"><span>0%</span></p>
						</div>
						<a href="#" data-js="goals-row" class="sales_quantity"></a>
					</div>

					<div class="goals-details">
						
							<ul class="goals-notachieved-details">
								
									
										<li>
											<span><a href="#">Publica tu primer producto.</a></span>
										</li>
									
								
								
									
								
							</ul>
						
						
					</div>

				
			
	    </div>

	    <div class="goals-advices">
			
				<h3>
					Tus próximos objetivos
				</h3>
				<ul>
					
						<li>
							<span><a href="#">Publica tu primer producto.</a></span>
						</li>
					
						<li>
							<span><a href="#">Completa tu dirección de compra.</a></span>
						</li>
					
				</ul>
			
	        <a href="#" class="goals-ref">Ver todos los objetivos</a>
	    </div>
	</article>


</section>
                        
                    
                </div>
            
        </section>

        
            
        

        

    


        
    
	</div></div></div>

	<div id="site" class="ch-hide">mercadolibre.com.mx</div>

	
	<!-- textos ocultos por el t9n -->
	<div id="textPublicidad" class="ch-hide">Publicidad</div>

	
	

		
	@stop