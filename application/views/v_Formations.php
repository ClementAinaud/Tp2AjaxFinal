<?php 


foreach ($formations as $form) {
     echo "<input type='radio' onclick='afficherAgents(this.value)' name='formation' value='".$form->code. "'>".$form->intitule;
    
}
