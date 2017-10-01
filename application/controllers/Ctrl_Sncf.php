<?php
class Ctrl_Sncf extends CI_Controller{
    
   public function index() {
       $this->load->model('Model_Sncf');
       $data['titre'] = 'voici la base de donner de la sncf'; 
       $data['activites'] = $this->Model_Sncf->afficherLesActivites();
       $this->load->view('v_Activites',$data);
    }
    public function afficherFormation(){
        $code = $_GET['numeroActivite'];
        $model = $this->load->model('Model_Formations');
        $data['formations'] = $this->Model_Formations->getLesFormations($code);
        $this->load->view('v_Formations',$data);
    }
    
    public function afficherAgents()
    {
        $codeFormation = $_GET['codeFormation'];
        $model = $this->load->model('Model_Agents');
        $data['agents'] = $this->Model_Agents->getLesAgents($codeFormation);
        $this->load->view('v_Agents',$data);
        
        // A toi de jouer pour le reste
        // Tu charges le model pour les agents
        // Tu appelles la méthode
        // Tu affiches la vue
    }
}
