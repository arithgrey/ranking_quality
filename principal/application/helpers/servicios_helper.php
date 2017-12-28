<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('invierte_date_time')){
	
	/**/
	function valida_check($val){
		if ($val> 0 ) {
			return "checked";
		}else{
			return "";
		}


	}
	/**/	
	function valida_imagen($data_img ,  $id_servicio ){

		$img  =  "";  
		if ($data_img["img_e"] > 0  ) {
			$url =  url_img_servicio($id_servicio);
			$img =  "<div class='col-lg-8 col-lg-offset-2'> <div class='contenedor_imagen_servicio' id='contenedor_imagen_servicio'> <img  width='100%' src='".$url."'>  </div> </div>";
		}else{
			$img = "<div class='col-lg-8 col-lg-offset-2'> <div class='contenedor_imagen_servicio' id='contenedor_imagen_servicio'> </div>"; 
		}
		return $img;
	}
	/**/
	function validate_descripcion($descripcion){

		if ( strlen(trim($descripcion) )  > 0) {
			return $descripcion;
		}else{
			return " + Mensaje que describe su servicio "; 
		}
	}
	/**/
	function menu_servicios($data){

	  $servicios =  "";

	  foreach ($data as $row) {

		$id_servicio = $row["id_servicio"];
		$nombre_servicio   = $row["nombre_servicio"];
		$descripcion= $row["descripcion"];
		$fecha_registro  = $row["fecha_registro"];
		$status = $row["status"];
		$id_empresa= $row["id_empresa"];

	   	$url_img =  "../img/index.php/enid/imagen_categoria/".$id_servicio; 	
	    $servicios .=  "<li class='menu_servicios_enid' id='".$id_servicio."'  nombre_servicio = '".$nombre_servicio."' 
	    					 title='Pulsa para mostrar la información de este servicio -  ".$descripcion."'  >            
	                  		<img  class='menu_servicios_enid' id='".$id_servicio."'  src='".$url_img."' width='10%'>	".$nombre_servicio."
	                	</li>";        

  }
  
  return $servicios;
}

}/*Termina el helper*/