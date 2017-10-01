<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SNCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $("#lstActivites").change(function(){ 
                        
                       afficherFormation($(this).val());
                    });
                    
                    $('#divFormations').change(
                            function(){
                        afficherAgents();
                    });
                }
             );
         
        </script>
        
    </head>
    <body>
        <select id="lstActivites">
<?php 
echo "<h1>".$titre.'</h1><br/>';
foreach ($activites as $act){
echo "<option id='opt1' value='".$act->numero."'>".$act->libelle."</option>";
}
?>        

</select>
         <div id="divFormations"></div>
          <div id="divAgents"></div>
    </body>
</html>
