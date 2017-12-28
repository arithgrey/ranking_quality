var  flag_calificacion = 0; 
$(document).on("ready", function(){        
    $(".input-start").click(asigna_calificacion);
    $(".form-error").submit(registra_incidencia);    
    set_url_servicio(location.href);

});
/**/
/**/
function get_calificacion(){
    return flag_calificacion;
}
/**/
function set_calificacion(new_flag_calificacion){
    flag_calificacion = new_flag_calificacion;
}
/**/
/**/
function registra_incidencia(e){
    
    url =  $(".form-error").attr("action");            
    console.log(url);
    valida_calificacion();
    if (get_calificacion() > 0 ){        
        flag_form =  valida_text_form("#descripcion" , ".place_reporte_incidencia" , 5  , "Texto  " ); 
        if (flag_form ==  1  ){        
            $(".place_reporte_incidencia").empty();            

            data_send =  $(".form-error").serialize()+ "&" + $.param({"num_calificacion" : get_calificacion() });
                        
            $.ajax({
                url: url ,
                type: "POST",          
                data: data_send,
                beforeSend: function(){
                show_load_enid(".place_registro" , "Registrando tu solicitud ... " , 1);        
                }

            }).done(function(data){    

                console.log(data);                               
                show_response_ok_enid(".place_registro" , "Gracias por ayudarnos a mejorar tus servicios");    
                document.getElementById("form-error").reset();
                set_calificacion(0);

                posterios_a_encuesta();


            }).fail(function(){
                show_error_enid(".place_registro"  , "Error en la carga reporte al administrador " );       
            });    

        }
        
    }
    e.preventDefault();
}
/**/
function asigna_calificacion(e){  
    
    n_calificacion  =  e.target.value;         
    set_calificacion(n_calificacion);    
    $("#contenidor-ranking").removeClass("animated infinite bounce");
}
/**/
function valida_calificacion(){
    /**/    
    if (get_calificacion() == 0 ){
        $("#contenidor-ranking").addClass("animated infinite bounce");
        recorrepage("#enid-service-start");         
        llenaelementoHTML(".place_val_estrellas" , "<span class='msj-calificanos'> <strong> Ayudanos a mejorar nuestros servicios, califícanos.!</strong> </span>");
        return get_calificacion();
    }else{

        $("#contenidor-ranking").removeClass("animated infinite bounce");
        $(".place_val_estrellas").empty();
        return get_calificacion();   
    }
}
/**/
function posterios_a_encuesta(){

    url_next_info =  $(".url_next_info").val();
    url_next_info =  $.trim(url_next_info);

    
    if ($(".in_session").val() ==  1 ) {
        redirect("../../../../../../");
    }
    if (url_next_info.length > 0  ) {

        setTimeout(function(){
            redirect(url_next_info);
        }, 1000);                        
    }else{
        recorrepage("#compartir_link");
    }
    
    
}
function set_url_servicio(url){
    
    $(".twitter-share-button").attr("data-url" ,  url);    
    $(".link_to_encuesta").attr("url_copy" , url);    
    url_enid =  url;
    url_fb =  "http://www.facebook.com/sharer.php?u="+url;
    $(".link_to_encuesta_fb").attr("href" ,  url_fb);
    $("#url_copia_enlace").html(url);
}
function copiarAlPortapapeles(id_elemento) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}