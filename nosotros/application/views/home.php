<style type="text/css">
.img-l{
        display: none;
    }
@media only screen and (max-width: 991px) {
    .img-l{
        display: block;
    }
    .img-s{
        display: none;
    }
}
</style>

<body id="page-top" class="index">
    
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div >            
            <div class="navbar-header page-scroll"> 

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">
                        
                    </span> 
                    Menu 
                    <i class="fa fa-bars">
                    </i>
                </button>
                <a class="navbar-brand " href="<?=base_url()?>">
                    Ranking quality
                </a>
            </div>            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?=evalua_menu_principal($in_session)?>
            </div>
          
        </div>
        
    </nav>


    
    <section class="resumen" >
        <center>
            <h1 class='text-info-principal'>
                Cree encuestas e identifique  cuando, introducir, prevenir o corregir acciones, producto o servicios que están afectando  su  negocio. 
            </h1>   
             
        </center>
        
    </section>

    <?=$this->load->view("grafica_rank")?>
    <?=n_row_12()?>    
        <center>
            <h3>
                Mida los aspectos que más importan de su negocio. 
            </h3>
            <div class='contenedor_img_presentacion_2'>            
                <span>
                     Su capacidad en el mercado puede mejorar entendiendo a sus consumidores, de esta manera
                                     sabrá cuando introducir, prevenir o corregir acciones, 
                                     productos o servicios 
                                    que están afectando al cliente. 
                                    Captar, cuantificar y analizar la opinión que tienen sus clientes es una tarea 
                                    que puede realizar en 3 pasos con ranking quality. 
                </span>
            </div>
            <a class='page-scroll btn_detalle' href="#funciones">
                <button class='btn btn-default '>
                    Vea como funciona
                </button>
            </a>            
        </center>        
    <?=end_row()?>


    <br>

    <img class='img-l' width='100%;' src="<?=base_url('application/img/v3/1.jpg')?>">   
    <div class='contenedor_img_presentacion'>            
        <center>
            <img class='img-s' width='100%;' src="<?=base_url('application/img/v3/1.jpg')?>">   
            <h3>
                 ¿Tiene un restaurante?
            </h3>
            <span>                
                Pida a sus clientes que evalúen sus  servicios  
                <strong>
                puede hacerlo  en redes sociales, por correo electrónico o bien su  personal puede  recopilar esta información
                </strong> directamente con ellos. 
            </span>
            <br>
            <a class='page-scroll btn_detalle' href="#funciones">
                <button class='btn btn-default '>
                    Vea como funciona
                </button>
            </a>
            <br>    
        </center>    
    </div>

    <img class='img-l' width='100%;' src="<?=base_url('application/img/v3/3.jpg')?>">   
    <br>
    <div class='contenedor_img_presentacion'>
        <center>            
            <img class='img-s'  width='100%;' src="<?=base_url('application/img/v3/3.jpg')?>">   
            <h3>
                ¿Imparte cursos? 
            </h3>            
            <span>
                Al final de la practica 
                <strong>
                    envié por correo la evaluación de calidad de sus servicios
                </strong>
                 y 
                obtenga información que podría encaminar su negocio a la mejora continua. 
                 Puede enviar sus encuestas a través de una URL por correo electrónico, redes sociales o enlazar su   sitios  web  con estas, las respuestas de cada encuesta  se  registrarán  en  su cuenta.
            </span>
            <br>
            <a class='page-scroll btn_detalle' href="#funciones">
                <button class='btn btn-default '>
                    Vea como funciona
                </button>
            </a>
            
        </center>        
    </div>


    <br>
    <img class='img-l' width='100%;' src="<?=base_url('application/img/v3/2.jpg')?>">   
    <div class='contenedor_img_presentacion'>
        <center>            
            <img class='img-s'  width='100%;' src="<?=base_url('application/img/v3/2.jpg')?>">   
            <h3>
                ¿Esta por crear o  lanzar un  nuevo producto o servicio?
            </h3>            
            <span>
                Diseñe un  producto ideal para  sus  clientes con base en sus exigencias. 
            </span>
            <br>
            <a class='page-scroll btn_detalle' href="#funciones">
                <button class='btn btn-default '>
                    Vea como funciona
                </button>
            </a>            
        </center>        
    </div>


    <div id='funciones'>
    </div>
    <div class='funciones' id=''>

    <div class='contenedor_img_presentacion'>
        <center>                        
            <h1 style='color:#0569FF;'>
                Qué puede hacer con Ranking Quality 
            </h1>                        
        </center>        
    </div>


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                 Agregue evaluaciones                 
            </h5>                    
            <span>
                Realice encuestas desde la sección GENERADOR con esta herramienta podrá  ingresar  texto, cargar  imágenes, pedir a sus evaluadores que proporcionen sus datos de contacto,  así como también  incluir enlaces a otros sitios web que detallen  sus productos o servicios.
            </span>    

            <img  class='img-s' width='100%;' src="<?=base_url('application/img/info_sistema/1.jpg')?>">

        </center>        
    </div>
    <img  class='img-l' width='100%;' src="<?=base_url('application/img/info_sistema/1.jpg')?>">


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Haga que su empresa adquiera información rápidamente 
            </h5>                    
            <span>
                La forma más rápida y versátil de distribuir sus encuestas es  recopilar respuestas  mediante un enlace web, con esto podrá captar información de forma presencial, en  redes sociales, su página web,  blog, correo electrónico o algún otro medio de este tipo. 
            </span>    
            <?=$this->load->view("socials_imgs")?>
        </center>        
    </div>


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Empleé sus evaluaciones cuantas veces quiera  
            </h5>                    
            <span>
                Tiene la posibilidad de cargar cada encuesta y está ser evaluada por cuantas personas desee,  
                no tienen caducidad así que podrán  
                ser resueltas las veces que sea necesario  durante su periodo de contratación. 
            </span>    
            <?=$this->load->view("evaluaciones");?>
        </center>        
    </div>


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Analice sus resultados 
            </h5>                    
            <span>
                Puede ver una vista resumida de la información recopilada en cada evaluación, buscar respuestas, navegar entre encuestas, crear gráfico  y descargar  los resultados en formatos múltiples.
            </span>    
            <div class='row'>
                <div class='col-lg-12'>
                    <label class='img-s'>
                        Recopilando información de valor  
                    </label>
                    <img class='img-s' style='width:100%;' src="<?=base_url('application/img/info_sistema/3.jpg')?>">
                </div>
                <div class='col-lg-12'>
                    <label class='img-s'>
                        Viendo el resumen 
                    </label>
                    <img class='img-s'  style='width:100%;' src="<?=base_url('application/img/info_sistema/2.jpg')?>">
                </div>    
            </div>
        </center>        
    </div>
    <label class='img-l'>
        Recopilando información de valor  
    </label>
     <img class='img-l' style='width:100%;' src="<?=base_url('application/img/info_sistema/3.jpg')?>">
     <label class='img-l'>
        Viendo el resumen 
    </label>
     <img class='img-l' style='width:100%;' src="<?=base_url('application/img/info_sistema/2.jpg')?>">

     <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Descargue su lista de contactos 
            </h5>                    
            <span>
                Si en su encuesta incluye la posibilidad de recopilar información de contacto 
                como teléfonos, correos o nombres, tendrá acceso descargar 
                esta información en documentos Excel de Microsoft. 
            </span>    
            <?=n_row_12()?>
                <a><i id="social-fb" class="fa fa-cloud-download fa-3x social"></i></a>                
            <?=end_row()?>
        </center>        
    </div>




    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Puede importar sus encuestas
            </h5>                    
            <span>
                Puede cargar encuesta que provenga de otros medios, como un documento Excel de Microsoft esto mientras se ajuste al formato de carga que está establecido por Ranking Quality.
            </span>    

            <?=n_row_12()?>
                <a><i id="social-fb" class="fa fa-cloud-upload fa-3x social"></i></a>
                
            <?=end_row()?>

        </center>        
    </div>



     <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Sus encuestas y respuestas son anónimas 
            </h5>                    
            <div class='alert alert-info text-lg'>
                <span>
                    Recopilará  información la cual será anónima para otros usuarios, el seguimiento de direcciones IP, de direcciones de correo electrónico así como la opinión de cada encuestado quedará unicamente  almacenada en su cuenta.
                </span>    
            </div>
            <?=n_row_12()?>
                <a><i id="social-fb" class="fa fa-lock fa-3x social"></i></a>                
            <?=end_row()?>


        </center>        
    </div>


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Privacidad  de su información
            </h5>                    
            <span>
                No somos empresa de mercadotecnia ni agencia de publicidad por lo que su información es privada y ésta queda 
                unicamente a su disposición.
            </span>  
            <?=n_row_12()?>
                <a><i id="social-fb" class="fa fa-shield fa-3x social"></i></a>                
            <?=end_row()?>

  
        </center>        
    </div>


    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
                Nos encargamos de perfeccionar su idea.    
            </h5>                    
            <span>
                Si necesita  nuevas funcionalidades dentro de Ranking  Quality sólo debes tomar algunos minutos para hablar con nuestro equipo o publicarnos cómo le sería más fácil emplear nuestro producto.  
            </span>    
            <?=n_row_12()?>
                
                <?=btn_call_to_action(1, "" , "" , "" , "Evalué esta presentación  ★★★★" ,  "http://enidservice.com/ranking_quality/ranking/index.php/opiniones/emp/1/2/"  )?>

            <?=end_row()?>



        </center>        
    </div>
    
    
    
    <div id='tarifas'></div>
    <div class='contenedor_img_presentacion'>
        <center>                        
            <h5>
               Sin tarifas ocultas 
            </h5>                    
            <span>
                Ofrecemos  2  tipos de planes  profesionales para que obtenga sus beneficios con base en sus necesidades.
            </span>    
        </center>        
    </div>

    </div>

    <div class='contenedor_img_presentacion'>
        <?=$this->load->view("plan")?>
    </div>





    



      




    






       
    
    
<?=$this->load->view("modal/funcionalidades" )?>


    


    
</body>

</html>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="<?=base_url('application/js/home/landing_page.js')?>"></script>
<input type="hidden" name="now" class="now" value="<?=base_url();?>">
<script type="text/javascript" src="<?=base_url('application/js/Organizacion/prospectos.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/sha1.js')?>"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92531705-1', 'auto');
  ga('send', 'pageview');

</script>



<style type="text/css">    
    .estrellas_ejem{
        font-size: 2em;
    }
    .url-social{
        background: #0A4A54;
        padding: 5px;
        color: white;
    }
    .url-social:hover , .url-social-tw{
        background: #0FCBEA;
        padding: 5px;
        color: white;
        text-decoration: none;
    }
    ul li{
        text-decoration: none;
        list-style: none;
    }
    ul{
        text-decoration: none;
        list-style: none;
    }
    li{
        text-decoration: none;
        list-style: none;
    }
    header{background-image:url(<?=base_url('application/img/aa1.jpg')?>);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;-o-background-size:cover;text-align:center;color:#fff}    
    .resumen{
        background: #0079bf;
    }
    .intro-heading2{
    font-size: 3em!important;
        //color: #fdde8e !important;
        color: #ffeb3b !important;
        font-weight: bold;
        margin-top: 200px;           
        -webkit-text-stroke: .7px #968267;
    }    
    .seccion_pass{
        display: none;
    }
    .msj_inicia_session , .msj_inicia_session:hover {
        color: white; 
        font-weight: bold;
    }
    .text-1{
        color: white;
        font-size: 1em !important;
    }
    .dinero{
        color: #0079bf;
        font-size: 1.1em;
        font-weight: bold;
    }
    .text-gratis{
        color: #0fa3d2;
    }
    .text-resaltado{
        //color:#efff00;
        font-size: 1.1em;
    }
   
    .portfolio-item-2{
        background: red;
    }    
    .p-desc{
        font-size: 1.1em !important;
    }
    .text-info-principal{
        color: white;
    }
    .text-desc{
        font-size: 1.2em;
        color: white;
    }
    .text-desc-b{
        font-size: 1.2em;
    }




    .btn_detalle{
        margin-top: 15px;
        margin-bottom: 5px;
    }

    .contenedor_img_presentacion{
        width: 60%;
        margin: 0 auto;
        margin-top: 90px;        
    }
    .contenedor_img_presentacion_2{
        width: 60%;
        margin: 0 auto;
        
    }
    .form-servicio label{
        font-weight: bold;
    }
    @media (min-width: 768px){
    .navbar-custom.affix {
        background-color: #0079bf !important;
        padding: 10px 0;
    }

    @media only screen and (max-width: 991px) {
     .contenedor_img_presentacion{
        width: 98%;
        margin: 0 auto;
        margin-top: 90px;        
    }
    .contenedor_img_presentacion_2{
        width: 98%;
        margin: 0 auto;
        
    }


</style>




