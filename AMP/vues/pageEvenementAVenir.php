    
	<section class="contenant" >
                  
<!--CSS/LESS pour les deux colonnes-->
                            
	    <div class="margin_bottom width_menu police_couleur">
	       
	   		<?php    // Faire afficher les evenements a venir.
	        	$nextEvent=RecupereNextEvent();
	                
                while($rangee = mysqli_fetch_assoc($nextEvent))
                {
	                $rangee['description']= str_replace(array("\\r","\\n"), array("<br>",""), $rangee['description']); 
	                $description= utf8_encode($rangee['description']);
	                echo    "<div class='espace_titre'>
		                        <h1 class='pad_date praetor max_w'>".$rangee['date']."</h1>
		                        <h1 class='pad_titre praetor max_w'>".$rangee['titre']."</h1>
		                    </div>
		                
		                    <div class='col2  margin_bottom max_w'>
		                        <p class='justify pad_top max_w'>".$rangee['description']."</p>
		                    </div>";
	                
	                $id_evenement = $rangee['id_evenement']; 
	                $photo = RecuperePhoto($id_evenement);
	                
	                echo   "<div class='col1  margin_bottom max_w'>";
	                
		            while($rangee = mysqli_fetch_assoc($photo))   // On boucle dans la boucle. --> Sert a faire aficher plus d'une photo pour un evenement le cas echeant.
		                    
	                {
	                 	  echo "<img class='max_centre' src='".$rangee['url']."'>";
	                }  
	                
	                echo   "</div>"; 
	           } 
	        ?>
	
	    </div>
	            
	    <div class="espace5"></div>                      

             
<!--

                            <iframe src="https://www.google.com/maps/embed?                   pb=!1m14!1m12!1m3!1d11186.175501091377!2d-73.57347645167914!3d45.499129169576655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1408326187647" width="400" height="300" frameborder="0" style="border:2">
                            </iframe>
-->




















