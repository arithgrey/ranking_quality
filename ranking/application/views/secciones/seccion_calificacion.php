
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
					<div class="input-group" title='Dejanos tu e-mail para que recibas las mejores ofertas'>
                        <span class="input-group-addon" id="basic-addon1">
                               email @
                        </span>
                        <input type="email" name='email_contacto' class="email_contacto form-control input-sm" id="email_contacto" >                                        
                    </div>
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



