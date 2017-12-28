<div>
  <?=n_row_12()?>
    <h1 class='text_nombre_servicio'>
      <?=$data_servicio["nombre_servicio"]?>
    </h1> 

    <div id='seccion_servicio_servicio'>
    </div>
    <div class='seccion_nombre_servicio'>
      <div class="form-group">      
        <input 
        id="servicio" 
        name="servicio" 
        placeholder="Aspecto de su negocio a evaluar" 
        class="form-control input-md input_name_servicio" 
        required="" 
        value="<?=$data_servicio["nombre_servicio"]?>"
        type="text">
        <span class="help-block">
          Producto, servicio o aspecto de tu negocio a evaluar
        </span>        
      </div>
    </div>
    <div class='place_name_servicio'>
    </div>
  <?=end_row()?>  



<?=n_row_12()?>
<h4>
  Información que se solicitará a sus encuestados 
</h4>
<?=end_row()?>    
  
  <?=n_row_12()?>
    
    <label class="checkbox-inline" for="s_mail-0">
      <input name="s_nombre" id="s_nombre"  value="0" type="checkbox" <?=valida_check($data_servicio["s_nombre"])?>   >
      Nombre
    </label>
    
    <div class='place_s_nombre'>
    </div>
  <?=end_row()?>    


  <?=n_row_12()?>
    <label class="checkbox-inline" for="s_mail-0">
      <input name="s_mail" id="s_mail"  value="1" type="checkbox" <?=valida_check($data_servicio["s_email"])?>>
      e-mail
    </label>
    <div class='place_s_e_mail'>
    </div>
  <?=end_row()?>    

  <?=n_row_12()?>
    <label class="checkbox-inline" for="s_mail-0">
      <input name="s_telefono" id="s_telefono"  value="0" type="checkbox" <?=valida_check($data_servicio["s_telefono"])?>  >
      Teléfono
    </label>
    <div class='place_s_telefono'>
    </div>
    
  <?=end_row()?>    

    
  <?=n_row_12()?>    
    <p class='text_descripcion_servicio'>
      <?=validate_descripcion($data_servicio["descripcion"])?>      
    </p>
  <?=end_row()?>    

  <?=n_row_12()?>    
    <div id='seccion_descripcion_servicio'>
    </div>
    <div class="form-group text_descripcion " >
        <textarea class="form-control area_text" rows="3">
            <?=$data_servicio["descripcion"]?>      
        </textarea>
        
        
    </div> 

  <?=end_row()?>     

  <?=n_row_12()?>        
    <h3 class='nuevo_img_servicio'> 
      + imagen 
    </h3>
    <div>    
      <div class='col-lg-12'>
        
        <div class='row'>
          <div class='place_form_img'>
          </div>    
        </div>      
        <div class='row'>
          <?=btn_registrar_cambios_enid("btn_confirm_subir_img" , "btn_confirm_subir_img"  )?>
          
        </div>
        <div class='row'>
          <center>
            <div class='place_status_img' id='place_status_img'>
            </div>  
          </center>      
        </div>

      </div>
      <?=valida_imagen($info_imgs ,  $data_servicio["id_servicio"] )?>      
    </div>  
  <?=end_row()?>     
</div>



<style type="text/css">
  .text_descripcion ,.seccion_nombre_servicio{
    display: none;
  }
  .text_nombre_servicio:hover , .text_descripcion_servicio:hover , .nuevo_img_servicio:hover{
    cursor: pointer;
  }
  .nuevo_img_servicio{
    color: #038798;
    font-weight: bold;
  }
</style>
