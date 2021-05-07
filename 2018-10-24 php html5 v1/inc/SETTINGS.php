<?
/* 	==========================================================================
   	Version: 2.0 | 1.0.2.20140130
	========================================================================== 	*/


/*	-------------------------------------------------------------------------- 	
	DEFINICIONES
	--------------------------------------------------------------------------	*/
	$URLbaseSitio="";
	$responsivo = "no"; 				//Escribir "si" para habillitar las caracteristicas responsivas, de lo contrario utilizará la visualización normal.	
	$opengraph = "no"; 					//Escribir "si" para habilitar las caracteristicas de compartir con FB
		$OGapp_id = ""; 				//ID de la APP FB
		$OGadmin_id = ""; 				//Poner su identificacion de FB aqui 
	$metadescription=" ";				//Escribir la descripcion global del sitio
	$metakeyworks=" ";					//Escribir los keywords globales del sitio
	$elcodigoAnalytics="
	
	
	
	
	";									//Poner el codigo analytics aqui


/*	-------------------------------------------------------------------------- 	
	TEXTOS PARTICULARES
	--------------------------------------------------------------------------	*/
	switch ($thispage) {
		case 'index':
			$tituloPagina="INDEX";
			$descOGpagina="poner la descripcion de la pagina aca";
			$imagenOGpagina="http//www.URLABSOLUTA/img/opengraph.jpg";
			$metadescription=setVariable($metadescription,"descripcion de la página index");
			$metakeyworks=setVariable($metakeyworks,"keywords, de, la, página, index");
			break;
		case 'pagina2':
			$tituloPagina="PAGINA 2";
			$descOGpagina="poner la descripcion de la pagina aca";
			$imagenOGpagina="http//www.URLABSOLUTA/img/opengraph2.jpg";
			$metadescription=setVariable($metadescription,"descripcion de la página 2");
			$metakeyworks=setVariable($metakeyworks,"keywords, de, la, página, 2");
			break;
		case 'pagina3':
			$tituloPagina="PAGINA 3";
			$descOGpagina="poner la descripcion de la pagina aca";
			$imagenOGpagina="http//www.URLABSOLUTA/img/opengraph3.jpg";
			$metadescription=setVariable($metadescription,"descripcion de la página 3");
			$metakeyworks=setVariable($metakeyworks,"keywords, de, la, página, 3");
			break;
		default	:
			$tituloPagina="PAGINA POR DEFECTO";
			$descOGpagina="poner la descripcion de la pagina aca";
			$imagenOGpagina="http//www.URLABSOLUTA/img/opengraph.jpg";
			$metadescription=setVariable($metadescription,"descripcion de la página por defecto");
			$metakeyworks=setVariable($metakeyworks,"keywords, de, la, página, por, defecto");
	}
	
	
/*	-------------------------------------------------------------------------- 	
	CODIGOS
	--------------------------------------------------------------------------	*/
	$codigoAnalytics="\n<!-- analytics -->\n".$elcodigoAnalytics."\n<!-- /analytics -->\n"; //le da formato al codgio analytics
	$URLestaPagina = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //obtiene la URL actual y la deja como variables
	function setVariable($variable,$valor){if(strlen($variable)==0){return $valor;}return $variable;} //Cambia las META de la pagina











?>