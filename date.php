<?php
    /* getdate() est une fonction d'affichage de date qui retourne un 
    tableau associatif de clé: wday;weekday;mday;mon;month;year;hours;
    minutes;seconds;yday */

    $tableDate=getdate();
    echo $tableDate['mday']."/".$tableDate['mon']."/".$tableDate['year']." heure: ".$tableDate['hours']."</br>";

    function mydate(){
        $Dates=getdate();
        $heure=$Dates['hours']-1;
        $minutes=$Dates['minutes'];
        $secondes=$Dates['seconds'];

        $moment="$heure: $minutes: $secondes ";
        return $moment;
    }

    echo mydate();
?>