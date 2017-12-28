<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class graficmodel extends CI_Model {
    function __construct(){      
        parent::__construct();        
        $this->load->database();
    }
    /**/
    function get_info($param){
      
      $_num =  get_random();
      $this->create_tmp_encuesta($_num ,  0 ,  $param );

      $query_get = "SELECT  
                      SUM(CASE WHEN  num_calificacion =  1  then 1 else 0 end )estrella1 ,
                      SUM(CASE WHEN  num_calificacion =  2  then 1 else 0 end )estrella2 ,
                      SUM(CASE WHEN  num_calificacion =  3  then 1 else 0 end )estrella3 ,
                      SUM(CASE WHEN  num_calificacion =  4  then 1 else 0 end )estrella4 ,
                      SUM(CASE WHEN  num_calificacion =  5  then 1 else 0 end )estrella5 , 
                      SUM(CASE WHEN LENGTH(email) > 0  then 1 ELSE 0 END ) num_mail , 
                      SUM(CASE WHEN LENGTH(telefono) > 0  then 1 ELSE 0 END ) num_telefono ,
                      SUM(CASE WHEN LENGTH(nombre) > 0  then 1 ELSE 0 END ) num_nombre ,
                      COUNT(0) total_respuestas                      
                    FROM tmp_encuesta_$_num"; 

      $result = $this->db->query($query_get);
      

      $data_complete["resumen"] = $result ->result_array();

      

      $query_get = "SELECT * FROM tmp_encuesta_$_num ORDER BY num_calificacion"; 
      $result = $this->db->query($query_get);
      $data_complete["info_complete"] = $result ->result_array();


      





      $this->create_tmp_encuesta($_num ,  1 ,  $param );
      return $data_complete;

    }
    /**/    
    function create_tmp_encuesta($_num ,  $flag ,  $param ){

        $id_servicio =  $param["id_servicio"];
        $query_drop ="DROP TABLE IF exists tmp_encuesta_$_num";
        $db_response = $this->db->query($query_drop);

        if ($flag == 0){
            $query_create ="CREATE TABLE tmp_encuesta_$_num  AS 
             select  e.*
             from encuesta e 
             WHERE id_servicio = $id_servicio"; 

            $db_response =   $this->db->query($query_create);                   
                        
        }
        return $db_response;


    }



}
