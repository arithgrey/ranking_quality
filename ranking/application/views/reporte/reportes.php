
<style type="text/css">
  input[type="radio"] {
    display: none;
  }

  label {
    color: white;
  }

  .clasificacion {
    direction: rtl;
    unicode-bidi: bidi-override;
  }
  .input-start:hover , .s-estrella:hover{
    cursor: pointer;
  }
  label:hover,
  label:hover ~ label {
    color: black;
  }

  input[type="radio"]:checked ~ label {
    color: black;
  }
  .calificaciones-ocultas{
    display: none;
  } 
  .compartir_link{
    color: #166781;
    font-weight: bold;
    margin-left: 30px;
  }
    
  #ir_encuesta_fb {

      background: #4267b2;
      color: white;
      font-weight: bold;
      padding: 5px;
      font-size: .8em;
      text-decoration: none;
  }#ir_encuesta {
      background: #166781;
      color: white;
      font-weight: bold;
      padding: 5px;
      font-size: .8em;
      text-decoration: none;
  }
  .link_to_encuesta:hover{
    cursor: pointer;
  }
.text-mejora{
    color: white;
    font-weight: bold;
    font-size: 1.3em;
  }
.publicaciones-blog-home .fondo-publicacion-home {
  
    background: #ffffff;    
    overflow: hidden;
    height: 600px;    
    display: block;
    color: inherit;
    text-decoration: none;
    position: relative;

}
.publicaciones-blog-home .black {
  background: #068ffb;
}

.publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home{
    display: inline-block;
    width: 50%;
    overflow: hidden;
    height: 100%;
}
.publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home img {
  height: 100%;
  width: auto;
}
.publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home {
    display: inline-block;
    vertical-align: top;
    width: 49%;
    padding: 0 10px;
}

.publicaciones-blog-home-sm{
  display: none;

}
.text_info_servicio{
  color: white !important;
  font-weight: bold !important;
}
@media only screen and (max-width: 991px) {
  .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home img {
    display: none;
    width: 0%;     
  }
  .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home {
    display: none;    
    width: 0%;     
  }
  .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home {        
    width: 100%;    
  }

  


}
</style>




<?=n_row_12()?>
	<div class="publicaciones-blog-home">            
              <a class="black fondo-publicacion-home">
                <div class="img-publicacion-principal-home">
                  	<?=evalua_img_servicio($info_img, $id_servicio)?>					
                </div>
                <div class="contenido-publicacion-principal-home">
                  
                  <center>
                 		<h2>
                 			<?=$data_empresa["nombreempresa"]?>
                 		</h2> 	
                    
                    <p class='text_info_servicio'>
                    	<?=$data_servicio["descripcion"]?>	                  
                    </p>
                  </center>
                  



<div class='seccion_form_errores'>
  <div>       
    <form class='form-error' id='form-error' action='<?=base_url("index.php/api/reportes/reporteincidencia/format/json/")?>'>
      <input class='id_servicio' name='id_servicio' value='<?=$id_servicio?>'  type='hidden'> 
      <div class='enid-service-start' id='enid-service-start'>

        <center>        
          <h2 style='font-weight: bold; font-size: 1.3em; color: white !important;'>
              ¡Calíficanos!
            </h2>
        </center>       

          <center>          
            <div id="contenidor-ranking" >
               <seccion id='seccion-califica' class='seccion-califica'>
                <p class="clasificacion">
                    <input id="radio1" name="estrellas" value="5" class='input-start' type="radio">    
                    <label title='Danos 5 estrellas ' class='s-estrella'  style='font-size:3em;' for="radio1">★</label>    
                    
                    <input id="radio2" name="estrellas" value="4"  class='input-start'  type="radio">    
                    <label title='Danos 4 estrellas ' class='s-estrella' style='font-size:3em;'  for="radio2">★</label>    

                    <input id="radio3" name="estrellas" value="3" class='input-start'  type="radio">    
                    <label title='Danos 3 estrellas ' class='s-estrella'  style='font-size:3em;'  for="radio3">★</label>    
                    
                    <input  id="radio4" name="estrellas" value="2" class='input-start'   type="radio">    
                    <label title='Danos 2 estrellas ' class='s-estrella'  style='font-size:3em;'  for="radio4">★</label>    

                    <input id="radio5" name="estrellas" value="1"  class='input-start'  type="radio">    
                    <label title='Danos 1 estrellas ' class='s-estrella'  style='font-size:3em;' for="radio5">★</label>

                    <input name="emp" type='hidden' value="<?=$data_empresa["idempresa"]?>"  class='input-start'>    
                  </p>
              </seccion>
            </div>
            <div class='place_val_estrellas' id='place_val_estrellas'>
            </div>
          </center>

        
      </div>
      <div class="form-group">                    
          <div class='calificaciones-ocultas'>            
                    <input class="form-control input-sm" value="<?=base_url()?>" name="pagina_error" id="pagina_error" type="hidden" placeholder="enidservice.com">                 
                  </div>
              <center>
                <span class='text-mejora'>
                    ¿Que mejorarías de <?= strtolower($data_servicio["nombre_servicio"] )?> ?
          </span>
        </center>
                <center>  
                    <div class='descripcion_incidencia' id='descripcion_incidencia'>        
                      <textarea name='descripcion' id='descripcion' class='descripcion form-control'
                        rows="2" >
                      </textarea>       
                      <div class='place_reporte_incidencia'>
                      </div> 
                      <?=valida_input_nombre($data_servicio)?>   
                      <?=valida_input_tel($data_servicio)?>      
                      <?=valida_input_correo($data_servicio)?>



                    </div>
                </center>
          <input type='hidden' name='tipo_template' value='<?=$data_empresa["tipo"]?>'>          
          <input type='hidden' class='url_next_info' value='<?=$data_servicio['url_next']?>'>                    
        </div>

             <center>               
              <?=btn_registrar_cambios_enid("btn_registar" , "btn_registar")?>              
             </center>
    </form>
  </div>
</div>




  <center>
    <div class='place_registro' id='place_registro'>
    </div>
  </center> 





                  
                </div>              
              </a>                          
  </div>


<?=end_row()?>


<?=n_row_12()?>
	<label class='compartir_link' id='compartir_link'>
		¿Conoces a alguien más que deba calificarnos? 
	</label>  	
<?=end_row()?>
<?=n_row_12()?>
	<div class='col-lg-12'>
	    <a id='ir_encuesta' onclick="copiarAlPortapapeles('url_copia_enlace')" class='link_to_encuesta'>
	      Copiar enlace 
	      	<span style='display:none;' class='url_copia_enlace' id='url_copia_enlace'>
			</span>
	    </a> 
	        <a id="ir_encuesta_fb" target="_blank"  class='link_to_encuesta_fb' href="http://www.facebook.com/sharer.php?u=">
	      Compartir en facebook
	    </a>

      <a id='ir_encuesta_tw'
          href="https://twitter.com/share" 
          class="twitter-share-button" 
          data-url="" 
          data-size="large"
          data-text="Evalua nuestros servicios!">
          Tweet
      </a> 
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
      </script>

    </div>           
<?=end_row()?>
<script type="text/javascript" src="<?=base_url('application/js/reportes/reporte.js')?>"></script>
