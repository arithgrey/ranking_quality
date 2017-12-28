<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('invierte_date_time')){	

	/**/
	function valida_input_nombre($data_servicio){
		$input = '  <input type="hidden" name="nombre_contacto" class="nombre_contacto form-control input-sm" id="email_contacto"> '; 
		if ($data_servicio["s_nombre"] ==  1 ) {

			$input = '
			<div class="input-group" title="Dejanos tu nombre">
	          <span class="input-group-addon" id="basic-addon1">
	            Nombre
	          </span>
	          <input type="text" 
	          name="nombre_contacto" 
	          class="nombre_contacto form-control input-sm" 
	          id="nombre_contacto" 
	          placeholder="Tu nombre">                                        
	        </div>';
		}
		return $input;
		
    }
	/**/
	function valida_input_correo($data_servicio){
		$input = '  <input type="hidden" name="email_contacto" class="email_contacto form-control input-sm" id="email_contacto"> '; 
		if ($data_servicio["s_email"] ==  1 ) {

			$input = '
			<div class="input-group" title="Dejanos tu e-mail para que recibas las mejores ofertas">
	          <span class="input-group-addon" id="basic-addon1">
	            Correo @
	          </span>
	          <input 
	          type="email" 
	          name="email_contacto" 
	          class="email_contacto form-control input-sm" 
	          id="email_contacto" 

	          >                                        
	        </div>';
		}
		return $input;
		
    }
	/**/
	function valida_input_tel($data_servicio){

		$input =  '<input type="hidden" name="telefono_contacto" class="telefono_contacto form-control input-sm"  id="telefono_contacto" > '; 
		if ($data_servicio["s_telefono"] ==  1 ) {

			$input = '
			<div class="input-group" title="Dejanos tu número Telefónico">
              <span class="input-group-addon" id="basic-addon1">
                Teléfono
              </span>
              <input type="tel" name="telefono_contacto" class="telefono_contacto form-control input-sm" 
              id="telefono_contacto"
              placeholder="Tu teléfono" >                                        
            </div>';

		}
		return $input;
	}

	/**/
	function evalua_img_servicio($data , $id_servicio ){		
		$existe =  $data[0]["existe_img"];
		if ($existe > 0 ){

			$url = "../../../../../../img/index.php/enid/imagen_categoria/".$id_servicio;
			return "<img src='".$url ."' class='img_servicio_presenta'>";
		}else{
			return "";
		}
	}
	function evalua_img_servicio_pre_view($data , $id_servicio ){

		$existe =  $data[0]["existe_img"];
		
		if ($existe > 0 ){
			$url = "http://enidservice.com/ranking_quality/img/index.php/enid/imagen_categoria/".$id_servicio."/";
			return "<img src='".$url ."' class='img_servicio_presenta'>";
		}else{
			$url = "http://enidservice.com/ranking_quality/img_tema/11.png";
			return "<img src='".$url ."' class='img_servicio_presenta'>";

			
		}
	}
	/**/
	function evalua_mensaje_servicio($data_servicio){

		if ( strlen(trim($data_servicio["url_next"])) > 2){
			return "Más información";
		}else{
			return "Gracias por calificarnos";
		}
	}
	/**/
	function valida_url_next_encuesta($url){

		if (strlen(trim($url)) > 0 ){
			return "href='".$url."' ";	
		}
		

	}

}/*Termina el helper*/