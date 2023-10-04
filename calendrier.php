<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Quel jour c'était?</title>
    </head>

    <body>
        <h1> Quel jour c'était? </h1>
        <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>" >

            <fieldset>
                <legend>Quel jour c'était? </legend>
                Jour&nbsp;&nbsp;&nbsp;<input type="text" name="jour" /><br>
                Mois&nbsp;&nbsp;<input type="text" name="mois" /><br>
                Année<input type="text" name="an" /><br>
                <input type="submit" name="envoi" value="Calculer"/><br>
            </fieldset>

        </form>
        <?php
        //Utiliser un formulaire de saisie de date et donner le jour de la semaine
        if(isset($_POST["envoi"]))
        {

            //Récupération des valeurs
            $jour= $_POST["jour"];
            $mois= $_POST["mois"];
            $an= $_POST["an"];

            //Transformation Grégorien/Julien
            $jd = gregoriantojd($mois,$jour,$an);

            //Traduction en français
            $semaine = array("Sunday"=>" dimanche ","Monday"=>" lundi ","Tuesday"=>" mardi ","Wednesday"=>" mercredi ","Thursday"=>" jeudi ","Friday"=>" vendredi ","Saturday"=>" samedi ");

            //Affichage du résultat
            echo "<h2>Le $jour/$mois/$an était un {$semaine[jddayofweek($jd,1)]} </h2>";

        }

        ?>
    </body>
</html>
