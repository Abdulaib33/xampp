<?php 

/* 
    PagesControlleur.php
    C'est un ensemble de fonctions nommées Actions
    Hydrater les zones dynamiques du template ($content)

*/

    function showAction() {

        GLOBAL $content;
        ob_start();
            include 'show.php';
        $content =  ob_get_clean();
    }