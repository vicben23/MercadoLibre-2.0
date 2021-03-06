@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block; ">
    <div style="" class="cont-ruta">
    	<ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
    		<li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8"><span data-reactid="9"><a href="{{ route('vender') }}">Elige qué quieres publicar</a></span></li>
    		<li class="syi-ui-wizard__step" data-reactid="10" style="font-weight: 700;color: #333;border-bottom: 0"><span data-reactid="11">Describe tu producto</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13">Ingresa precio y cantidad</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
    	</ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="upload_form" enctype="multipart/form-data" action="{{route('precioPROD')}}"> 
                    <div class="row col-md-12">
                        <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{ $idPublicacion }}">
                        <input type="hidden" name="idUser" id="idUser" value="{{ auth()->user()->_id }}">
                        <input type="hidden" name="categoria" id="categoria" value="{{ $categoria }}">
                        <input type="hidden" name="tipo" id="tipo" value="{{ $tipo }}">
                        <input type="hidden" name="marca" id="marca" value="{{ $marca }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <input type="hidden" name="arrayCaracteristicas" id="arrayCaracteristicas" value="">                 
                    </div>
                    <div class="row col-md-12" style="margin-top:10px;">
                        <fieldset id="grupoFotos">
                            <legend>Ingresa fotos de tu producto</legend>
                            <p class="ui-form-hint">¡Ahora puedes subir hasta 10 fotos de tu producto!</p><br>
                            <p>Muéstralo en detalle, con fondo blanco y bien iluminado. No incluyas logos, banners ni textos promocionales.</p>  
                            <div class="row col-md-12">
                                <div class="picture-uploader  picture-uploader-motors ">
                                    <input type="hidden" id="allPictures" name="allPictures" data-allpictures="" value="[]">
                                    <input type="hidden" name="execution" value="e1s2" id="execution">
                                    <noscript>
                                        <div class="ch-box-icon ch-box-info">
                                            <i class="ch-icon-info-sign"></i>
                                            Estás viendo un cargador de fotos básico porque tu navegador está desactualizado. <strong>Para tener una mejor experiencia, actualiza la versión de tu navegador.</strong>
                                        </div>
                                    </noscript>
                                    <div class="picture-uploader-preview " id="picture-uploader-preview" style="position: relative;z-index: 1;">
                                        <ul>
                                            
                                                {{ csrf_field() }}
                                                        <input type="file" name="select_file" id="select_file" class="btn-car" /> 
                                                <li data-picture-status="off" class="off" id="principal" onclick="clickbtn(id)"> 
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                    <p class="picture-uploader-principal">Foto principal</p>
                                                </li> 
                                                
                                            
                                                <li data-picture-status="off" id="img1" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img2" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img3" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img4" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img5" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img6" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img7" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img8" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img9" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img10" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img11" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off" id="img12" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                                <li data-picture-status="off" id="img13" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#">
                                                            <span class="ch-hide">Borrar</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div id="html5_1cpaullo31ni1nbioqm1s7f2mk3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 1024px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1cpaullo31ni1nbioqm1s7f2mk3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.JPG,.JPEG,image/gif,.GIF,image/png,.PNG,.webp">
                                    </div>
                                </div>
                            </div> 
                        </fieldset>
                    </div> 
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Ingresa un video</legend>
                            <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p>Link de YouTube</p></div>
                            <div class="col-md-4">
                                <input class="form-control col-md-4" type="text" name="videoURL" id="videoURL" value="{{old('videoURL')}}">
                                <span>Ingresa el link de tu video de YouTube.</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Ubicación de tu vehículo</legend>
                            <span>* Datos obligatorios</span>  
                                <div>
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Estado:*</label>
                                        <select name="estado" id="estado">
                                            <option value="">Selecciona un estado</option>  
                                        </select>
                                    </div> 
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Municipio:*</label>
                                        <select name="municipio" id="municipio">
                                            <option value="">Selecciona un municipio</option>
                                        </select>  
                                    </div>
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Colonia:*</label>
                                        <select name="colonia" id="colonia" style="width: 280px;">
                                            <option value="">Selecciona una colonia</option>
                                            <option value="Fracc.Los Angeles">Fracc.Los Angeles</option>
                                        </select>
                                    </div> 
                                </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Datos de contacto</legend>
                            <span style="margin-bottom:10px;">El teléfono será mostrado en tu publicación.</span>
                            <span>* Datos obligatorios</span>  
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Teléfono:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="telefono" id="telefono"> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;width: 131.5px;"><p>Horario de contacto:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="horarioContacto" id="horarioContacto"> 
                                        </div>
                                    </div> 
                                </div>
                        </fieldset>
                    </div> 
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Indica la condición de tu producto</legend>
                            <label style="font-weight: 100;"><input style="margin-right:5px" type="radio" name="nuevoOusado" value="Nuevo" checked>Nuevo</label><br>
                            <label style="font-weight: 100;"><input style="margin-right:5px" type="radio" name="nuevoOusado" value="Usado">Usado</label><br>
                        </fieldset>
                    </div> 
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Completa la ficha técnica</legend>
                            <span>Puedes encontrar estos datos en la caja del producto, su etiqueta, envase, o en las especificaciones del fabricante.</span>      
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Titulo:*</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control col-md-12" type="text" name="titulo" id="titulo" value="{{$titulo}}{{ old('titulo') }}"> 
                                            <span>Restan 60 caracteres.</span>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form col-md-1" > 
                                    </div>
                                    <div class="col-md-11" style="width: 90%;">
                                        <div class="desc-message-warning">
                                            <div class="desc-message-warning__text classifieds">
                                                <h3 class="desc-message-warning__title">Completa tu descripción sin agregar datos de contacto</h3>
                                                <div class="desc-message-warning__content">
                                                    <p>
                                                        No incluyas teléfonos, e-mails, direcciones ni sitios web en la descripción ni en el título.
                                                    </p>
                                                    <p>
                                                        Las publicaciones que tengan datos de contacto en esas secciones aparecerán más abajo en los resultados de búsquedas.
                                                    </p>

                                                </div>
                                            </div>

                                            <div class="desc-message-warning__image">
                                                <img src="https://http2.mlstatic.com/secure/sell/1.0.0/syi-fixing.svg">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="ch-form">
                                            <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Descripción:</p>
                                            </div>
                                            <div class="col-md-10"> 
                                                <textarea value="{{ old('descripcion') }}" placeholder="Escribe tu descripción" id="descripcion" name="descripcion" rows="10" class="desc-textarea form-control addMarginIzquierdaInput"></textarea>
                                            </div>
                                        </div>  
                                    </div> 
                                </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12" id="footer-descripcion"> 
                        <input type="submit"  class="btn-azul" name="des-continuar2" id="btn-continuar2" value="Continuar" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                        <a href="{{ URL::previous() }}" title="">Volver</a>
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