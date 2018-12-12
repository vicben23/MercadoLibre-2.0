@extends('layouts.master')
@section('titulo')
    <title>Detalle compra - MercadoLibre</title>    
@stop
@section('content')
{!! Html::style('css/styleDetaCompra.css') !!} 
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 
{!! Html::style('css/stylePerfil.css') !!}
    {!! Html::script('js/jquery-3.3.1.min.js') !!}



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
  </svg></label> <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-publications" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Publicaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-seller_questions" class="myml-nav__menu-item " href="{{route('historialVentas')}}"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-myml_sales" class="myml-nav__menu-item " href="{{route('historialVentas')}}"><span class="myml-nav__menu-item-text">Ventas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_contacts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Datos de mis interesados</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-advertising" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Campaña de publicidad</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración"><svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
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
            <h1 class="myml-title">Resumen de compra</h1>
    <div class="col-md-10" style="padding-left: 0px;">
        <div class="col-md-12 textIzquierda" style="    margin-left: 10px;background-color:white;width: 99%;">
            
        </div>
        <div class="col-md-12" style="padding-left: 0px;">  


    <div class="purchases-vpp-container">
        <div id="alertMessageContainer" class="ch-hide">
            <div id="alertMessage" class="ch-box-icon"><i></i><span></span></div>
        </div>
        
            <div class="myml-ui-breadcrumb" style="text-align: left;">
    
        <li class="myml-ui-breadcrumb__element">
            
                <a href="{{route('historialComp')}}">Compras</a>
            
        </li>
    
        <li class="myml-ui-breadcrumb__element">
            
                Detalle de compra
            
        </li>
    
</div>

            <header class="purchases-header">
                <h1 class="purchases-title" >Compra #{{$charge->order_id}} - {{mb_substr($charge->creation_date,8,2)}} del {{mb_substr($charge->creation_date,5,2)}}</h1> 
            </header>
            
            <div class="purchases-notification">
                
                
            </div>

            <div class="purchases-container" data-js="vpp-container">
                <div class="myml-main-content">
                    <div class="ui-panel myml-ui-relevant-box">
                        <div class="ui-panel__content purchases-payment"> 
    <div class="purchases-payment__container">
        <table class="purchases-payment__table" cellpadding="0" cellspacing="0" border="0">
            
                
                <tbody><tr class="purchases-payment__summary ">
                    <td style="margin-top: 10px">Producto</td>
                    <td class="">
                        
                            <span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
    <meta itemprop="price" content="499.null">
    <span class="price-tag-symbol" itemprop="priceCurrency" content="ARS">$</span>
    <span class="price-tag-fraction">{{$item[0]->precio}}</span>
    <span class="price-tag-decimal-separator">.</span>
    <span class="price-tag-cents"></span>
</span>

                        
                    </td>
                </tr>
            
                
                <tr class="purchases-payment__summary purchases-payment__subtotal">
                    <td class="u-truncate purchases-payment__highlight" style="">Envío</td>
                    <td class="purchases-payment__highlight">
                        
                            <span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
    <meta itemprop="price" content="0.null">
    <span class="price-tag-symbol" itemprop="priceCurrency" content="ARS" style="margin-top: -30px">$</span>
    <span class="price-tag-fraction">{{$item[0]->costoEnvio}}</span>
    <span class="price-tag-decimal-separator">.</span>
    <span class="price-tag-cents"></span>
</span>

                        
                    </td>
                </tr>
            
            
                
                    <tr class="u-hline">
                        
                            <td class="purchases-payment__emphasize-txt">Pagaste</td>
                        
                        <td class="purchases-payment__installments purchases-payment__emphasize-txt">
                            
                            <span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
    <meta itemprop="price" content="499.null">
    <span class="price-tag-symbol" itemprop="priceCurrency" content="ARS">$</span>
    <span class="price-tag-fraction">{{$item[0]->precio+$item[0]->costoEnvio}}</span>
    <span class="price-tag-decimal-separator">.</span>
    <span class="price-tag-cents"></span>
</span>

                            
                        </td>
                    </tr>
                
            
            
            
        </tbody></table>
    </div>
    
    
    
    
</div>

                    </div>

                    
                        <div class="ui-panel ui-panel--group myml-ui-relevant-box">
                           
                               <div class="ui-panel__content">
                                    <div class="myml-ui-arrange-box">
    <div class="myml-ui-arrange-box__icon">
    <span class="ui-badge ui-badge--small u-bg-color--light-gray">
        <span class="ui-badge__icon">
            
            
            
                <svg width="20px" height="14px" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
  <g fill="#FFFFFF" fill-rule="evenodd">
    <path d="M.5 1.91c0-.696.554-1.243 1.24-1.243h16.52c.685 0 1.24.548 1.24 1.244v10.575c0 .697-.553 1.244-1.24 1.244H1.74c-.685 0-1.24-.55-1.24-1.245V1.91z" fill="#FFF"></path>
    <path d="M1.74 7.362c0-.262.185-.475.412-.475H4.63c.23 0 .413.21.413.475 0 .263-.186.476-.413.476H2.152c-.23 0-.413-.21-.413-.476m4.336 0c0-.262.186-.475.413-.475h2.477c.23 0 .413.21.413.475 0 .263-.186.476-.413.476H6.49c-.23 0-.413-.21-.413-.476m4.336 0c0-.262.186-.475.413-.475h2.478c.23 0 .413.21.413.475 0 .263-.186.476-.413.476h-2.478c-.23 0-.413-.21-.413-.476m4.337 0c0-.262.186-.475.413-.475h2.478c.23 0 .414.21.414.475 0 .263-.186.476-.413.476h-2.477c-.23 0-.413-.21-.413-.476" stroke="#E2E2E2" stroke-width=".5" fill="#FFFFFF"></path>
  </g>
</svg>

            
            
            
            
            
            
        </span>
        <span class="ui-badge__complementary-icon">
            
                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: sketchtool 39.1 (31720) - http://www.bohemiancoding.com/sketch -->
    <title>E03E2442-0676-429A-847B-D3F0B0F1160B</title>
    <desc>Created with sketchtool.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="assets" transform="translate(-511.000000, -1112.000000)">
            <g id="Group-6" transform="translate(511.000000, 1112.000000)">
                <ellipse id="Oval-358-Copy" fill="#39B54A" cx="10" cy="10" rx="10" ry="10"></ellipse>
                <polygon id="Combined-Shape" fill="#FFFFFF" points="8.6470589 11.6470587 6.38235302 9.38235279 5.25 10.5147058 8.6470589 13.9117647 14.875 7.68382361 13.742647 6.55147059"></polygon>
            </g>
        </g>
    </g>
</svg>

            
            
            
            
        </span>
    </span>
</div>

    <div class="myml-ui-arrange-box__info">
        <ul>
    <li class="myml-ui-arrange-box__title">
        Visa Débito Bancomer
        
            <span class="myml-ui-arrange-box__subtitle">
                Terminada en {{mb_substr($charge->card->card_number,-4)}}
            </span>
        
    </li>
    
        <li class="purchases-payment-method__payment">
            <ul>
                <li class="myml-ui-arrange-box__title">Pago ($ {{$charge->amount}})</li>
                <li class="myml-ui-arrange-box__description">Pago #{{$charge->order_id}} acreditado el {{mb_substr($charge->creation_date,8,2)}} del {{mb_substr($charge->creation_date,5,2)}}</li>
            </ul>
        </li>
    
    
    
</ul>

        
    </div>
</div>


                                </div>
                            
                        </div>
                    
                    
                        <div class="ui-panel myml-ui-relevant-box">
                            <div class="ui-panel__content">
                                <div class="myml-ui-arrange-box">
    <div class="myml-ui-arrange-box__icon">
        <span class="ui-badge ui-badge--small u-bg-color--light-gray">
            <span class="ui-badge__icon">
                
                    <svg width="15" height="20" viewBox="0 0 15 20" xmlns="http://www.w3.org/2000/svg">
  <path d="M14.167 7.083C14.167 3.17 10.995 0 7.084 0 3.174 0 0 3.17 0 7.083 0 10.995 7.084 20.07 7.084 20.07s7.083-9.075 7.083-12.987zm-5.047 0c0-1.125-.912-2.036-2.036-2.036-1.125 0-2.038.91-2.038 2.036 0 1.125.913 2.036 2.038 2.036 1.124 0 2.036-.912 2.036-2.037z" fill="#FFFFFF" fill-rule="evenodd"></path>
</svg>

                
                
                
                
                
                
            </span>
        </span>
    </div>
    <div class="myml-ui-arrange-box__info">
        <p class="myml-ui-arrange-box__title">{{$domicilioEnvio[0]->calle}}, Nº exterior: {{$domicilioEnvio[0]->numeroEx}}, Nº interior: {{$domicilioEnvio[0]->numeroInt}} Referencia: {{$domicilioEnvio[0]->referencia}}<br>{{$domicilioEnvio[0]->municipio}}, {{$domicilioEnvio[0]->colonia}}, {{$domicilioEnvio[0]->municipio}} ({{$domicilioEnvio[0]->codigopostal}}), {{$domicilioEnvio[0]->estado}}<br>Recibe {{$domicilioEnvio[0]->contacto}} {{$domicilioEnvio[0]->telefono}}</p> 
    </div>
</div>

                            </div>
                        </div>
                    
                    
                    
                    

                </div>
                <div class="myml-complementary-content">
                    
    <div class="myml-ui-item-container ui-box ui-box--lite">

        
            <div class="myml-ui-item-container__header">
                
                
                    <span class="myml-ui-item-container__package">Compraste</span>
                
                
                
                    <h2 class="myml-ui-item-container__title info">Entregado</h2>
                
                
                    <p class="myml-ui-item-container__subtitle">Llegó el __ de __.
                    
                
            </p></div>
        

        
            <div class="myml-ui-item-row u-myml-clearfix">
                
    

    <div class="myml-ui-dropdown-actions">
        <span data-component="myml-ui-dropdown-actions" class="myml-ui-dropdown-actions__trigger ui-icon-menu ch-shownby-pointertap ch-dropdown-trigger ch-user-no-select ch-dropdown-trigger-skin" data-title="undefined" title="" aria-owns="ch-dropdown-1" aria-haspopup="true">
            <span class="myml-ui-dropdown-actions__icon">
                <svg width="8" height="14" viewBox="0 0 8 35" xmlns="http://www.w3.org/2000/svg"><title>A9B9EA24-301D-48AB-ADBC-23CE01B1CCE1</title><g fill="#333" fill-rule="evenodd"><path d="M4 7.838c2.21 0 4-1.754 4-3.919C8 1.755 6.21 0 4 0S0 1.755 0 3.92c0 2.164 1.79 3.918 4 3.918z"></path><ellipse cx="4" cy="17.458" rx="4" ry="3.919"></ellipse><ellipse cx="4" cy="30.998" rx="4" ry="3.919"></ellipse></g></svg>

            </span>
        </span>
        
            <ul class="myml-ui-dropdown-actions__list ch-hide" label="Links">
                
                    
                        <li>
                            <a href="https://myaccount.mercadolibre.com.mx/purchases/1716345322/shipments/27555821350/detail" class="myml-ui-dropdown-actions__action info" data-component="track_shipment">
                                Detalle del envío
                            </a>
                        </li>
                    
                
                    
                        <li>
                            <a href="http://ayuda.mercadolibre.com.mx/ayuda/purchases/options?order=1716345322" class="myml-ui-dropdown-actions__action info" data-component="have_problem">
                                Tengo un problema
                            </a>
                        </li>
                    
                
            </ul>
        
    </div>


    <div class="myml-ui-item u-media-object">
    <div class="myml-ui-item__icon u-media-object__fit" style="position: relative;">
        <a href="https://articulo.mercadolibre.com.mx/MLM-616682342-jersey-de-las-chivas-nuevo-puma-original-1617-_JM">
            
                <img src="./Compras - Mercado Libre_files/606229-MLM26960127118_032018-O.jpg" height="0" width="0">
            
        </a>
        
    </div>
    <div class="myml-ui-item__info u-media-object__fill">
        
        <a class="myml-ui-item__name" href="https://articulo.mercadolibre.com.mx/MLM-616682342-jersey-de-las-chivas-nuevo-puma-original-1617-_JM"></a>
        <div class="myml-ui-item__description">
            <center>
                <p>
                    
                
                    
                </p>
            </center>
            
                <p>
                    <span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
    <meta itemprop="price" content="499.00">
    <span class="price-tag-symbol" itemprop="priceCurrency" content="ARS">$</span>
    <span class="price-tag-fraction">{{$item[0]->precio}}</span>
    <span class="price-tag-decimal-separator">.</span>
    <span class="price-tag-cents"></span>
</span>

                    x 1 unidad
                </p>
            
            
            
            
        </div>
    </div>
</div>

    
    
    





    <div class="myml-ui-package-actions">
        
    <div class="myml-ui-package-actions__action">
        <a href="https://myaccount.mercadolibre.com.mx/messaging/orders/1716345322" class="myml-ui-package-actions__text ">Ver mensaje
            
            <span class="myml-ui-package-actions__chevron-right">
                <svg width="9px" height="14px" viewBox="0 0 9 14" xmlns="http://www.w3.org/2000/svg">
  <path d="M8.12 6.96a.48.48 0 0 0-.14-.32L1.48.14A.48.48 0 0 0 1.157 0a.48.48 0 0 0-.32.14L.14.837a.48.48 0 0 0-.14.32.48.48 0 0 0 .14.322l5.482 5.48L.14 12.444a.48.48 0 0 0-.14.32c0 .127.056.238.14.32l.697.7a.48.48 0 0 0 .32.14.48.48 0 0 0 .322-.14l6.5-6.5a.48.48 0 0 0 .14-.323z" fill="#B4B4B4" fill-rule="evenodd"></path>
</svg>

            </span>
        </a>
    </div>


        

        

    </div>


            </div>
        
    </div>


                </div>
                <div class="purchases-vpp-recommendations ">
                    




    <div class="recommendations-wrapper">
        


    
    <style>
    .recommendations-component-wrapper{
        visibility: hidden;
    }

    .recommendations-list-items .item[aria-hidden='true'], .recommendations-list-items [aria-disabled='false']{
        display: block !important;
    }

    .recommendations-list-items .item {
        height: 226px;
    }

    .recommendations-list-items .item .item-data{
        margin-top: 10px;
    }

    .recommendations-list-items a {
        display: block;
        position: relative;
        width: 150px;
    }

    .recommendations-list-items .info {
        margin: 0 2px;
        text-align: left;
    }

    .recommendations-list-items .item-title {
        bottom: 0;
        display: -webkit-box;
        line-height: 1;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        color: #666;
        font-size: 13px;
        max-height: 32px;
        line-height: 1.25;
        margin: 0 0 6px;
        overflow: hidden;
        word-break: break-word;
    }

    .recommendations-list-items .shipping-info {
        margin-top: 0;
        color: #3e9a00;
        font-size: 11px;
    }

    .recommendations-list-items .price-info {
        margin: 0;
    }

    .recommendations-list-items .shipping-info .item-shipping-icon {
        color: #33992e;
        -webkit-transform: scaleX(-1);
        -ms-transform: scaleX(-1);
        transform: scaleX(-1);
        margin-left: 2px;
    }
    </style>
        </section>
                        
                    
                </div>
            
        </section>

        
            
        

        

    


        
    
    </div></div></div>

@stop