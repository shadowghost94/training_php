<?php
//Date en français
$jour = getdate();
echo "Anglais: Aujourd'hui {$jour["weekday"]} {$jour["mday"]} {$jour["month"]} {$jour["year"]} <br />";

$semaine = array(" dimanche "," lundi "," mardi "," mercredi "," jeudi ", " vendredi "," samedi ");

$mois =array(
    1=>" janvier "," février "," mars "," avril "," mai "," juin ", " juillet "," août "," septembre "," octobre "," novembre "," décembre "

);

//Avec getdate()
echo "Français: Avec getdate() : Aujourd'hui ".$semaine[$jour['wday']]. $jour['mday']. $mois[$jour['mon']]. $jour['year']."<br />";

//Avec date()
echo " Français: Avec date() : Aujourd'hui ". $semaine[date('w')]." ".date('j')." ". $mois[date('n')]. date('Y')."<br />";

?>
