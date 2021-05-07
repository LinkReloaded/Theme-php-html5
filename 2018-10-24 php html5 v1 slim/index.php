<!doctype html>
<html lang="es">
<? $thispage = 'index'; ?>
<head>
    <!--[if IE]>
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE6">
    <![endif]-->
    <title>TITULO DE LA PAGINA</title>
    <link type="image/x-icon" rel="shortcut icon" href="js/favicon.ico" /> 
    <link rel="stylesheet" media="screen" href="css/default.css"/>
    <link rel="stylesheet" media="screen" href="font/font.css"/>
    <link rel="stylesheet" media="screen" href="css/style.css"/>
    <link rel="stylesheet" media="print" href="css/print.css"/>    
	<?	
		include('inc/head.php');
		include('inc/responsivo.php'); //configurar si el sitio es responsivo acá
		include('inc/analytics.php'); 
	?>
</head>
<body id="<?= $thispage ?>" class="page">
	<? include('inc/header.php'); ?>

	
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

	
	<? include('inc/footer.php'); ?>
    
</body>
</html>
