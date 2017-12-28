var url_servicio =  "";
var formData = "";
var flag_img =0;
var categoria_catalogo = "";
var incidencia = 0;
var calificacion = 1; 
var flag_inicio =0;
var servicio = 0;
var id_empresa = 0; 
$(document).ready(function(){

	set_id_empresa($(".id_empresa").val());
	$("footer").ready(carga_servicios_empresa);
	$("#form-servicio").submit(registra_servicio);
	$(".agregar_servicio").click(carga_form_categoria);
	
	
});
function set_id_empresa(n){
	id_empresa =  n;
}
/**/
function get_id_empresa(){
	return id_empresa;
}
/**/
function get_servicio(){
	return servicio;
}
/**/
function set_servicio(n){
	servicio =  n;
	lista_comentarios_def();
	
}
/**/
function get_calificacion(){
	return calificacion;
}
/**/
function set_calificacion(new_calificacion){
	calificacion =  new_calificacion;
}
/**/
function set_inicidencia(new_inicidencia){	
	incidencia =  new_inicidencia;

}
/**/
function get_inicidencia(){
	return incidencia;

}
/**/

/**/
function evaluar(e){

	incidencia = e.target.id;
	set_inicidencia(incidencia);
}
/**/
function modifica_inicidencia(e){
	
	data_send = $("#form-calificacion-incidencia").serialize()+ "&"+$.param({"id_incidencia" : get_inicidencia()}); 	
	url =  $("#form-calificacion-incidencia").attr("action");	
	$.ajax({
		url : url , 
		type : "PUT", 
		data :  data_send , 
		beforeSend: function(){

			show_load_enid(".place_info_calificacion_incidencia" , ""  , 1 );
		}  
	}).done(function(data){
			
			show_response_ok_enid( ".place_info_calificacion_incidencia", "Status  actualizado!"); 
			$("#evalua_bug").modal("hide");
			carga_bugs_enid();
	}).fail(function(){
		show_error_enid(".place_info_calificacion_incidencia", "Error al actualizar incidencia");
	});	
	
	e.preventDefault();
}
/**/
function carga_info_general_ranking(){


	url =  "../ranking/index.php/api/ranking/general/format/json/"; 
	
	$.ajax({
		url : url , 
		type : "GET", 
		data :  {id_servicio : get_servicio()} , 
		beforeSend: function(){
			show_load_enid(".place_val_estrellas" , ""  , 1 );
		}  
	}).done(function(data){

		
		
		llenaelementoHTML(".place_val_estrellas" ,  data );
		$(".calificacion_rank").click(lista_comentarios);

		
		llenaelementoHTML(".nombre_servicio_actual" ,  get_nombre_servicio());
		
	}).fail(function(){
		show_error_enid(".place_val_estrellas", "Error al actualizar incidencia");
	});		
}
/**/
function lista_comentarios(e){
	
	n_calificacion = e.target.id;

	if (n_calificacion >  0  ) {
		set_calificacion(n_calificacion);
		
		url = "../ranking/index.php/api/ranking/comentarios_calificacion/format/json/";  
		$.ajax({
			url : url , 
			type : "GET", 
			data :  {calificacion : get_calificacion() , id_servicio: get_servicio()  } , 
			beforeSend: function(){
				show_load_enid(".place_comentarios_ranking" , ""  , 1 );
			}  
		}).done(function(data){

			//console.log(data);
			llenaelementoHTML(".place_comentarios_ranking" ,  data );
			

		}).fail(function(){
			show_error_enid(".place_comentarios_ranking", "Error al actualizar incidencia");
		});	


	}
	
	
}
/**/
function lista_comentarios_def(){

		
		url = "../ranking/index.php/api/ranking/comentarios_calificacion/format/json/";  
		$.ajax({
			url : url , 
			type : "GET", 
			data :  {calificacion : 0  ,  id_servicio :  get_servicio() } , 
			beforeSend: function(){
				show_load_enid(".place_comentarios_ranking" , ""  , 1 );
			}  
		}).done(function(data){
			
			llenaelementoHTML(".place_comentarios_ranking" ,  data );			

		}).fail(function(){
			show_error_enid(".place_comentarios_ranking", "Error al actualizar incidencia");
		});	
}

/**/
function carga_servicios_empresa(){	

	$(".mensaje_ranking").hide();				
	$("#ir_encuesta").hide();
	url = now + "index.php/api/servicios/empresa/format/json/";  
	$.ajax({
			url : url , 
			type : "GET", 
			data :  {} , 
			beforeSend: function(){
				
			}  
		}).done(function(data){





			data_servicios = data.servicios; 
			id_servicio =  data_servicios[0].id_servicio;
			

			if (id_servicio > 0 ) {

				$(".mensaje_ranking").show();				
				$("#ir_encuesta").show();
				set_servicio(id_servicio);			
				set_nombre_servicio(data_servicios[0].nombre_servicio);
				set_url_servicio(data_servicios[0].id_servicio);

				llenaelementoHTML(".place_menu_servicios" , data.servicios_HTML);
				
				$(".menu_servicios_enid").click(modifica_servicio);
				set_menu_servicios_color();
				carga_info_general_ranking();
				
			}

			

		}).fail(function(){
			show_error_enid(".place_menu_servicios", "Error al cargar los servicis");
		});	
}
/**/

function registra_servicio(e){

    url  = $("#form-servicio").attr("action"); 
    nombre_categoria =  $("#servicio-i").val();
    set_servicio_catalogo(nombre_categoria);       
    flag = valida_text_form("#servicio-i" , ".place_nombre_categoria" , 2  , "Nombre asignado a la categoría" );
    

    if(flag ==  1 ){

    	data_send =  $("#form-servicio").serialize();
    	//console.log(data_send);
        $.ajax({            
            url :  url , 
            type : "POST", 
            data : data_send ,
            beforeSend: function(){         
                show_load_enid(".place_servicios_registro" , "Cargando ... " , 1);     
            }
        }).done(function(data){
            
            $(".place_servicios_registro").empty();
            $("#nuevo_servicio_modal").modal("hide");                        
            document.getElementById("form-servicio").reset();                      
            //console.log(data);

            
            
            
            carga_servicios_empresa();

        }).fail(function(){     
            show_error_enid(".place_servicios_registro", "Error al registrar categoria" );
        });
        //carga_productos_promociones_empresa();
        
    }   
    e.preventDefault();
}
function set_servicio_catalogo(new_servicio_catalogo){
	servicio_catalogo =  new_servicio_catalogo;
}
/**/
function get_servicio_catalogo(){
	return servicio_catalogo;
}

function set_flag_img(new_val){
	flag_img =  new_val;
}
/**/
function get_flag_img(){
	return flag_img;
}
/**/
function get_formData(){
	return formData;
}
/**/
function set_formData(n){
	formData =  n;
}

function set_menu_servicios_color(){
	
	$(".menu_servicios_enid").each(function(){

		 	if ($(this).attr("nombre_servicio") ==  get_nombre_servicio()){
		 		$(this).addClass("servicio_en_activo_enid");		 		
		 	}else{
		 		$(this).removeClass("servicio_en_activo_enid");
		 	}
	});

}
function modifica_servicio(e){

	servicio =  e.target.id;		
	set_url_servicio(servicio);

	set_servicio(servicio);
	set_nombre_servicio($(this).attr("nombre_servicio"));		
	set_menu_servicios_color();
	carga_info_general_ranking();
}

function get_nombre_servicio(){
	return nombre_servicio;
}
function set_nombre_servicio(new_nombre_servicio){
	nombre_servicio =  new_nombre_servicio;
	llenaelementoHTML(".servicio_btn" , new_nombre_servicio);

}/**/

function set_url_servicio(n){
	url_servicio =  n;
	url =  "../ranking/index.php/opiniones/emp/"+get_id_empresa()+"/"+n+"/";
	$(".link_to_encuesta").attr("href" , url);
	$(".fb-share-button").attr("data-href" ,  url);
}
/**/
function get_url_servicio(){
	return url_servicio;
}
/**/
