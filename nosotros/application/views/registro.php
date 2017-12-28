<body id="page-top" class="index">
    
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">            
            <div class="navbar-header page-scroll">
                
                <a class="navbar-brand " href="#page-top">
                    Ranking Quality
                </a>
            </div>                        
        </div>        
    </nav>    
    <section id='registro'>
        <div class='container'>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                        ¿Aún no tiene una cuenta ?                        
                    </h2>                    
                    <h3>
                        Regístrese para una demo 
                        <span class='text-gratis'> 
                            ¡Es gratis!
                        </span>
                    </h3>

                </div>
            </div>


            <div>
                <form  class='form_prospectos' id='form_prospectos' 
           action="<?=url_registro_nuevo_miembro()?>">                        
            
                <div class='col-lg-6 col-lg-offset-3 col-md-6 col-sm-12'>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                               Usuario (email @ )
                        </span>
                        <input type="mail" name="mail" id="mail" class="mail form-control input-sm" required >
                    </div>
                    <div class='place_mail'>                            
                    </div>



                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            Nombre de su negocio
                        </span>
                        <input type="text" name="organizacion" id="organizacion" class="organizacion form-control input-sm" required>
                    </div>
                    <div class='place_organizacion'>                            
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                           Elige una contraseña
                        </span>
                        <input type="password"  id="pass" class="pass form-control input-sm" required>
                    </div>
                    <div class='place_pass'>                            
                    </div>

                    <div class='seccion_pass'>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                Vuelve a escribir la contraseña
                            </span>
                            <input type="password"  id="pass2" class="pass2 form-control input-sm" required>
                        </div>
                        <div class='place_pass2'>                            
                        </div>
                    </div>



                    <div class="input-group" style='display:none;'>
                        <span class="input-group-addon" id="basic-addon1">
                            Sector laboral
                        </span>                    
                        <?=create_select($sectores, "sector" , "form-control input-sm " , "sector" , "nombre" , "id_sector" )?>
                    </div>                        
                    <br>
                    <button class='btn btn-default '>
                        Registrar!
                    </button>
                    <div class='place_user_registro'>
                    </div>
                    <!--
                    <a href="<?=url_usos_privacidad_enid_service()?>" >
                        Términos de uso y privacidad
                    </a>
                -->
                    
                </div>                                
            </form>



            </div>




        </div>
    </section>
    <hr>

    <section id='contacto'>
        <div class='container'>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                        ¿Necesitas más información?
                    </h2>                   
                    
                </div>
            </div>


            <div class="row">
                <center>
                    <?=btn_call_to_action(1 , "page-scroll btn btn-xl" , "btn_contacto" , "" , "Contáctame",  url_developer()."/#contacto" )?>
                </center>
            </div>    
        </div>

    </section>


       
    
    
<?=$this->load->view("modal/funcionalidades" )?>


    


    
</body>

</html>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<style type="text/css">    
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
    #resumen{
        background: #0079bf;
    }
    #img-2, #img-3{
        display: inline-table;
        margin-top: 10px;

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
    @media only screen and (max-width: 991px) {
        .text-s{
        font-size: 1em;
        }
    }
    .titulo-p-desc{
        font-size: 1.2em;
    }    
    .text-s{
        font-size: 1.1em;
    }
    .text-no-public{
        font-size: 1.2em;
        color: white;
    }
</style>






<script type="text/javascript" src="<?=base_url('application/js/home/landing_page.js')?>"></script>
<input type="hidden" name="now" class="now" value="<?=base_url();?>">
<script type="text/javascript" src="<?=base_url('application/js/Organizacion/prospectos.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/sha1.js')?>"></script>


