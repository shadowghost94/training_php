<?php
    class valeur
    {
        protected $nom;
        protected $prix;

        function __construct($nom,$prix)
        {
            $this->nom=$nom;
            $this->prix=$prix;
        }

        protected function getinfo()
        {
            $info="<h4> Le prix de $this->nom est de $this->prix </h4>";
            return $info;
        }
    }

    class action extends valeur
    {
        public $bourse;
        function __construct($nom,$prix,$bourse="PARIS")
        {
            parent::__construct($nom,$prix);
            $this->bourse=$bourse;
        }

        public function getinfo()
        {
            $info="<h3>Action $this->nom côtée à la bourse de $this->bourse</h3>";
            $info.=parent::getinfo();
            return $info;
        }
    }

    class emprunt extends valeur
    {
        private $taux;
        private $fin;

        function __construct($nom,$prix,$taux,$fin)
        {
            valeur::__construct($nom,$prix);
            $this->taux=$taux;
            $this->fin=mktime(24,0,0,12,31,$fin);
        }

        public function getinfo()
        {
            $reste=round( ( $this->fin-time() )/86400);
            $info="<h3>Emprunt $this->nom au taux de $this->taux %</h3>";
            $info.=valeur::getinfo();
            $info.="<h4>Echéance dans $reste jours </h4>";
            return $info;
        }
    }

    //création d'objets
    $action1= new action("Alcotel", 9.76);
    echo $action1->getinfo();

    $action2= new action("BMI",23.75,"NEW-YORK");
    echo $action2->getinfo();

    $emprunt= new emprunt("EDF",1000,5.5,2012);
    echo $emprunt->getinfo();
?>