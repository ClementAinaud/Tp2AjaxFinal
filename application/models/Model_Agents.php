<?php 
class Model_Agents extends CI_Model{
    function getLesAgents($codeFormation){
        $sql = $this->db->query("select prenom,nom from agent, inscription where Agent.code = inscription.codeAgent and numeroFormation='".$codeFormation."'");
     
        return $sql->result();
    }
}
