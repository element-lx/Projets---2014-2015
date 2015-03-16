                    <section class="contenant" >
                  
<!--CSS/LESS menu vertical-->
                    <nav class="">
                        
                        <div class="rectangleTransAjout10 "></div >
                        <div class="rectangle2_menuAdminAjout10">
                        
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
                        <div class="rectangleTransAjout11"></div> 
                    </nav>
                  
                    <div class="champs_admin ">
                        
                    <?php
                    echo "	<div class=''> 
                             	<form action='index.php' method='post' enctype='multipart/form-data'>
                                <p class='date inline_block police_add'>Date:</p>
    							<input class='textearea_date textearea' type='date' name='newDate' placeholder='aaaa-mm-jj'><br/>
	
						";

		                    echo "	<br>
			                        <p class='titre inline_block police_add'>Titre:</p>
			                        <textarea class='textearea_titre textearea inline_block' name='newTitre' cols='20' rows='2' placeholder='Entrez titre'></textarea></br>
			                        <p class='description inline_block police_add'>Description:</p>
			                        <textarea class='textearea_description textearea inline_block' name='newContenu' cols='60'rows='20' placeholder='Entrez description'></textarea></br>
		                            <div class='marg-up pad-up'>
		                                <input class='marg-up ajouter ' type='file' name='file' id='file'>
		                                <p class='add_image '>Ajouter une image : </p> <br>
		                                <div class='marg-up2'></div>                                                               
		                        		<input class='last3 marg-up' type='hidden' name='page' value='addEvenement'>
		                     			<input class='last3 classname class_size marg-up last' type='submit' value='Ajouter Evenement'>
		                            </div>
	                            </form>
                            </div>
                      
                        </div>
                     ";
                   ?> 
                                                                                                         
                    <div class="margin_bottom width_menu police_couleur"></div>
                    
                            
                          