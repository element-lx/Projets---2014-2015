    
    <section class="contenant" >
                  
<!--CSS/LESS pour les deux colonnes-->
                            
	    <div class="margin_bottom width_menu police_couleur">
	       
	    	<?php   // Faire afficher les evenement passes.
	
            $pastEvent=RecuperePastEvent();
            
            while($rangee = mysqli_fetch_assoc($pastEvent))
                {
                $rangee['description']= str_replace(array("\\r","\\n"), array("<br>",""), $rangee['description']); 
                $description= utf8_encode($rangee['description']);
                echo" <div class='espace_titre'>
                      	<h1 class='pad_date praetor max_w'>".$rangee['date']."</h1>
                        <h1 class='pad_titre praetor max_w'>".$rangee['titre']."</h1>
					</div>
                
                  	<div class='col2  margin_bottom max_w'>
                    	<p class='justify pad_top max_w'>".$rangee['description']."</p>
                   	</div>
                ";
					
                $id_evenement = $rangee['id_evenement']; 
                $photo = RecuperePhoto($id_evenement);
                
                echo    "<div class='col1  margin_bottom max_w'>";
                
                    while($rangee = mysqli_fetch_assoc($photo))
                    {
                        echo "<img class='max_centre' src='".$rangee['url']."'>";
                    }  
                
                echo    "</div>";
            
                } 
        	?>
	
	    </div>
	            
	    <div class="espace5"></div>   