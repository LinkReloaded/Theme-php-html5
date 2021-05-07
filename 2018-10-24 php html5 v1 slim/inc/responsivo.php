
	<? 
		// ACTIVAR ACA ESCRIBIENDO SI, SI SE QUIERE ACTIVAR EL SITIO RESPONSIVO, POR DEFECTO ES NO
		$responsivo="";
		if($responsivo=="si") { 
	?>
    <meta name="viewport" content="initial-scale=1">
    <link type="text/css" rel="stylesheet" media="screen" href="css/layout768.css"/>
    <link type="text/css" rel="stylesheet" media="screen" href="css/layout480.css"/>
    <link type="text/css" rel="stylesheet" media="screen" href="css/layout320.css"/>    
    <? 
		} else { 
			$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad'); 
			if (!empty($isiPad)){
	?>
    <!-- css ipad -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" media="screen" href="css/ipad.css?=<? echo time();?>"/>
    <!-- /css ipad -->
    <? 
			} 
	?><!--[if IE 7]><link rel="stylesheet" media="screen" href="css/style7.css?=<? echo time();?>" /><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" media="screen" href="css/style8.css?=<? echo time();?>" /><![endif]-->
    <? 
		} 
	?>
