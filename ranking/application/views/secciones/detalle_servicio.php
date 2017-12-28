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
                    <h3>
                    	<?=$data_servicio["nombre_servicio"]?>
                    </h3>
                    <p class='text_info_servicio'>
                    	<?=$data_servicio["descripcion"]?>	                  
                    </p>
                  </center>
                  
                  <?=$this->load->view("secciones/seccion_calificacion")?>
                </div>              
              </a>                          
</div>


<?=end_row()?>
