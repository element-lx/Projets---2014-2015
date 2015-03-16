       

    <section class="contenant" >
                  
<!--CSS/LESS menu vertical-->
        <nav class="">
            
            <div class="rectangleTransAdmin3 "></div >
            <div class="rectangle2_menuAdmin3">
            
                <ul>
                    <div class="pad_top_menu1"></div>
                    <li><a class="alignement1" href="index.php?page=AdminEvenementsAjouter" title = "Ajouter" >AJOUTER</a></li>
                    
                    <div class="pad_top_menu2"></div>
                    <article class="element"></article>
                    <div class="pad_top_menu3"></div>
                    
                    <li><a class="alignement1" href="index.php?page=AdminEvenementsModifier" title = "Modifier">MODIFIER</a></li>
                    
                    <div class="pad_top_menu2"></div>
                    <article class="element"></article>
                    <div class="pad_top_menu3"></div>
                    
                    <li><a class="alignement2" href="index.php?page=AdminEvenementsSupprimer" title = "Supprimer">SUPPRIMER</a></li>
                    <div class="pad_top_menu2"></div>
                    <article class="element"></article>
                </ul>
            </div >
            <div class="rectangleTransAdmin4"></div> 
        </nav>
                    
        <div class="champs_admin_mod">
            <div class="espace_mod2"></div>
            
            <?php

                $listEvent=ListingEvenementdesc();

                echo "<ul>";                                                     
                    while($rangee = mysqli_fetch_assoc($listEvent))  //Loop affichant les evenements existent de la BD
                    {
                     echo 
                        "
                       <li><a class=' liste_mod' href='index.php?page=AdminEvenementsSupprimer2&id_evenement=".$rangee['id_evenement']."';>".$rangee['titre']."</a></li>
                    
                       <div class='espace_mod'></div>";
                    }
            ?> 
   
        </div>  
        
        <div class="margin_bottom width_menu police_couleur"></div>
        
        
                    