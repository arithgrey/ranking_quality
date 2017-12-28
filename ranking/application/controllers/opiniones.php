<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Opiniones extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper("repo");        
        $this->load->helper("ranking");        
        $this->load->library('principal');                  
        $this->load->model("rankingmodel");
        $this->load->library('sessionclass');                          
    }   
    /**/
    function emp($id_empresa , $id_servicio ){          

        $data = $this->val_session("Ayudanos a mejorar tu experiencia");                                
        $data_empresa =  $this->rankingmodel->get_data_empresa($id_empresa)[0];        
        $data["data_empresa"] = $data_empresa;    
        $data['titulo'] =$data_empresa["nombreempresa"]; 
        $data["id_servicio"] =  $id_servicio;        
        $data_servicio=  $this->rankingmodel->get_data_servicio($id_servicio)[0];
        $data["data_servicio"] =  $data_servicio;
        $info_img =  $this->rankingmodel->get_info_img($id_servicio);
        $data["info_img"]  = $info_img;
        $data["url_img_post"]= evalua_img_servicio_pre_view($info_img , $id_servicio );                        
        $data["descripcion_servicio"] = $data_servicio["descripcion"];
        $this->principal->show_data_page( $data , 'reporte/reportes');        
        $this->principal->crea_historico(15);        

    }
    /**/    
    function val_session($titulo_dinamico_page ){        
        
                
                $data['titulo']= $titulo_dinamico_page;                                              
                $data["in_session"] = 0;
                $data["no_publics"] =1;
                $data["meta_keywords"] =  "";
                if( $this->sessionclass->is_logged_in() == 1){    
                    $data["in_session"] = 1;

                }               
                return $data;                
    }       
    /*Determina que vistas mostrar para los eventos*/
}