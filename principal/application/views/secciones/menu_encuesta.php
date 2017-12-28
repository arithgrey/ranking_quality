<?=n_row_12()?>
        <div class="col-lg-12">
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
                

                <a class="list-group-item  text-center btn_distribucion">
                  <h5 class="fa fa-paper-plane">
                  </h5>
                  <span class='text_menu_info'>
                    <br/>
                    Distribuir evaluación
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
              <?=n_row_12()?>
                <div class='seccion_load_general'>
                </div>
              <?=end_row()?>
              
              <div style='display:none;'  class='contenedor_graficos'>

                <div class='botones_graficos'>                  
                  Consultar más gráficos
                  <i class="fa fa-bar-chart  btn_graficos" aria-hidden="true">
                  </i>
                </div>
                <div class='contenedor-exportar'>
                  <span class='exporta_info_encuesta'> 
                    Exportar 
                    <i class='fa fa-cloud-download'>
                    </i>
                  </span>
                </div>
                <div id='chart_div_barras' style='width: 100%; height: 100%;'>
                </div>
                <div class='info_completento_grafica' id='info_completento_grafica'>
                </div>

              </div>  



















              <div class='contenedor_comentarios_encuesta'>
              </div>  
              <div style='display:none;' class='contenedor_distribucion'>
                <?=n_row_12()?>
                  <div class='col-lg-12'>
                    <center>
                      <h1 style='color:#2874f0;'>
                        Comparta su encuesta entre sus contactos
                      </h1>
                      <a id='ir_encuesta' class='link_to_encuesta' href="">
                        Ir a la encuesta
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
                      <a id="ir_encuesta_fb" target="_blank"  class='link_to_encuesta_fb' href="http://www.facebook.com/sharer.php?u=">
                        Compartir en Facebook
                      </a>
                      


                      <a id='copiar_enlace' onclick="copiarAlPortapapeles('url_copia_enlace')">
                        Copiar enlace 
                          <span style='display:none;' class='url_copia_enlace' id='url_copia_enlace'>
                          </span>
                      </a> 

                    </center>
                  </div>  
                  
                <?=end_row()?>
              </div>


              <div class='contenedor_rk'>
                <div class='contenedor-exportar'>
                  <span class='exporta_info_encuesta'> 
                    Exportar 
                    <i class='fa fa-cloud-download'>
                    </i>
                  </span>
                </div>
                <div class='place_comentarios_ranking'>
                </div>  
                <center>
                  <h1 class='mensaje_ranking' style='font-weight: bold; font-size: 1.3em; color: #174163 !important;'>
                    Ranking de opiniones, servicio - 
                    <span class='nombre_servicio_actual'>
                    </span>
                  </h1>
                </center>
                <?=n_row_12()?>

                    <center>                                       
                        <div class='place_val_estrellas' id='place_val_estrellas'>
                        </div>
                    </center>
                <?=end_row()?>
              </div>  


              
            </div>

        </div>
<?=end_row()?>

<style type="text/css">

div.lateral-s{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.lateral-s div.list-group{
  margin-bottom: 0;
}
div.lateral-s div.list-group>a{
  margin-bottom: 0;
}
div.lateral-s div.list-group>a .glyphicon,
div.lateral-s div.list-group>a .fa {
  color: #5A55A3;
}
div.lateral-s div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.lateral-s div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.lateral-s div.list-group>a.active,
div.lateral-s div.list-group>a.active .glyphicon,
div.lateral-s div.list-group>a.active .fa{
  background-color: #166781;
  background-image: #166781;
  color: #ffffff;
}
div.lateral-s div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}
.list-group-item{
  font-size: .8em !important; 
}





/**/
.botones_graficos{
  text-align: right;
  background: #053753;
  padding: 1px;
  color: white;
  width: 100%;
}
.btn_graficos:hover{
  cursor: pointer;
}
.contenedor-exportar{
  text-align: right;
}
.exporta_info_encuesta{
    background: #ea2a61;
    color: white;
    padding: 3px;
}
.exporta_info_encuesta:hover{
  cursor: pointer;
}
  
</style>
