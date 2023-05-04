<?php

    if(isset($_POST["annee"])){
        if($_POST["annee"]==1)
        {
            echo"c'est une année bissextile !"."</br>";

        }else
        {
            echo"ce n'est pas une année bissextile !"."</br>";
        }

    }else
    {
        echo"vous n'avez saisi aucune information dans le formulaire !";
    }
?>
