<?=construye_header_modal('nuevo_servicio_modal', " Aspecto de su negocio a evaluar " );?>                                 
  <form class='form-servicio' id='form-servicio' action="<?=base_url('index.php/api/servicios/empresa/format/json')?>">                    
      <label class="control-label" for="servicio">
          Servicio 
      </label>  
      <input  name="servicio" id='servicio-i' type="text" 
        placeholder="Producto, servicio o aspecto de tu negocio a evaluar" class="form-control input-md">        
      <div class='place_nombre_categoria'>
      </div>      
      <br>    
      <?=btn_registrar_cambios_enid("button-registrar" , "" )?>        
  </form>  
   
  <?=n_row_12()?>
   <span class='place_servicios_registro'>
   </span>     
  <?=end_row()?>
<?=construye_footer_modal()?>  







