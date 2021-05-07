<!doctype html>
<html lang="es">
<? 
	$thispage = 'index'; 					//IMPORTANTE: CAMBIAR EL NOMBRE POR CADA PAGINA O TIPO DE PAGINA A UTILIZAR 
	include('inc/SETTINGS.php'); 			// las configuraciones generales del sitio estan acá
?>
<head>
    <title><?= $tituloPagina ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="<?= $metakeyworks ?>">
    <meta name="description" content="<?= $metadescription ?>">
    <!--[if IE]>
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE6">
        <script src="js/html5.js"></script>
  	<![endif]-->
    <script type="text/javascript"> 
        var $thispage = <? echo $thispage; ?>;
        var anchoVentana = $(window).width(); 
    </script>
    <link type="image/x-icon" rel="shortcut icon" href="js/favicon.ico" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"> 
    <? include('inc/opengraph.php'); ?>
    <!-- css -->
    <link rel="stylesheet" media="screen" href="css/default.css"/>
    <link rel="stylesheet" media="screen" href="font/font.css"/>
    <link rel="stylesheet" media="screen" href="css/style.css?=<? echo time();?>"/>
    <link rel="stylesheet" media="print" href="css/print.css"/>
    <? include('inc/responsivo.php'); ?>
    <!-- /css -->
	<? include('inc/head.php'); 				//Elementos comunes del sitio, plugins y otras configuraciones ?>
    
	<? //SI TIENE CONFIGURACIONES ESPECIFICAS PARA ESTA PAGINA PUEDE PONERLAS ACÁ ?>
	
	<?= $codigoAnalytics  						//codigo analytics se cambia en settings.php ?>
</head>

<body id="<?= $thispage ?>" class="page">

	<? /*	REFERENCIA AWESOME ICONS
    <i class="fa fa-camera-retro fa-lg"></i>
    <i class="fa fa-camera-retro fa-2x"></i>
    <i class="fa fa-camera-retro fa-3x"></i>
    <i class="fa fa-camera-retro fa-4x"></i>
    <i class="fa fa-camera-retro fa-5x"></i>
    <i class="fa fa-spinner fa-spin"></i>
	*/ ?>
    
	<? /* REFERENCIA HTML5 
        <header></header> 					//la cabecera de una  seccion o de la pagina
        <section></section> 				//un grupo tematico de contenido, tipicamente comienza con un encabezado
        <footer></footer> 					//el footer de una seccion o de la pagina
        <article></article> 				//un subseccion dentro de una seccion
        <aside></aside> 					//el sidebar, es el contenido complementario de una pagina
        <figure></figure> 					//una imagen... debe contener un img y si aplica un "<figcaption>" 
        <figcaption></figcaption> 			//es el pie de foto dentro de una figure
        <div contenteditable=true></div>	 //content editable se refiere a que el contenido de ese elemento puede ser modificado por el usuario
        <nav></nav> 						//contiene los elementos de navegacion de un sitio o una pagina
        <time></time>						//indica la fecha/hora en el contenido
    */ ?>

	<?php include('inc/footer.php'); ?>
</body>
</html>
