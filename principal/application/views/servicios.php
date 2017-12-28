<link rel="stylesheet" type="text/css" href="<?=base_url('application/css/principal.css')?>">
<script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>




<?=$this->load->view("secciones/menu_servicios")?>















<?=n_row_12()?>
  
  <center>
    <div class='contenedor_load'>  
    </div>
  </center>
<?=end_row()?>

<div style='display:none;' class='contenedor_principal_encuestas'>


  <?=n_row_12()?>
        <div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 lateral-s">

              <div class="list-group">                
                
                <a href="" class="link_to_encuesta list-group-item text-center">
                  <h5 class="fa fa-chevron-right">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Ir a encuesta
                  </span>  
                </a>
                


            
                <a title='Pulsa para personalizar su encuesta'                   
                  class="editar_encuesta list-group-item text-center btn_config " >
                  <h5 class="fa fa-cog">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Personalizar encuesta 
                  </span>  
                </a>
                

                <a class="list-group-item  text-center btn_distribucion">
                  <h5 class="fa fa-paper-plane">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Distribuir
                  </span>
                </a>

                <a  class="list-group-item active text-center btn_rq">
                  <h5 class="fa fa-star">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Respuestas 
                  </span>
                </a>
                <a class="list-group-item text-center btn_graficos">
                  <h5 class="fa fa-bar-chart">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Gráficos
                  </span>
                </a>
                
                

              </div>
            </div>         




               
            <div class='col-lg-11 col-md-11 col-sm-11 col-xs-11'>  
              <?=$this->load->view("secciones/contenedor_central")?>
            </div>

        </div>
<?=end_row()?>

</div>

<div style='display:none;' class='contenedor_principal_inicio'>
  <div class='menu_inicio'>
  </div>
</div>

<?=$this->load->view("modal/modal_servicios")?>

<input type='hidden' name='id_empresa' class='id_empresa' value='<?=$id_empresa?>'>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script type="text/javascript" src="<?=base_url('application/js/principal.js')?>"></script>

<script type="text/javascript">  
  google.charts.load("current", {packages:["corechart"]});                    
</script>

<script type="text/javascript" src="<?=base_url('application/js/metricas.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/img/principal.js')?>"></script>




