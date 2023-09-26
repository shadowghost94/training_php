<?php
/*Notions très importants */
    echo "Quelques particularités de php</br>";
    $toto="Bonjour</br>";
    $var="toto";
    echo $$var;

/* ça aussi c'est un peu important */
    $code="echo 'Ah ouais c\'est vrai que je suis dangereux';";
    $result=eval($code);
    echo $result;

?>