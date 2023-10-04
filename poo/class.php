<?php
    class action
    {
        //constante
        const PARIS="Palais Brognard";
        const NEWYORK="Wall Street";
        //variables propre de la classe
        public $nom;
        public $cours;
        public $bourse=array("Paris","9h00","18h00");

        //fonction propre de la classe
        public function info()
        {
            global $client;
            //Utilisation des variables globales et d'un tableau superglobales
            echo "<h2>Bonjour $client, vous êtes sur le serveur: ".$_SERVER['HTTP_HOST']."</h2>";
            echo "Informations en date du ".date("d/m/Y H:i:s")."<br>";
            echo "<h3>Bourse de {$this->bourse[0]} Cotations de {$this->bourse[1]} à {$this->bourse[2]} </h3>";

            //Informations sur les horaires d'ouverture
            $now=getdate();
            $heure=$now['hours'];
            $jour=$now['wday'];
            echo "<hr/>";
            echo "<h3>Horaires des cotations</h3>";

            if(($heure>=9 && $heure<=17) && ($jour!=0 && $jour!=6))
            {
                echo "La bourse de NewYork (".self::NEWYORK.") est ouverte<br>";
            }else{
                echo "La bourse de NewYork (".self::NEWYORK.") est fermé<br>";
            }

            if(($heure>=16 && $heure<=23)&& ($jour!=0 && $jour!=6))
            {
                echo "La bourse de NewYork (".self::NEWYORK.") est ouverte<br>";
            }else
            {
                echo "La bourse de NewYork (".self::NEWYORK.") est fermé<hr>";
            }

            //Affichage du cours
            if(isset($this->nom) && isset($this->cours))
            {
                echo "<b> L'action $this->nom côtée à la bourse de {$this->bourse[0]} vaut $this->cours euros</b></br>";
            }
        }
    }
?>