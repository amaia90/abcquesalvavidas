<?php

    function abc_menus(){
        // función que te da wordpress para registrar menús
        register_nav_menus(array('menu-principal'=>__('Menu Principal', 'abc'))); //Toma 2 valores el array es asociativo, el primero es el valor que la computadora entiende y el segundo lo que el usuario puede leer más facilmente

    }
//Funciones atar al hook con add_action
add_action( 'init', 'abc_menus');
?>