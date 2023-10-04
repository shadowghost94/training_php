<?php
    class pere
    {
        static public function info($nom)
        {
            static::affiche($nom);
        }

        static public function affiche($nom)
        {
            echo "<h3> Je suis le pere $nom</h3>";
        }
    }

    class fils extends pere
    {
        static public function affiche($nom)
        {
            echo "<h3>Je suis le fils $nom</h3>";
        }
    }

    fils::info('Mathieu');
?>