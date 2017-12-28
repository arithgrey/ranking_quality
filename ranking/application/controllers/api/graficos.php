<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Graficos extends REST_Controller{
  function __construct(){
        parent::__construct();                                      
        $this->load->model("graficmodel");
        $this->load->library('sessionclass');      
  }  
  /**/
  function general_GET(){

    $param =  $this->get();
    $db_response =  $this->graficmodel->get_info($param);
    $this->response($db_response);
  }
  /**/
  function validate_user_sesssion(){
      if( $this->sessionclass->is_logged_in() == 1) {                        

            }else{
              /*Terminamos la session*/
              $this->sessionclass->logout();
          }   
  }/*termina validar session */

  
}
?>