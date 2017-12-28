<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class serviciosmodel extends CI_Model {
    function __construct(){      
        parent::__construct();        
        $this->load->database();
  }
  /**/
  function update_descripcion_servicio($param){
    $id_servicio =  $param["servicio"];
    $descripcion =  $param["descripcion"];
    $query_update =  "UPDATE servicio SET descripcion  =  '".$descripcion."' 
          WHERE id_servicio =  $id_servicio LIMIT 1";
          return $this->db->query($query_update);
  }
  /**/
  function update_nombre_servicio($param){
    $id_servicio =  $param["servicio"];
    $nombre_servicio =  $param["nombre_servicio"];
    $query_update =  "UPDATE servicio SET nombre_servicio  =  '".$nombre_servicio."' 
          WHERE id_servicio =  $id_servicio LIMIT 1";
          return $this->db->query($query_update);
  }
  /**/
  function update_s_telefono($param){

    $id_servicio =  $param["servicio"];
    $query_get = "SELECT s_telefono FROM servicio WHERE id_servicio =  $id_servicio LIMIT 1";
    $result =  $this->db->query($query_get);
    $e = $result->result_array()[0]["s_telefono"];


    $query_update =  "UPDATE servicio SET s_telefono =  0 WHERE id_servicio =  $id_servicio LIMIT 1";
    if ($e == 0 ) { 
      $query_update =  "UPDATE servicio SET s_telefono =  1 WHERE id_servicio =  $id_servicio LIMIT 1";
    }
    return $this->db->query($query_update);

  }
  /**/
  function update_s_e_mail($param){

    $id_servicio =  $param["servicio"];
    $query_get = "SELECT s_email FROM servicio WHERE id_servicio =  $id_servicio LIMIT 1";
    $result =  $this->db->query($query_get);
    $e = $result->result_array()[0]["s_email"];


    $query_update =  "UPDATE servicio SET s_email =  0 WHERE id_servicio =  $id_servicio LIMIT 1";
    if ($e == 0 ) { 
      $query_update =  "UPDATE servicio SET s_email =  1 WHERE id_servicio =  $id_servicio LIMIT 1";
    }
    return $this->db->query($query_update);

  }

  /**/
  function update_s_nombre($param){

    $id_servicio =  $param["servicio"];
    $query_get = "SELECT s_nombre FROM servicio WHERE id_servicio =  $id_servicio LIMIT 1";
    $result =  $this->db->query($query_get);
    $e = $result->result_array()[0]["s_nombre"];


    $query_update =  "UPDATE servicio SET s_nombre =  0 WHERE id_servicio =  $id_servicio LIMIT 1";
    if ($e == 0 ) { 
      $query_update =  "UPDATE servicio SET s_nombre =  1 WHERE id_servicio =  $id_servicio LIMIT 1";
    }
    return $this->db->query($query_update);

  }
  /**/
  function get_num_imgs($param){
    $id_servicio =  $param["servicio"];
    $query_get =  "SELECT 
                   count(0) img_e
                   FROM imagen_catalogo_productos_servicios 
                   WHERE 
                   id_catalogo_productos_servicios = $id_servicio LIMIT 1";

                   $result = $this->db->query($query_get);
                   return $result->result_array();
                   
  }

  /**/
  function get_data_servicio($param){

    $id_servicio =  $param["servicio"];
    $query_get =  "SELECT * FROM servicio WHERE id_servicio = $id_servicio LIMIT 1 ";
    $result = $this->db->query($query_get);
    return $result->result_array();

  }
  /**/
  function get_servicios_empresa($prm){

      $id_empresa = $prm["id_empresa"];
      $query_get =  "SELECT  * FROM servicio WHERE id_empresa = $id_empresa ORDER BY fecha_registro DESC LIMIT 50"; 
      $result =  $this->db->query($query_get);
      return   $result->result_array();
  }
  /**/
  function insert_servicio_empresa($prm){ 

    $servicio = $prm["servicio"];    
    $id_empresa = $prm["id_empresa"];    
    $query_insert =  "INSERT INTO servicio(nombre_servicio , id_empresa ) VALUES('". $servicio ."','". $id_empresa ."' )";
    $this->db->query($query_insert);    
    return $this->db->insert_id();              
  }


}