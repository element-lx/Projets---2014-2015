       

    <section class="contenant" >
        <section class="contenant2">
<!--CSS/LESS menu vertical-->
            <nav class="">
                
                <div class="rectangleTransAjout30 "></div >
                <div class="rectangle2_menuAdminAjout30">
                
                    <ul>
                        <div class="pad_top_menu1"></div>

                        <li><a class="alignement1" href="index.php?page=AdminEvenementsAjouter" title = "Ajouter" >AJOUTER</a></li>
                        <div class="pad_top_menu2"></div>
                        <article class="element"></article>
                        <div class="pad_top_menu3"></div>

                        <li><a class="alignement1" href="index.php?page=AdminEvenementsModifier" title = "Modifier">MODIFIER</a></li>
                        <div class="pad_top_menu2 alignement1"></div>
                        <article class="element"></article>
                        <div class="pad_top_menu3"></div>

                        <li><a class="alignement2" href="index.php?page=AdminEvenementsSupprimer" title = "Supprimer">SUPPRIMER</a></li>
                        <div class="pad_top_menu2"></div>
                        <article class="element"></article>

                    </ul>
                </div >
                <div class="rectangleTransAjout31"></div> 
            </nav>

            <div class="champs_admin">
                        
          <?php

            echo "<div class=''>"; 

         		$modEvent=AfficherEvenement($idEvent);  //Le resultat de la requete servire de parametre pour fetcher les resultats
                                
                while($rangee = mysqli_fetch_assoc($modEvent))
                {
                    $rangee['description']= str_replace(array("\\r","\\n"), array("\r","\n"), $rangee['description']);  // Fonction permettant de remplacer des characteres apportant des problemes d'affichages.
                    $rangee['description'] = str_replace(array("\\"), array(""), $rangee['description']);
                                  
                    echo "<div class=''> 
	                    	<form  action='index.php' method='post'>
	                       		<input type='hidden' name='id_evenement' value='".$idEvent."'>                                               
	                         	<p class='date inline_block police_add '>Date:</p>
	                            <input class='textearea_date textearea' type='date' name='newDate' value='".$rangee['date']."' ></br>                    
	                            <p class='titre inline_block police_add'>Titre:</p>
	                            <textarea class='textearea_titre textearea' name='newTitre' value='".($rangee['titre'])."' cols='60'rows='3'>".($rangee['titre'])."</textarea></br>                                    
                          </div>
	                        <div class='inline_block auto'>
	                            <p class='titre2 inline_block police_add'>Description:</p>
	                            <textarea class='textearea_description2 textearea ' name='newContenu' cols='60'rows='40' >".($rangee['description'])."</textarea></br>
	                        </div>
                                    
                         </div>
                            
                        <input class = 'last2' type='hidden' name='page' value='modEvenement'>
                        <input class = 'last4 classname class_size2' type='submit' value='Modifier'>"; 
                                     
                             ?>         <!-- Le bouton ci-dessus renvoi au switchcase et modifie un evenement. -->
                                
                             <div class='espace2'></div>
                               
                            <?php
                                    $photo = RecuperePhoto($idEvent); // Permet d'afficher une nobre 'X' d'images relié à 1                                                                        // évènement.
                                    
                                    echo    "<div>";
                                    
                                        while($rangee = mysqli_fetch_assoc($photo))
                                        
                                            {
	                                            echo "<div class='col_mod0'></div>
	                                            <div class='col_mod1'>
	                                            <img class='largeur_image' src='".$rangee['url']."'>
	                                            
	                                            </div>
	                                            <div class='col_mod00'>
	             
	                                            <input class = 'last2' type='hidden' name='page' value='modEvenement'>
	                                            <input class = 'last4 classname class_size3' type='submit' value='Supprimer'>
	                                            <input class = 'last4 classname class_size4' type='submit' value='Ajouter'>
	                                            </div>";
                                            }          // Fin de la deuxième boucle
                  
                                    echo    "</div>";
                                
                 }    // Fin de la première boucle 


                   echo "</form>";
              echo "</div>"   ; 
                   ?>
                    
                    <div class="margin_bottom width_menu police_couleur"></div>                    
                    
                    <div class="espace5"></div> 
                        
            </section>
                    
                    
                    