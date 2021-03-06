@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!} 
{!! Html::style('css/confirStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    <div style="" class="cont-ruta" style="width: 100%z"> 
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="form_precio" action=""> 
                {{ csrf_field() }}
                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                    <div class="row col-md-11" style="text-align: left;margin-bottom: 60px;">
                        <div class="row col-md-12">
                            <div class="col-md-2"> 
                                <img class="img-listo" src="img/palomita.png" alt="">
                                 <img style="border: 2px solid #e2e2e2;padding: 0px;height: 146.08px;" src="images/{{ auth()->user()->_id }}/{{$datos->idPublicacion}}/{{$imagen->url}}" class="img-thumbnail" width="500" alt="">
                             </div>
                             <div class="col-md-8 cont-listo">
                                 <h1 class="text-listo">¡Listo! Ya publicaste</h1>
                                 <p><strong>{{$datos->titulo}} a ${{$datos->precio}}°°.</strong></p>
                                 <p>Tu publicación es <b style="text-transform: capitalize;color: #000">
                                    @if ($datos->tipoPublicacion === "free")
                                        Gratis
                                    @elseif (count($records) > "gold_premium")
                                        Oro Premium
                                    @elseif ($datos->tipoPublicacion === "gold")
                                        Oro
                                    @elseif ($datos->tipoPublicacion === "silver")
                                        Plata
                                    @endif
                                    </b> y dura <b style="color: #000">30</b> días</p>
                                 <p>Esposible que tu publicación demore en aparecer en los resultados de busqueda.</p> 
                                 <a href="{{route('verpublicacion', ['id' => $datos->_id,'user'=>$datos->idUser])}}" title="" class="ch-btn-small">Ver publicación</a>
                                 <a href="{{route('publicaciones')}}" title="" style="margin-left:10px;font-size: 13px;color: blue;">Ir a publicaciones</a>
                             </div> 
                        </div>         
                    </div> 
                    <div class="ch-box-container"> 
                    <form action="" method="post" accept-charset="utf-8" class="ch-form">
                        <fieldset id="ListingTypesGroup" style="padding-right: 50px;"><legend class="{2}">¡Aumenta la exposición para vender antes!</legend>
                            <span style="padding:20px 0px 20px;">A mayor visibilidad, tendras mayor oportunidad de vender</span>
                        <table id="ltstep" class="ch-datagrid listingtypes-container ch-form-options ch-form-required radios class " data-js="listingtypes">
                            {{ csrf_field() }}
                        <thead>
                            <tr>
                                <th>Visitas</th>
                                <th class="features">Exposición</th>
                                <th class="features">Exposición en la Página principal de vehículos</th>
                                <th class="cost">Costo por publicar</th>
                            </tr>
                        </thead> 
                        <tbody>   
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-gold_premium" data-listid="gold_premium">
                                <td class="listingtypes-exposition-data gold_premium">
                                    <div class="exposition-visual ">
                                        <input type="hidden" name="gold_premium_hasToPay" value="true" id="gold_premium_hasToPay">
                                        <input type="radio" name="listingTypes" checked="checked" value="gold_premium" calss="listingType" id="gold_premium">
                                        <label for="gold_premium">
                                            <strong>Aumenta 10 veces tus visitas*</strong> 
                                        </label>
                                    </div>
                                    <div class="conditions-phqlv">
                                        Cambiando a Oro Premiunm, puedes republicarlo gratis hasta que lo vendas.<a href="" title="">Como funciona</a>               
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                        <span class="listingtypes-exposition-level gold_premium" title="Exposición: Máxima"></span>
                                        <span class="exposition">
                                            Máxima
                                        </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-ok"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 499<sup>00</sup></span>  
                                    <div class="sell-inform">
                                                
                                    </div> 
                                </td>
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-gold" data-listid="gold"> 
                                <td class="listingtypes-exposition-data gold">
                                    <div class="exposition-visual "> 
                                        <input type="hidden" name="gold_hasToPay" value="true" id="gold_hasToPay"> 
                                        <input type="radio" name="listingTypes" value="gold" calss="listingType" id="gold">
                                        <label for="gold"> 
                                            <strong>Aumneta 8 veces tus visitas*</strong>  
                                        </label>
                                    </div> 
                                    <div class="conditions-phqlv">
                                        Cambiate a Oro, puedes republicarlo gratis hasta que lo vendas.<a href="" title="">Como funciona</a>  
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level gold" title="Exposición: Alta"></span>
                                    <span class="exposition">
                                        Alta
                                    </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                   <i class="ch-icon-ok"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 349<sup>00</sup></span> 
                                    <div class="sell-inform"> 
                                    </div> 
                                </td> 
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-silver" data-listid="silver"> 
                                <td class="listingtypes-exposition-data silver">
                                    <div class="exposition-visual "> 
                                        <input type="hidden" name="silver_hasToPay" value="true" id="silver_hasToPay"> 
                                        <input type="radio" name="listingTypes" value="silver" calss="listingType" id="silver">
                                        <label for="silver"> 
                                            <strong>Aumenta 6 veces tus visitas*</strong>  
                                        </label>
                                    </div>
                                     <div class="conditions-phqlv">
                                        Cambiate a Plata, puedes republicarlo gratis hasta que lo vendas.<a href="" title="">Como funciona</a>  
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level silver" title="Exposición: Media"></span>
                                    <span class="exposition">
                                        Media
                                    </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-remove"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 219<sup>00</sup></span> 
                                    <div class="sell-inform"> 
                                    </div> 
                                </td> 
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-free" data-listid="free"> 
                                <td class="listingtypes-exposition-data free">
                                    <div class="exposition-visual " style="background: #c0ccc0"> 
                                        <input type="hidden" name="free_hasToPay" value="false" id="free_hasToPay">  
                                        <label for="free" style="    color: #8e8383 !important;font-weight: normal !important;"> 
                                                Publicacion actual 
                                        </label>
                                    </div> 
                                    <div class="conditions-free"> 
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level free" title="Exposición: Mínima"></span>
                                    <span class="exposition">
                                        Mínima
                                    </span>
                                    
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-remove"></i> 
                                </td> 
                                <td class="cost"> 
                                    ¡Gratis!
                                </td>
                            </tr>
                        </tbody>
                        </table>
                            <div class="payment-methods">
                                    
                                <ul>
                                     
                                </ul>  
                                <div class="all-methods-off-payments ch-hide">
                                    <ul style="display: none;">
                                        
                                    </ul>
                                </div>
                            </div>
                        <input type="hidden" value="3" id="mercadopagoIsOn">
                        <input type="hidden" value="" id="isMktplace">
                        </fieldset> 
                    </form>
                </div>     

                    <div class="row col-md-12" id="footer-descripcion"> 
                        <input type="submit"  class="btn-azul" name="btnContinuarPrecio" id="btnContinuarPrecio" value="Aumentar Exposisión" style="font-size: 18px;padding: 6px 12px;margin-top:0px"> 
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