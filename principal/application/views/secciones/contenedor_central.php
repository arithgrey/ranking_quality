<?=n_row_12()?>
  <div class='seccion_load_general'>
  </div>
<?=end_row()?>

  
              <div style='display:none;' class='contenedor_personalizacion'> 
                <div class='place_personalizacion'>
                </div>
              </div>
              
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
                      <a id='ir_encuesta' class='link_to_encuesta' >
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
