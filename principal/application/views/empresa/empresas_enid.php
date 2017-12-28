<script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>

<style type="text/css">

.tab_enid_w{

color: white;
}
.info-dia-p:hover{
    cursor: pointer;
}
.info-d:hover{
    cursor: pointer;    
}

.info-dia-p , .info-d{
    font-weight: bold;
    color: #0C3D45;
}
.contenedor_inf{
    overflow: auto;
}

.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}
.menu-corto{
  display: none;
}
.btn-servicio-hidden{
  display: none;
}
.menu-largo{
  //width: 40%;
}
.img_categoria_place{
  width: 250px;
  
}
@media (max-width: 768px) {
  .dropdown-menu-large {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-large > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-large .dropdown-header {
    padding:2px 10px !important;
  }
  .menu-largo{
    display: none;
  }
  
  .menu-corto{
    display: block;

  }
  .btn-servicio-hidden{
    display: block;
  }

}

    body{
      font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif !important;
    }
    .nombre_servicio_actual{
      color: #12aafc;
    }  
    .navbar-default:hover{
      cursor: pointer;
    }
    .resumen_saldos{
      background: #2196f3;
      margin-left: 1px;
      font-size: .85em;
      padding: 2px;
      color: white;
      font-weight: bold;
    }
    .alerta_servicio{
      background: #b5134a !important;
    }
    .text-total{
      font-size: .9em;
    }
    .seccion-icono{      
      background: #166781;
      padding: 5px;
      color: white;
      text-decoration: none;
      font-size: .9em;
      margin-left: 1px;
    }
    .btn_mn{

      background: #2196f3;
      padding: 3px;
      color: white;
    }
    .servicio_en_activo_enid{
      background: #2196f3 !important;  
    }
    .nombre_servicio_a_transferir{
        background: #0a67b1;
        font-weight: bold;
        color: white;
    }
    .mover_registro:hover, 
    .editar_registro:hover, 
    .egresos-btn:hover , 
    .ingresos-btn:hover, 
    .agregar-categoria:hover,
    .comparativa-btn:hover,
    .balance-btn:hover ,
    .nuevo_ingreso_btn:hover ,
    .tranfiere_ingreso_btn:hover, 
    .menu_servicios_enid:hover ,
    .btn_mn:hover , 
    .balance-btn:hover,
    .eliminar_registro:hover{
      cursor: pointer;
    }   
    .las_servicios{
      background: #166781;
      padding: 5px;
      color: white;
      text-decoration: none;
      font-size: .9em;
      margin-left: 1px;
    }       
    .menu_servicios_enid{
      background: #022631;
      padding: 5px;
      color: white;
      text-decoration: none;
      font-size: .9em;
      margin-left: 1px;
    }
    .ingresos-btn,
    .egresos-btn,
    .balance-btn,
    .comparativa-btn,
    .servicio_btn,
    .nuevo_ingreso_btn,
    .tranfiere_ingreso_btn , 
    .balance-btn {
      background: #022631;
      padding: 5px;
      color: white;
      text-decoration: none;
      font-size: .9em;
    }
    .tranfiere_ingreso_btn{
      margin-left: 1px;
    }
    .servicio_btn{
      background: #068ffb !important;
      margin-left: 1px;     
    }
    .agregar-categoria{
      font-weight: bold;
      font-size: .9em;
      text-align: left;
    }    
    .contendor-servicio-info{
      overflow-y:scroll; 
      overflow-x:hidden; 
      height: 400px;
    }    
    .contenedor_principal_secciones{
      height: 620px;
      overflow-x: auto;
    }.selectec_class{
      background: #068ffb;
    }
    .icono_servicios,  .nombre_servicio_icono{
      display: inline-table;
    }
    .menu-l , .nombre_servicio_icono{
      background: #068ffb !important;  
      padding: 3px;
      color: white !important;
    }

    @media only screen and (max-width: 991px) {
      .servicios-menu{                
        overflow-y:auto;
      }
      .nombre_servicio_sm{
        background: #068ffb !important;  
      }
      .text_menu_info{
        display: none;
      }
    }    
    #ir_encuesta{
      background: #166781;
      color: white;
      font-weight: bold;
      padding: 2px;  
      border-radius: 3px;
      font-size: .8em;
      text-decoration: none;
    }
    #ir_encuesta_fb{
      background: #4267b2;
      color: white;
      font-weight: bold;
      padding: 2px;  
      border-radius: 3px;
      font-size: .8em;
      text-decoration: none;
    }#copiar_enlace{
      background: #d9534f;
      color: white;
      font-weight: bold;
      padding: 2px;  
      border-radius: 3px;
      font-size: .8em;
      text-decoration: none;
    }
    #copiar_enlace:hover{
      cursor: pointer;
    }

    #ir_encuesta , #ir_encuesta_fb, #ir_encuesta_tw, #copiar_enlace{
      display: inline-table;
    }

    .contenedor_comentarios{
  height: 250px;
  overflow: auto;
}
.testimonial{
    margin-bottom: 10px;
}

    .testimonial-section {
        width: 100%;
        height: auto;
        padding: 15px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #fff;
    }
    .testimonial-section:after {
        top: 100%;
        left: 50px;
        border: solid transparent;
        content: " ";
        position: absolute;
        border-top-color: #fff;
        border-width: 15px;
        margin-left: -15px;
    }

    .testimonial-desc {
        margin-top: 20px;
        text-align:left;
        padding-left: 15px;
    }
        .testimonial-desc img {
            border: 1px solid #f5f5f5;
            border-radius: 150px;
            height: 70px;
            padding: 3px;
            width: 70px;
            display:inline-block;
            vertical-align: top;
        }

        .testimonial-writer{
            display: inline-block;
            vertical-align: top;
            padding-left: 10px;
        }

            .testimonial-writer-name{
                font-weight: bold;
            }

            .testimonial-writer-designation{
                font-size: 85%;
            }

            .testimonial-writer-company{
                font-size: 85%;
                font-weight: bold;

            }
    /*---- Outlined Styles ----*/
    .testimonial.testimonial-default{
        
    }
        .testimonial.testimonial-default .testimonial-section{
            border-color: #777;
        }

            .testimonial.testimonial-default .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default .testimonial-desc{
            
        }

            .testimonial.testimonial-default .testimonial-desc img{
                border-color: #777;
            }

            .testimonial.testimonial-default .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary{
        
    }
        .testimonial.testimonial-primary .testimonial-section{
            border-color: #337AB7;
            color: #286090;
            background-color: rgba(51, 122, 183, 0.1);
        }

            .testimonial.testimonial-primary .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary .testimonial-desc{
            
        }

            .testimonial.testimonial-primary .testimonial-desc img{
                border-color: #337AB7;
            }

            .testimonial.testimonial-primary .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info{
        
    }
        .testimonial.testimonial-info .testimonial-section{
            border-color: #5BC0DE;
            color: #31b0d5;
            background-color: rgba(91, 192, 222, 0.1);
        }

            .testimonial.testimonial-info .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info .testimonial-desc{
            
        }

            .testimonial.testimonial-info .testimonial-desc img{
                border-color: #5BC0DE;
            }

            .testimonial.testimonial-info .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success{
        
    }
        .testimonial.testimonial-success .testimonial-section{
            border-color: #5CB85C;
            color: #449d44;
            background-color: rgba(92, 184, 92, 0.1);
        }

            .testimonial.testimonial-success .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success .testimonial-desc{
            
        }

            .testimonial.testimonial-success .testimonial-desc img{
                border-color: #5CB85C;
            }

            .testimonial.testimonial-success .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning{
        
    }
        .testimonial.testimonial-warning .testimonial-section{
            border-color: #F0AD4E;
            color: #d58512;
            background-color: rgba(240, 173, 78, 0.1);
        }

            .testimonial.testimonial-warning .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning .testimonial-desc{
            
        }

            .testimonial.testimonial-warning .testimonial-desc img{
                border-color: #F0AD4E;
            }

            .testimonial.testimonial-warning .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger{
        
    }
        .testimonial.testimonial-danger .testimonial-section{
            border-color: #D9534F;
            color: #c9302c;
            background-color: rgba(217, 83, 79, 0.1);
        }

            .testimonial.testimonial-danger .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger .testimonial-desc{
            
        }

            .testimonial.testimonial-danger .testimonial-desc img{
                border-color: #D9534F;
            }

            .testimonial.testimonial-danger .testimonial-writer-name{
                color: #D9534F;
            }

    /*---- Filled Styles ----*/
    .testimonial.testimonial-default-filled{
        
    }
        .testimonial.testimonial-default-filled .testimonial-section{
            color: #fff;
            border-color: #777;
            background-color: #777;
        }

            .testimonial.testimonial-default-filled .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-default-filled .testimonial-desc img{
                border-color: #777;
                background-color: #777;
            }

            .testimonial.testimonial-default-filled .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary-filled{
        
    }
        .testimonial.testimonial-primary-filled .testimonial-section{
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

            .testimonial.testimonial-primary-filled .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-primary-filled .testimonial-desc img{
                border-color: #2e6da4;
                background-color: #337ab7;
            }

            .testimonial.testimonial-primary-filled .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info-filled{
        
    }
        .testimonial.testimonial-info-filled .testimonial-section{
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }

            .testimonial.testimonial-info-filled .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-info-filled .testimonial-desc img{
                border-color: #46b8da;
                background-color: #5bc0de;
            }

            .testimonial.testimonial-info-filled .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success-filled{
        
    }
        .testimonial.testimonial-success-filled .testimonial-section{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

            .testimonial.testimonial-success-filled .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-success-filled .testimonial-desc img{
                border-color: #4cae4c;
                background-color: #5cb85c;
            }

            .testimonial.testimonial-success-filled .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning-filled{
        
    }
        .testimonial.testimonial-warning-filled .testimonial-section{
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

            .testimonial.testimonial-warning-filled .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-warning-filled .testimonial-desc img{
                border-color: #eea236;
                background-color: #f0ad4e;
            }

            .testimonial.testimonial-warning-filled .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger-filled{
        
    }
        .testimonial.testimonial-danger-filled .testimonial-section{
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
        }

            .testimonial.testimonial-danger-filled .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-danger-filled .testimonial-desc img{
                border-color: #d43f3a;
                background-color: #D9534F;
            }

            .testimonial.testimonial-danger-filled .testimonial-writer-name{
                color: #D9534F;
            }
            .calificacion_comentario{
              font-size: 1.2em;
              color: #0095ff;
            }
            .calificacion_comentario_r{
              font-size: 1.2em;
              color: orange;
            }

.calificacion_rank:hover{
  cursor: pointer;
}
.indicador{
  font-size: 2em;
  font-weight: bold;
    background: #10a9fc;
    color: white;
    margin-right: 10px;
    padding: 5px;
}
.seccion-califica p {
  text-align: center;
}

.seccion-califica label {
  font-size: 50px;
}

input[type="radio"] {
  display: none;
}

label {
  color: #10A9FC;
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
  color: #10A9FC;
}

input[type="radio"]:checked ~ label {
  color: #10A9FC;
}

.calificaciones-ocultas{
    display: none;
}
.text-mejora{
    color: #078AEA;
    font-weight: bold;
    font-size: 1.3em;
}
.form-servicio label , .lb-enid{
        font-weight: bold;
}
</style>










<?=$this->load->view("secciones/menu_servicios")?>
<div style='display:none;' class='contenedor_principal_encuestas'>
  <?=$this->load->view("secciones/menu_encuesta")?>
</div>
<div style='display:none;' class='contenedor_principal_inicio'>
  <center>
    <div class="container-fluid">
      
       
       
      <h1 class="marquee-heading">  
        Bienvenido 
      </h1>
      
        <a  title='Pulsa para cargar nuevos servicios' 
            data-toggle='modal' 
            data-target='#nuevo_servicio_modal' 
            class="agregar_servicio btn btn-default ">
          Cargue su primer encuesta de valuación          
        </a>
      
      
    </div>
  </center>

</div>
<?=$this->load->view("modal/modal_servicios")?>

<input type='hidden' name='id_empresa' class='id_empresa' value='<?=$id_empresa?>'>
<script type="text/javascript" src="<?=base_url('application/js/principal.js')?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">  
  google.charts.load("current", {packages:["corechart"]});                    
</script>

<script type="text/javascript" src="<?=base_url('application/js/metricas.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/img/principal.js')?>"></script>




