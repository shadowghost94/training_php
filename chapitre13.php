<?php
    $jours=array(
        "Lu"=>"Lundi",
        "Ma"=>"Mardi",
        "Me"=>"Mercredi",
        "Je"=>"Jeudi",
        "Ve"=>"vendredi",
        "Sa"=>"Samedi",
        "Di"=>"Dimache"
    );

    /* Utilisation de la boucle foreach */
    foreach($jours as $key=>$valeur){
        echo $key." => ".$valeur."</br>";
    }

    /* Affichage avec la fonction print_r */
    print_r($jours)."</br>";

    /* Utilisation de la fonction array_walk */
    function aff_tab($val,$key)
    {
        echo "$key-$val</br>\n";
    }
    array_walk($jours,'aff_tab')."</br>";
    sort($jours);//la fonction permet de trier un tableau en ordre croissant
    array_walk($jours,'aff_tab')."br"."<br>";
    var_dump($jours)."</br>";
   // natsort($jours);
    var_dump($jours);


?>