<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Servicios extends REST_Controller{      
    function __construct(){
        parent::__construct();                  
        $this->load->helper("servicios");
        $this->load->model("serviciosmodel");
        $this->load->library('sessionclass');                    
    }
    /**/
    function menu_inicio_GET(){

        $this->load->view("secciones/menu_inicio");
    }
    /**/
    function empresa_GET(){

        $this->validate_user_sesssion();
        $prm =  $this->get();         
        $prm["id_usuario"]= $this->sessionclass->getidusuario();
        $prm["id_empresa"]= $this->sessionclass->getidempresa();
        $db_response =  $this->serviciosmodel->get_servicios_empresa($prm);        

        $data["servicios_HTML"]=  menu_servicios($db_response);
        $data["servicios"] = $db_response;
        $this->response($data);

    }
    function empresa_POST(){

        $this->validate_user_sesssion();
        $prm =  $this->post();         
        $prm["id_usuario"]= $this->sessionclass->getidusuario();
        $prm["id_empresa"]= $this->sessionclass->getidempresa();
        $db_response =  $this->serviciosmodel->insert_servicio_empresa($prm);        
        $this->response($db_response);
    }
    /**/
    function edicion_GET(){
        $this->validate_user_sesssion();
        $param =  $this->get();
        $db_response =  $this->serviciosmodel->get_data_servicio($param);
        $data["data_servicio"]= $db_response[0];    
        $db_response_img =  $this->serviciosmodel->get_num_imgs($param);
        $data["info_imgs"] =  $db_response_img[0];
        $this->load->view("secciones/contenedor_edicion" , $data);
    }
    /**/
    function s_nombre_PUT(){
        $this->validate_user_sesssion();    
        $param =  $this->put();
        $db_response =  $this->serviciosmodel->update_s_nombre($param);
        $this->response($db_response);
    }
    /**/
    function s_email_PUT(){
        $this->validate_user_sesssion();    
        $param =  $this->put();
        $db_response =  $this->serviciosmodel->update_s_e_mail($param);
        $this->response($db_response);
    }
    /**/
    function  s_telefono_PUT(){
        $this->validate_user_sesssion();    
        $param =  $this->put();
        $db_response =  $this->serviciosmodel->update_s_telefono($param);
        $this->response($db_response);
           
    }
    /**/
    function nombre_servicio_PUT(){
        $this->validate_user_sesssion();    
        $param =  $this->put();
        $db_response =  $this->serviciosmodel->update_nombre_servicio($param);
        $this->response($db_response);        
    }
    /**/
    function descripcion_servicio_PUT(){
        $this->validate_user_sesssion();    
        $param =  $this->put();
        $db_response =  $this->serviciosmodel->update_descripcion_servicio($param);
        $this->response($db_response);        
    }
    
    /**/
    function validate_user_sesssion(){
        if( $this->sessionclass->is_logged_in() == 1) {                        

            }else{
                        /*Terminamos la session*/
                $this->sessionclass->logout();
        }   
    }
     
  
}?>