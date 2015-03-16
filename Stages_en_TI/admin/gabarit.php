<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Verifier l'utiliter de cette ligne --> 
		<title>Projet Web 2-Administrateur</title>
		<meta name="description" content="Projet Web 2">
		<meta name="author" content="Steven Castelli, Jose Cortes, Francois Tremblay, David Julien">
		<link rel="stylesheet" type="text/css"  href="css/admin.css">  
		<script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/admin.js"></script>
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css"> <!--bootstrap.css a predominence sur global.css  -->
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>		
		<div>
			<header>
				<?php
                Controleur::gererGabarit("header");
				?>				
			</header>
			
            <header>
				<?php  
                Controleur::gererGabarit("header2");
				?>				
			</header>
			
            <div class="container">
	            <div class="row">
	                <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
	                    <?php
	                    Controleur::gererGabarit("main"); 
	                    ?>
	                </div>
	            </div>   
            </div>
            
            <footer>
            	<?php
	            Controleur::gererGabarit("footer"); 
	            ?>
            </footer>
		</div>
	</body>
</html>
