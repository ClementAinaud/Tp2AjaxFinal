<?php 
class Model_Sncf extends CI_Model{
    
    public function afficherLesActivites(){
       $sql = $this->db->query(" select * from activite ");         
       return $sql->result();
} 
    }
    