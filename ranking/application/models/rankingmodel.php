<?php defined('BASEPATH') OR exit('No direct script access allowed');
class rankingmodel extends CI_Model{
    function __construct(){        
        parent::__construct();        
        $this->load->database();
    }
    /**/
    function get_info_img($id_servicio){

        $query_get =  "SELECT COUNT(0)existe_img FROM imagen_catalogo_productos_servicios WHERE id_catalogo_productos_servicios = $id_servicio LIMIT 1";
        $result =  $this->db->query($query_get);
        return $result->result_array();
    }
    /**/
    function get_data_servicio($id_servicio){

        $query_get =  "SELECT * FROM servicio  WHERE id_servicio = $id_servicio LIMIT 1";
        $result =  $this->db->query($query_get);
        return $result->result_array();
    }
    /**/
    function get_data_empresa($id_empresa ){

        $query_get =  "select e.* from empresa e  where e.idempresa = $id_empresa limit 1";            
        $result =  $this->db->query($query_get);
        return $result->result_array();

    }

    /**/
    function get_comentarios_calificacion($param){
        
        /**/
        $_num =  get_random();        
        $this->create_tmp_inicidencias($_num ,  0 ,  $param);

        
        $sql_condicion =  " num_calificacion = '".$param["calificacion"]."' "; 
        if ($param["calificacion"] ==  0 ){
            $sql_condicion =  "1= 1  AND num_calificacion > 0 ";
        }

            $query_get =  "
            SELECT  
                * 
            FROM tmp_calificaciones_$_num 
            WHERE  $sql_condicion  
            ORDER BY fecha_registro DESC ";         
            
    
            
            $result =  $this->db->query($query_get);
            $data_complete["info_general"] =  $result->result_array();


        $this->create_tmp_inicidencias($_num ,  1 ,  $param);
        
        return $data_complete;

    }

    /**/
    function get_info_general($param){

        $_num =  get_random();
        
        $this->create_tmp_inicidencias($_num ,  0 ,  $param);

            $query_get =  "
            SELECT  
                SUM(CASE WHEN  num_calificacion =  1  then 1 else 0 end )1_estrella,
                SUM(CASE WHEN  num_calificacion =  2  then 1 else 0 end )2_estrella,
                SUM(CASE WHEN  num_calificacion =  3  then 1 else 0 end )3_estrella,
                SUM(CASE WHEN  num_calificacion =  4  then 1 else 0 end )4_estrella,
                SUM(CASE WHEN  num_calificacion =  5  then 1 else 0 end )5_estrella
            FROM tmp_calificaciones_$_num";         
            
            $result =  $this->db->query($query_get);
            $data_complete["info_general"] =  $result->result_array();


        $this->create_tmp_inicidencias($_num ,  1 ,  $param);
        
        return $data_complete;

    }

    
    /**/
    function create_tmp_inicidencias($_num ,  $flag ,  $param){

        $id_servicio =  $param["id_servicio"];
        $query_drop ="DROP TABLE IF exists tmp_calificaciones_$_num";
        $db_response = $this->db->query($query_drop);

        if ($flag == 0){
            $query_create ="CREATE TABLE tmp_calificaciones_$_num  AS 
             select  e.*
             from encuesta e WHERE id_servicio = $id_servicio"; 

            $db_response =   $this->db->query($query_create);                   
                        
        }
        return $db_response;


    }
    
    
/*Termina modelo */
}