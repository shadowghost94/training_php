<?php
    setlocale(LC_TIME, 'fr_FR.UTF-8' , 'fra' );
    echo strftime(" %A %d %B %Y").PHP_EOL;// %e sous unix
    echo "DateTime de base (sans Locale):";

    # Sans la localisation :
    $maintenant = new DateTime();
    echo $maintenant->format('l jS F Y H:i').PHP_EOL;
    echo date('l jS \of F Y h:i:s A')."</br>";
?>

<?php

    $jour = 26; $mois = 8 ; $annee = 1966;

    echo "$jour/$mois/$annee => ";

        var_dump(checkdate($mois,$jour,$annee));echo"</br>";

    $jour = 29; $mois = 2 ; $annee = 2000;

    echo "$jour/$mois/$annee => ",

        var_dump(checkdate($mois,$jour,$annee));echo"</br>";

    $jour = 29; $mois = 2 ; $annee = 2001;

    echo "$jour/$mois/$annee => ";

        var_dump(checkdate($mois,$jour,$annee)); echo"<br />";

        $nmbr_s=time();
        echo $nmbr_s."</br>";
        echo "le nombre de jour depuis la date du 1/1/1970 est: ".round($nmbr_s/86400)." jours"."</br>";
        echo "le nombre de mois depuis la date du 1/1/1970 est: ".round($nmbr_s/2592000)." mois"."</br>";
        echo "le  nombre d'année écoulé depuis la date du 1/1/1970 est: ".round($nmbr_s/31104000)." ans"."</br>";

        $mcrt=microtime();
        echo$mcrt."</br>";
?>
