<?php 
	
	$l =""; 
	$b = 1;	
	$uno = 0;
	$dos = 0;
	$tres = 0;
	$cuatro = 0;
	$cinco = 0;


	foreach ($info_estrellas["info_general"] as $row){

		$uno = $row["1_estrella"];
		$dos = $row["2_estrella"];
		$tres = $row["3_estrella"];
		$cuatro = $row["4_estrella"];
		$cinco = $row["5_estrella"];
	}
	
	$title=" personas han calificados tus servicios con";
	$title_1 = "  title=' " . $uno . $title. " una estrella" . " pulsa para ver opiniones  ' id='1_estrallas' ";
	$title_2 = "  title=' " . $dos . $title. " dos estrella" . " pulsa para ver opiniones  ' id='2_estrallas' ";
	$title_3 = "  title=' " . $tres . $title. " tres estrella" . " pulsa para ver opiniones  ' id='3_estrallas' ";
	$title_4 = "  title=' " . $cuatro . $title. " cuatro estrella" . " pulsa para ver opiniones  ' id='4_estrallas' ";
	$title_5 = "  title=' " . $cinco . $title. " cinco estrella" . " pulsa para ver opiniones  ' id='5_estrallas' ";
	


?>



	<table>		
		<tr <?=$title_5?> class="table_enid_service_header_ranking">			
			<?=get_td( "<span class='calificacion_rank' id='5'>" .$cinco . "</span>" ,
			  "class='indicador' " )?>
			<?=get_td( "<label class='calificacion_rank  ' id='5'   style='font-size:2em;'>★★★★★</label>    
			 	"); ?>	
			 
		</tr>	


		<tr <?=$title_4?>  class="table_enid_service_header_ranking">			
			<?=get_td( "<span class='calificacion_rank' id='4'>" .$cuatro . "</span>" ,
			  "class='indicador'   " )?>
			<?=get_td( "<label class='s-estrella calificacion_rank'  id='4'  style='font-size:2em;'>★★★★</label>   
			 	"); ?>	
			 
		</tr>	

		<tr <?=$title_3?>  class="table_enid_service_header_ranking">			
			<?=get_td( "<span class='calificacion_rank' id='3'>
						" .$tres . "
						</span>" ,
			  "class='indicador'   " )?>
			<?=get_td( "<label class='s-estrella calificacion_rank'  id='3'   style='font-size:2em;'>★★★</label>   
			 	"); ?>	
			 
		</tr>	

		<tr <?=$title_2?>  class="table_enid_service_header_ranking">			
			<?=get_td( "<span class='calificacion_rank' id='2'>" .$dos . "</span>" ,
			  "class='indicador'   " )?>
			<?=get_td( "<label class='s-estrella calificacion_rank' id='2'  style='font-size:2em;'>★★</label>   
			 	"); ?>				 
		</tr>	
		<tr <?=$title_1?>class="table_enid_service_header_ranking">			
			<?=get_td( "<span class='calificacion_rank' id='1'>" .$uno . "</span>" ,
			  "class='indicador'   " )?>
			<?=get_td( "<label class='s-estrella calificacion_rank '  id='1'  style='font-size:2em;'>★</label> "); ?>	
			 
		</tr>	
	</table>

