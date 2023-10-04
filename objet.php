<?php
    class Etudiant{
        protected $etudiant_id;
        protected $nom;
        protected $naissance;

        public function __construct($id,$nom,$naissance) {
            $this->etudiant_id = (int)$id;
            $this->nom = (string)$nom;
            $this->naissance= (int)$naissance;
        }
        public function equals(etudiant $etudiant){
            return ($this->getId() == $etudiant->getId());
        }

        public function getId()
        {
            return $this->etudiant_id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getNaissance()
        {
            return $this->naissance;
        }

        public function __toString()
        {
            setlocale(LC_TIME,"fr_FR");
            $ne=strftime('%A %d %B %Y', $this->naissance);
            return 'etudiant: id='.$this->getId().', nom='.$this->getNom()."$ne";
        }
    }

    /* Test */
    date_default_timezone_set('Europe/Paris');
    $etu=new Etudiant(234,"Talon",time());
    var_dump($etu);
    echo"<br>";
    echo $etu;

?>