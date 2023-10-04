<?PHP
    function datefr($njour=0)
    {
        $timestamp=time()+($njour*24*3600);
        $semaine=array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

        $mois=array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre','Novembre', 'Décembre'
        );

        $retour="En français, aujourd'hui on est: {$semaine[date('w',$timestamp)]} ".date('j')." {$mois[date('n', $timestamp)]} "." ".date('Y', $timestamp)."</br>";

        return $retour;
    }

    $recup=datefr();
    echo $recup;
?>
