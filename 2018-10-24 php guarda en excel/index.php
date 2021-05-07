<!doctype html>
<html lang="es">
    <head>
		
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="js/favicon.ico">
        
		<title>Formulario</title>
        
        <? $boostrap = "css/bootstrap.min.css"; $theme = "css/bootstrap-theme.min.css";?>
        <link type="text/css" rel="stylesheet" media="screen" href="<?= $boostrap; ?>"/>
        <link type="text/css" rel="stylesheet" media="screen" href="<?= $theme; ?>"/>
        <link type="text/css" rel="stylesheet" media="screen" href="fonts/fonts.css"/>
        <link type="text/css" rel="stylesheet" media="screen" href="js/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" />
        <link type="text/css" rel="stylesheet" media="screen" href="css/style.css?=<?= time(); ?>"/>

		<?
            include('inc/bbdd.php'); 
            
            $cnx = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            
            if (!$cnx)
            die("No se pudo conectar a la base de datos.");
            
            mysql_select_db(DB_NAME, $cnx) or die("No se pudo seleccionar la base de datos");
            mysql_query("SET NAMES 'utf8'");
            date_default_timezone_set("Chile/Continental");
            
            if (!empty($_POST)) {
            	if (isset($_SESSION['repost']) && $_SESSION['repost'] == $_POST['repost']) {
                    // posteo repetido, no hace nada
                } else {
                    $_SESSION['repost'] = $_POST['repost'];
                    // posteo nuevo, seguir con el formulario
                    $campo1 = $_POST["campo1"];
                    $campo2 = $_POST["campo2"];
                    $campo3 = $_POST["campo3"];
                    $campo4 = $_POST["campo4"];
                    $campo5 = $_POST["campo5"];
                    if (!empty($campo1) && !empty($campo2) && !empty($campo3) && !empty($campo4) && !empty($campo5)) {
                        $query = mysql_query(sprintf("INSERT INTO $nombredelaBBDD (campo1,campo2,campo3,campo4,campo5) VALUES ('%s','%s','%s','%s','%s')", mysql_real_escape_string($campo1), mysql_real_escape_string($campo2),mysql_real_escape_string($campo3), mysql_real_escape_string($campo4), mysql_real_escape_string($campo5)));
                        if ($query) {
                            header('Location: gracias.php'); //una vez que el form guarde, redirige a la pagina de gracias
                        } else {
                            $mensaje_error = "(1A) Registro no Completado";
                        } 
                    } else {
                        $mensaje_error = "(1B) Registro no Completado";
                    }
                }
            }
        ?>
            
    </head>  
    <body class="form">        

        <span class="mensaje"><?= $mensaje_error; ?></span>	
            
        <form action=""  method="POST" name="registro" id="registro" onSubmit="return ValidarCampos()">
            <input name="repost" id="repost" type="hidden" value="<?= md5(mt_rand(0, 10)) ?>" />
            <div class="row"><label>CAMPO 1:</label><span><input type="text" name="campo1" id="campo1" class="largo"></span></div>
            <div class="row"><label>CAMPO 2:</label><span><input type="text" name="campo2" id="campo2" class="largo"></span></div>
            <div class="row"><label>CAMPO 3:</label><span><input type="text" name="campo3" id="campo3" class="corto"></span></div>
            <div class="row"><label>CAMPO 4:</label><span><input type="text" name="campo4" id="campo4" class="corto"></span></div>
            <div class="row"><label>CAMPO 5:</label><span><input type="text" name="campo5" id="campo5" class="largo"></span></div>
            <div class="row btn"><input type="submit" class="largo" value="ENVIAR"></div>
        </form>


        <? // --- jQuery --- ?>
		<script type="text/javascript" src="js/jquery.min.js"></script>
        
        <? // --- Core Boostrap --- ?>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<!--[if lt IE 9]>
      	<script src="js/html5shiv.min.js"></script>
      	<script src="js/respond.js"></script>
    	<![endif]-->

        <!-- Formulario de registro -->
        <script src="js/jquery.Rut.min.js"></script>      
        <script src="js/formulario.js"></script>      
        
    </body>
</html>
