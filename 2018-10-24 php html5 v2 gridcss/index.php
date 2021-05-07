<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <? include('inc/head_elements.php'); ?>
        <title>Starter Template for gridCSS</title>
        
        <? 
            /* ARCHIVOS DE EJEMPLO (descomentar css y php) */
            echo "<link rel='stylesheet' href='_ejemplos/grilla_chino.css'>"; 
        ?>

    </head>
    <body>
        
        <?  /* ARCHIVOS DE EJEMPLO (descomentar css y php) */
            include('_ejemplos/repetir_cajas.php');
            include('_ejemplos/maquetado_fracciones.php');
            include('_ejemplos/maquetado_columnas_filas.php');
        ?> 

        <? include('inc/footer_elements.php'); ?>
    </body>
</html>