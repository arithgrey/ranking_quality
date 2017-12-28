var url_servicio =  "";
var formData = "";
var flag_img =0;
var categoria_catalogo = "";
var incidencia = 0;
var calificacion = 1; 
var flag_inicio =0;
var servicio = 0;
var id_empresa = 0; 
var accion_servicio = 0; 
var descripcion_servicio =  "";

$(document).ready(function(){

	set_id_empresa($(".id_empresa").val());		
	
	$("footer").ready(carga_servicios_empresa);
	$("#form-servicio").submit(registra_servicio);	
	$("div.lateral-s>div.list-group>a").click(cambia_menu_nav);	
	$(".btn_distribucion").click(function(){
		set_contenedor(".contenedor_distribucion");
	});
	/**/
	$(".btn_graficos").click(carga_graficos);
	/**/
	$(".btn_rq").click(function(){
		set_contenedor(".contenedor_rk");
	});
	
});
/**/
function evaluar(e){

	incidencia = e.target.id;
	set_inicidencia(incidencia);
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
function elementos_def(flag){

	if (flag ==  0 ) {	
		showonehideone( ".contenedor_principal_inicio" , ".contenedor_principal_encuestas");
		carga_menu_inicial();		
	}else{
		showonehideone(".contenedor_principal_encuestas" , ".contenedor_principal_inicio" );
	}
}
/**/

function carga_menu_inicial(){
	url =  now + "index.php/api/servicios/menu_inicio/format/json/";
	$.ajax({
		url : url , 
		type: "GET",
		data: {},
		beforeSend: function(){
			show_load_enid(".menu_inicio" , "Cargando ... " , 1 );
		}
	}).done(function(data){
		llenaelementoHTML(".menu_inicio" , data);
	}).fail(function(){
		show_error_enid(".menu_inicio" , "Error al cargar el menú inicial");
	});




}
/**/
function carga_servicios_empresa(){	
	
	llenaelementoHTML(".contenedor_load" , '<h2>RANKING QUALITY</h2><button class="btn btn-lg btn-primary m-progress">Button</button><br/><br/><br/><br/>');
	url = now + "index.php/api/servicios/empresa/format/json/";  
	$.ajax({
			url : url , 
			type : "GET", 
			data : {} , 
			beforeSend: function(){
				
			}  
		}).done(function(data){
			
			$(".contenedor_load").empty();
			elementos_def(0);
			set_contenedor(".contenedor_rk");


			console.log(data);
			
			data_servicios =  data.servicios;
			id_servicio =  data_servicios[0].id_servicio;


			if (id_servicio > 0 ) {

				elementos_def(1);


				set_servicio(id_servicio);			
				set_nombre_servicio(data_servicios[0].nombre_servicio);
				set_url_servicio(data_servicios[0].id_servicio);
				set_descripcion_servicio(data_servicios[0].descripcion);


				llenaelementoHTML(".place_menu_servicios" , data.servicios_HTML);
				
				$(".menu_servicios_enid").click(modifica_servicio);
				$(".editar_encuesta").click(editar_servicio);

			
				set_menu_servicios_color();
				carga_info_general_ranking();
				
			}
			
		}).fail(function(){
			show_error_enid(".place_menu_servicios", "Error al cargar los servicis");
		});	
}
function registra_servicio(e){

    url  = $("#form-servicio").attr("action"); 
    nombre_categoria =  $("#servicio-i").val();
    set_servicio_catalogo(nombre_categoria);       
    flag = valida_text_form("#servicio-i" , ".place_nombre_categoria" , 2  , "Nombre asignado a la categoría" );
   
    if(flag ==  1 ){

        $.ajax({            
            url :  url , 
            type : "POST", 
            data : $("#form-servicio").serialize() ,
            beforeSend: function(){         
                show_load_enid(".place_servicios_registro" , "Cargando ... " , 1);     
            }
        }).done(function(data){

            $(".place_servicios_registro").empty();
            $("#nuevo_servicio_modal").modal("hide");                        
            document.getElementById("form-servicio").reset();                      
            console.log(data);
            carga_servicios_empresa();
            

        }).fail(function(){     
            show_error_enid(".place_servicios_registro", "Error al registrar categoria" );
        });
        
    }   
    e.preventDefault();
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
	url_enid =  "http://enidservice.com/ranking_quality/ranking/index.php/opiniones/emp/"+get_id_empresa()+ "/"+ get_servicio()+ "/";
	url_fb =  "http://www.facebook.com/sharer.php?u="+url_enid;

	$("#url_copia_enlace").html(url_enid);
	$(".link_to_encuesta_fb").attr("href" ,  url_fb);	
	$(".twitter-share-button").attr("data-url" ,  url_enid);	
	
	
}
/**/
function get_url_servicio(){
	return url_servicio;
}
/**/  
function cambia_menu_nav(){
	
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
}  
/**/
function set_contenedor(a){
	var contenedores =  [".contenedor_rk" , ".contenedor_distribucion" , ".contenedor_comentarios_encuesta" ,  ".contenedor_graficos" , ".contenedor_personalizacion"];
	var z = 0; 
	for(var x in  contenedores){
		if(contenedores[x] ==  a ){
			$(contenedores[x]).show();
		}else{
			$(contenedores[x]).hide();
		}		
		z ++; 
	}			
}


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

/**/
function get_accion_servicio(){
	return accion_servicio;	
}
/**/
function set_accion_servicio(n){
	accion_servicio = n;
}
/**/
function copiarAlPortapapeles(id_elemento) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}
/**/
function get_descripcion_servicio(){
	return descripcion_servicio;
}
/**/
function set_descripcion_servicio(n){
	descripcion_servicio = n;
}
/**/
function editar_servicio(){
	$(".place_personalizacion").empty();
	set_contenedor(".contenedor_personalizacion");	
	url = now + "index.php/api/servicios/edicion/format/json/";
	$.ajax({
		url : url , 
		type :"GET",
		data: {servicio : get_servicio() },
		beforeSend: function(){
			show_load_enid(".place_personalizacion" , 1);		
		}
	}).done(function(data){

		console.log(data);	
		
		llenaelementoHTML(".place_personalizacion" , data);
		config_iniciar_personalizacion();	
		$(".text_nombre_servicio").click(muestra_editable_servicio);
		$(".text_descripcion_servicio").click(muestra_editable_descripcion);
		$("#s_nombre").click(set_solicitud_nombre);
		$("#s_mail").click(set_solicitud_email);
		$("#s_telefono").click(set_solicitud_telefono);
		/**/
		$(".input_name_servicio").blur(set_name_servicio);
		$(".area_text").blur(set_dsc_servicio);
		$(".nuevo_img_servicio").click(carga_form_categoria);

	}).fail(function(){
		show_error_enid(".place_personalizacion" , "Error al cargar formulario de edición.");
	});

}

/**/
function muestra_editable_servicio(){
	oculta_inputs_editable();
	$(".seccion_nombre_servicio").show();
	recorrepage("#seccion_servicio_servicio");	
}
/**/
function muestra_editable_descripcion(){
	oculta_inputs_editable();
	$(".text_descripcion").show();
	recorrepage("#seccion_descripcion_servicio");
}
/**/
function oculta_inputs_editable(){
	var  inputs = [".seccion_nombre_servicio" ,  ".text_descripcion"];
	for(var x in inputs){
		$(inputs[x]).hide();
		console.log(inputs[x]);
	}

}
/**/
function set_solicitud_nombre(){
	url =  now + "index.php/api/servicios/s_nombre/format/json/"; 

	$.ajax({
		url : url ,  
		type: "PUT", 
		data: {servicio : get_servicio() }, 
		beforeSend: function(){
			show_load_enid(".place_s_nombre" , 1 );
		}
	}).done(function(data){		
		show_response_ok_enid(".place_s_nombre" , "Solicitud actualizada!");
		
	}).fail(function(){
		show_error_enid(".place_s_nombre", "Error al actualizar nombre ");
	});
}
/**/
function set_solicitud_email(){
	url =  now + "index.php/api/servicios/s_email/format/json/"; 

	$.ajax({
		url : url ,  
		type: "PUT", 
		data: {servicio : get_servicio() }, 
		beforeSend: function(){
			show_load_enid(".place_s_e_mail" , 1 );
		}
	}).done(function(data){		
		show_response_ok_enid(".place_s_e_mail" , "Solicitud actualizada!");
		
	}).fail(function(){
		show_error_enid(".place_s_e_mail", "Error al actualizar nombre ");
	});
}
/**/
/**/
function set_solicitud_telefono(){
	url =  now + "index.php/api/servicios/s_telefono/format/json/"; 

	$.ajax({
		url : url ,  
		type: "PUT", 
		data: {servicio : get_servicio() }, 
		beforeSend: function(){
			show_load_enid(".place_s_telefono" , 1 );
		}
	}).done(function(data){		
		show_response_ok_enid(".place_s_telefono" , "Solicitud actualizada!");
		
	}).fail(function(){
		show_error_enid(".place_s_telefono", "Error al actualizar nombre ");
	});
}
/**/

function set_name_servicio(){

	name_servicio =  $(".input_name_servicio").val(); 
	if ($.trim(name_servicio.length  ) > 0 ){

		url =  now + "index.php/api/servicios/nombre_servicio/format/json/"; 	

		$.ajax({
			url : url ,  
			type: "PUT", 
			data: {servicio : get_servicio() , nombre_servicio : name_servicio }, 
			beforeSend: function(){
				show_load_enid(".place_name_servicio" , 1 );
			}
		}).done(function(data){		

			show_response_ok_enid(".place_name_servicio" , "Solicitud actualizada!");
			llenaelementoHTML(".text_nombre_servicio" ,  name_servicio);
			oculta_inputs_editable();

			
		}).fail(function(){
			show_error_enid(".place_name_servicio", "Error al actualizar nombre ");
		});


	}else{
		llenaelementoHTML( ".place_name_servicio" ,  "<span class='alerta_enid'>Registre un nombre para su servicio </span>");


	}
	
	

}
/**/
function set_dsc_servicio(){	
	descripcion =  $(".area_text").val(); 
	if ($.trim(descripcion.length  ) > 0 ){

		url =  now + "index.php/api/servicios/descripcion_servicio/format/json/"; 	

		$.ajax({
			url : url ,  
			type: "PUT", 
			data: {servicio : get_servicio() , descripcion : descripcion }, 
			beforeSend: function(){
				show_load_enid(".place_desc_servicio" , 1 );
			}
		}).done(function(data){		

			show_response_ok_enid(".place_desc_servicio" , "Solicitud actualizada!");
			llenaelementoHTML(".text_descripcion_servicio" ,  descripcion);
			oculta_inputs_editable();

			
		}).fail(function(){
			show_error_enid(".place_desc_servicio", "Error al actualizar nombre ");
		});
	}
}