<!doctype html>
<html lang="es">
    <head>
		<meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="js/favicon.ico">
        
		<title>Starter Template for Bootstrap</title>
		<!-- META -->
		<meta property="fb:app_id"        content="" /> 
		<meta property="og:title"         content=""/>
		<meta property="og:image"         content=""/>
		<meta property="og:site_name"     content=""/>
		<meta property="og:url"           content="" />
		<meta property="og:type"          content="website" />
		<meta property="og:description"   content="" />
		
		<meta name="twitter:card"         content="" />
		<meta name="twitter:site"         content="" />
		<meta name="twitter:title"        content="" />
		<meta name="twitter:description"  content="" />
		<meta name="twitter:image"        content="" />
		
        <link type="text/css" rel="stylesheet" media="screen" href="css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css"/>
        <link type="text/css" rel="stylesheet" media="screen" href="fonts/fonts.css?=<?= time(); ?>"/>
        <link type="text/css" rel="stylesheet" media="screen" href="css/style.css?=<?= time(); ?>"/>

        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- analytics -->
    
    </head>  
    <body class="page">        
        
        <?
            include('inc/default_elements/fixed-navbar.php'); 
        ?>

            <div class="container" style="background-color: crimson; margin: 100px auto; color:#fff;">
                contenido
            </div>

        <?
            /*
            echo '<div class="container">'; 
            include('inc/default_elements/wp-panel.php');     
            include('inc/default_elements/fontawesome.php'); 
            include('inc/default_elements/carousel.php'); 
            include('inc/default_elements/grid.php'); 
            include('inc/default_elements/acordion.php'); 
            include('inc/default_elements/tables.php'); 
            include('inc/default_elements/alertas.php'); 
            include('inc/default_elements/badges.php'); 
            include('inc/default_elements/botones.php'); 
            include('inc/default_elements/grupolistado.php'); 
            include('inc/default_elements/jumbotron.php'); 
            include('inc/default_elements/navegador.php'); 
            include('inc/default_elements/navegador-barra.php'); 
            include('inc/default_elements/panels.php'); 
            include('inc/default_elements/progressbar.php'); 
            include('inc/default_elements/thumbnails.php'); 
            include('inc/default_elements/wells.php'); 
            include('inc/default_elements/labels.php'); 
            include('inc/default_elements/tabs.php');
            include('inc/default_elements/alineamiento.php'); 
            include('inc/default_elements/modal.php'); 
            echo '</div>';
            */
        ?>

        <? // --- jQuery --- ?>
		<script type="text/javascript" src="js/jquery.min.js"></script>
        
        <? // --- Core Boostrap --- ?>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<!--[if lt IE 9]>
      	<script src="js/html5shiv.min.js"></script>
      	<script src="js/respond.js"></script>
    	<![endif]-->              
        
    </body>
</html>
