<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
    function __construct(){        
        parent::__construct();                            
        $this->load->library("principal");
        $this->load->library('sessionclass');        
    }    
    /**/    
    function usos_privacidad_enid_service(){        
        $this->principal->crea_historico(28);
        $this->load->view("privacidad/uso_privacidad");
    } 

    /**/
    function uso(){

        $data = $this->val_session("Cree encuestas e identifique  cuando, introducir, prevenir o 
            corregir acciones, producto o servicios que están afectando  su  negocio. ");
        $data["meta_keywords"] =  "Calidad "; 
        $data["id_usuario"] =  0; 
        $data["url_img_post"] = create_url_preview(7);
        $data["info_empresa"] ="";
        $data["email"] ="";

        if ($this->sessionclass->is_logged_in() == true) {            
            
            $this->load->view("../../../view_tema/header_template", $data);
            $this->load->view("usos/uso" ,  $data);   
            $this->load->view("../../../view_tema/footer_template", $data);


        }else{                                                  

        }
            
    }    
    function registro(){
        
        $data = $this->val_session("Cree encuestas e identifique  cuando, introducir, prevenir o corregir acciones, producto o servicios que están afectando  su  negocio.");
        $data["url_img_post"] = create_url_preview(7);
        $data["meta_keywords"] =  "Encuestas"; 

        if ($this->sessionclass->is_logged_in() == true) {            
            redirect(url_presentacion());         
        }else{                                                  
            /**/
            $this->principal->crea_historico(1);            
            $data["sectores"] =  $this->principal->get_sectores();
            $this->load->view("template/header", $data);
            $this->load->view("registro", $data);
            $this->load->view("template/footer", $data);
            $this->session->sess_destroy();     
        }     
    }
    /**/
    function index(){
        

          $data = $this->val_session("Cree encuestas e identifique  cuando, introducir, prevenir o corregir acciones, producto o servicios que están afectando  su  negocio. ");
        $data["url_img_post"] = create_url_preview(7);
        $data["meta_keywords"] =  "Encuestas"; 

        if ($this->sessionclass->is_logged_in() == true) {            
            redirect(url_presentacion());         
        }else{                                                  
            /**/        
            $this->principal->crea_historico(1);            
            $data["sectores"] =  $this->principal->get_sectores();
            $this->load->view("template/header", $data);
            $this->load->view("home", $data);
            $this->load->view("template/footer", $data);
            
        }    
    }
    /**/
    function logout(){  
        $this->session->sess_destroy();
        redirect(base_url());
    }
    /**/   
    function val_session($titulo_dinamico_page){

        if ( $this->sessionclass->is_logged_in() == 1) {                                                            
                $menu = $this->sessionclass->generadinamymenu();
                $nombre = $this->sessionclass->getnombre();                                         
                $data['titulo']= $titulo_dinamico_page;              
                $data["menu"] = $menu;              
                $data["nombre"]= $nombre;                                               
                $data["perfilactual"] =  $this->sessionclass->getnameperfilactual();                
                $data["in_session"] = 1;
                $data["no_publics"] =1;
                $data["meta_keywords"] =  "";
                $data["url_img_post"]= "";
                return $data;
        }else{            
            $data['titulo']=$titulo_dinamico_page;              
            $data["in_session"] = 0;
            $data["no_publics"] =0;
            $data["meta_keywords"] =  "";
            $data["url_img_post"]= "";
            return $data;
        }   
    }    
 
}