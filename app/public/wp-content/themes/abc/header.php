<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<header class="site-header">
<div class="contenedor">
<div class="barra-navegacion">
<div class="logo">
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="logo sitio">
</div>
<?php
//Se crea variable que normalmente se denomina args y le paso en el array los parámetros que indica
$args=array(
    'theme_location'=>'menu-principal',
    'container'=>'nav', //nos genera nav wordpress se encarga de generar html
    'container-class'=>'menu-principal'
);
wp_nav_menu($args); //Utilizamos ésta función de wordpress pasándole los argumentos anteriores, esto es todo para poder mostrar el menú

?>

</div>
</div>
<h1>Site header</h1>
</header>