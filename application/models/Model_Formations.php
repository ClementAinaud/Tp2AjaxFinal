<?php
class Model_formations extends CI_Model{
   public function getLesFormations($numeroActivite){
    $sql = $this->db->select('code,intitule')->from('formation')->where('numeroActivite',$numeroActivite);
    $res = $this->db->get();
    $tab = array();
    
    foreach ($res->result() as $row) {
      $tab[] = $row;  
    }
    return $tab;
   }        
}