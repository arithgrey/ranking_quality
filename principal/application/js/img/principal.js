function carga_form_categoria(){

    set_flag_img(0);        
    set_formData(null);

    url =  "../img/index.php/api/img_controller/form_img_categoria/format/json/";  
        $.ajax({
        url :  url , 
        type : "GET" , 
        data: {}, 
        beforeSend: function(){
            show_load_enid(".place_form_img" , "... " , 1);         
        }
    }).done(function(data){                 

        llenaelementoHTML(".place_form_img" , data);
        $(".imagen_categoria").change(upload_imgs_enid_pre);        


    }).fail(function(){
        show_error_enid(".place_form_img" , "Error al transferir " );               
    });

}
/**/
function upload_imgs_enid_pre(){    
    show_load_enid(".place_img_registrada", "Cargando ... " , 2);                 
    var i = 0, reader, file;        
    file = this.files[i];
    reader = new FileReader();
    reader.onloadend = function(e){
        
        $(".imagen_categoria").hide();
        $(".contenedor_imagen_servicio").empty();
        mostrar_img_upload(e.target.result , 'contenedor_imagen_servicio');                    
        var formData = new FormData(document.getElementById("form_img_categoria"));    
        console.log(formData);
        set_formData(formData);
        set_flag_img(1);        
        $(".place_img_registrada").empty();        
        $(".btn_confirm_subir_img").show();
        $(".btn_confirm_subir_img").click(registra_img_categoria);

    };
    reader.readAsDataURL(file);

}
/**/
function registra_img_categoria(){
    
    $(".btn_confirm_subir_img").hide();    
    formData.append("id_categoria", get_servicio() );
    url = "../img/index.php/api/archivo/imgs";
    
    $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data:  get_formData() ,
            cache: false,
            contentType: false,
            processData: false , 
            beforeSend : function(){
               show_load_enid(".place_status_img" , 1);                
            }
    }).done(function(data){

        console.log(data);
        set_flag_img(0);  
        set_formData(null);
        show_response_ok_enid(".place_status_img", "Imagen registrada con éxito.");      
        
        
        url =  "../ranking/index.php/opiniones/emp/"+get_id_empresa()+"/"+get_servicio()+"/";
        redirect(url)

    }).fail(function(){
        show_error_enid(".place_img_registrada" , "Falla al actualizar al cargar la imagen" );   
    });    
}        
/**/     
function config_iniciar_personalizacion(){
    $(".btn_confirm_subir_img").hide();
    set_flag_img(0);        
    set_formData(null);
}