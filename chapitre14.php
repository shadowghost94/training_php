<?php
    echo "les superglobales ..."."</br>";
    /* 
    *$_GET
    *$_POST
    *$_RESQUEST($_GET & $_POST)
    *$_SERVER
    *$_COOKIES
    *$_SESSION
    *$_GLOBALS
*/

    echo "Exemple de récupération de \$_SERVER grace à la fonction getenv"."<br>";
    function infos(){
        $env=array('remote_addr','http_accept_language','http_host',
        'http_user_agent','script_filename','server_addr','server_name',
        'server_signature','server_software','request_method','query_string',
    'request_uri','script_name');
    
        //construction d'un tableau associatif avec les valeurs 
        //lues dans l'environnement
        $retour=array();
        foreach($env as $clef){
            $retour[$clef]=getenv($clef);
            return $retour;
        }
    }
        echo ('Voici les infos disponible: </br>');
        $tab= infos();
        foreach($tab as $clef=>$val){
            echo $clef." : ".$val."<br>";
        }
?>